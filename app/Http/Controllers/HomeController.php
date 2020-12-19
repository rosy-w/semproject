<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $categories=Category::all();
        return view('welcome',compact('categories'));
    }
    public function index()
    {
        $items=Item::all();
        $categories=Category::all();
        return view('home',compact('categories','items'));
    }
    public function menu(Category $category)
    {
        $items=Item::where('category_id','=',$category->category_id)->get();
        $categories=Category::all();
        return view('menu',compact('categories','items'));
    }
    public function category(Category $category)
    {
        $items=Item::where('category_id','=',$category->category_id)->get();
        $categories=Category::all();
        return view('menu',compact('categories','items'));
    }
    
}
