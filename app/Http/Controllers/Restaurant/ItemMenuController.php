<?php

namespace App\Http\Controllers\Restaurant;

use App\Models\ItemMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        return view('restaurant.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemMenu  $itemMenu
     * @return \Illuminate\Http\Response
     */
    public function show(ItemMenu $itemMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemMenu  $itemMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemMenu $itemMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemMenu  $itemMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemMenu $itemMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemMenu  $itemMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemMenu $itemMenu)
    {
        //
    }
}
