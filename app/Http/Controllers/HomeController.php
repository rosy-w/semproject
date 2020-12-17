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
    public function index()
    {
        $items=Item::all();
        $catagories=Category::all();
        return view('menu',compact('categories','items'));
    }
    public function menu()
    {
        $items=Item::all();
        $catagories=Category::all();
        return view('menu',compact('categories','items'));
    }
}
