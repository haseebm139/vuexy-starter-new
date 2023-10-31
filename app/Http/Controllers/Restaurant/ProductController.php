<?php

namespace App\Http\Controllers\Restaurant;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::get();

        return view('restaurant.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('restaurant.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        //code...
        $input = $request->except(['_token','image'],$request->all());
        if($request->hasFile('image'))
        {
            $img = Str::random(20).time().$request->file('image')->getClientOriginalName();
            $input['image'] = 'documents/product/'.$img;
            $request->image->move(public_path("documents/product/"), $img);
        }
        $input['slug'] = Str::slug($request->name);
        Product::create($input);
        return redirect()->route('product.index')->with(['message'=>"Create Successful",'type'=>'success']);
        try {

        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('restaurant.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'title' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]);
            //code...
            $input = $request->except(['_token','image'],$request->all());
            if($request->hasFile('image'))
            {
                $img = Str::random(20).time().$request->file('image')->getClientOriginalName();
                $input['image'] = 'documents/product/'.$img;
                $request->image->move(public_path("documents/product/"), $img);
            }
            $input['slug'] = Str::slug($request->name);
            $product->update($input);
            return redirect()->route('product.index')->with(['message'=>"Create Successful",'type'=>'success']);

        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            # code...
            $product->delete();
            return redirect()->back()->with(['message'=>"Destroy Successful",'type'=>'success']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        $statusChange = Product::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Product status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Product status has not changed please try again','type'=>'error');
        }

    }
}
