<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class MenuController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $modelsKeys = array_keys(Config::get('laratrust.user_models'));
        $modelKey = $request->get('model') ?? $modelsKeys[0] ?? null;
        $userModel = Config::get('laratrust.user_models')[$modelKey] ?? null;
        if (!$userModel) {
            abort(404);
        }
        $items=Item::orderBy('id')->paginate(10);
        $categories=Category::all();
        return view('admin.menu.index',compact('categories','items','modelKey'));
    }
    public function edit(Item $item)
    {
        $categories=Category::all();
        $itemcategory =  Category::where('category_id','=',$item->category_id);
        return view('admin.menu.edit',compact('item','itemcategory','categories'));
    }
    public function update()
    {

    }
    public function add()
    {
        $categories=Category::all();
        return view('admin.menu.add',compact('item','itemcategory','categories'));

    }
    public function store(StoreItemRequest $request)
    {
        $data = $request->validated();
        $categories=Category::all();
        $itemcategory =  Category::where('category_id','=',$item->category_id);
        $item = new Item();
        $item->name = $data["name"];
        $item->description = $data["detail"];
        $item->category_id=$data["category"];
        // Attach item to category
        $item->category_id = $request->category()->id;
        // End Attach item to category
        $item->save();
             
        $items=Item::all();
        $categories=Category::all();
        return view('admin.menu.index',compact('categories','items','modelKey'));

    }
}
