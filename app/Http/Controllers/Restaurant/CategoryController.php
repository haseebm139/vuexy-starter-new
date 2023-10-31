<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('restaurant.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.category.create');
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
            'image' => 'required',
        ]);
        try {
            //code...
            $input = $request->except(['_token','image'],$request->all());
            if($request->hasFile('image'))
            {
                $img = Str::random(20).time().$request->file('image')->getClientOriginalName();
                $input['image'] = 'documents/categories/'.$img;
                $request->image->move(public_path("documents/categories/"), $img);
            }
            $input['slug'] = Str::slug($request->name);
            Category::create($input);
            return redirect()->route('category.index')->with(['message'=>"Create Successful",'type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('restaurant.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $this->validate($request, [
            'name' => 'required',

        ]);
        try {
            //code...
            $input = $request->except(['_token','image','_method'],$request->all());
            if($request->hasFile('image'))
            {
                $img = Str::random(20).time().$request->file('image')->getClientOriginalName();
                $input['image'] = 'documents/categories/'.$img;
                $request->image->move(public_path("documents/categories/"), $img);
            }
            $input['slug'] = Str::slug($request->name);
            $category->update($input);
            return redirect()->route('category.index')->with(['message'=>"Update Successful",'type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            //code...
            Category::find($category->id)->delete();
            return redirect()->route('category.index')
                            ->with(['message'=>'Category delete successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->route('category.index')
            ->with(['message'=>'Please Try Again','type'=>'error']);

        }
    }

    public function change_status(Request $request)
    {
        $statusChange = Category::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Category status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Category status has not changed please try again','type'=>'error');
        }

    }
}
