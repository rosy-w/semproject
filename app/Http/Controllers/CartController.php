<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Item;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('cart');
    }
    public function create()
    {
        
    }
    public function show()
    {

    }
    public function store(Request $request)
    {
        $itemid=$request->id;
        $itemname=$request->name;
        $itemprice=$request->price;
        Cart::add($itemid,$itemname, 1, $itemprice)
        ->associate('App\Item');

        return redirect()->route('cart.index')->with('success_message','Item was added to your cart');
    }
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
