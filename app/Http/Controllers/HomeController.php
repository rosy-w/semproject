<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use Auth;
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
        $items=Item::where('category_id','=','1')->get();
        $categories=Category::all();
        return view('menu',compact('categories','items'));
    }
    public function category(Category $category)
    {
        $items=Item::where('category_id','=',$category->category_id)->get();
        $categories=Category::all();
        return view('menu',compact('categories','items'));
    }
    public function reservation(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $people=$request->people;
        $message=$request->message;
        $email=$request->email;
        $date=$request->date;
        $time=$request->time;

        $reservation = new Reservation();
        $reservation->name=$name;
        $reservation->phone=$phone;
        $reservation->people=$people;
        $reservation->message=$message;
        $reservation->email=$email;
        $reservation->date=$date;
        $reservation->time=$time;
        $reservation->save();
        
        return redirect()->route('home')->with('success','Your Reservation has been made');
               
    }
    
}
