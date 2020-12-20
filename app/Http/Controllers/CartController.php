<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Item;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        
        if ($request->session()->has('cart'))
        {
            $id = $request->user()->user_id;
            $cart = session()->get('cart');
            $cartitems=$cart->items();
            $cartcount=$cart->items()->count();
            $fooditems=Item::where('id',$cartitems);
            return view('cart',compact('cartitems','fooditems','cart',$cartitems,$fooditems,$cart));
        }
        else
        {
            $cart=new Cart();
            $cart->user_id = session('userid');
            $request->session()->put('cart',$cart);
            $cart->save();
            return view('cart');
        }
    }
    public function addtocart(Request $request,$id)
    {
        $user=Auth::user();
        $item=Item::where('id',$id)->first();
        $userid = $user->id;
         if(!$item)
        {
            abort(404);
        }
        //has a cart
        if ($request->session()->has('cart')) 
        {
            $cart = session('cart');
            $cartitem=$cart->items()->where('item_id',$id)->first();
            //item is in cart
           if($cartitem)
           {
               $totalprice=$cart->items()->where('item_id',$id)->first()->pivot->total_price; 
               $unitprice=$cart->items()->where('item_id',$id)->first()->pivot->unit_price; 
               $newtotalprice=$totalprice+$unitprice;
               $cart->items()->where('item_id',$id)->first()->pivot->total_price=$newtotalprice;
               $cart->items()->where('item_id',$id)->first()->pivot->quantity+=1;
               $cart->total_amount =$cart->total_amount + $unitprice;
               $cart->user_id =$userid;
               $cart->save();
               $cart->pivot->save();
               $request->session()->put('cart', $cart); 
               

           } 
           //item is not in cart
           else
           {
                $itemwhole=Item::where('id',$id)->first();
                $itemprice=$itemwhole->price;
                $cart->total_amount+=$itemprice;
                $cart->user_id =$userid;
                $cart->save();
                $itemsincart=array();
                $itemsincart=array( $cart->items());// arrays of item ids
                $updateditemsincart= array_push($itemsincart,$item->id);//pushing the new item into the array
                $cart->items()->attach($updateditemsincart);
                $cart->items()->pivot->update();
                session(['cart' => $cart]);
           }
        }
        //does not have a cart
        else
        {
            $cart=new Cart();
            $cart->user_id =$userid;
            $cart->total_amount=$item->price;
            $cart->save();
            $cart->items()->attach($item->$id);
            $request->session()->put('cart',$cart);        
        }
        return redirect()->route('menu')->with('success', 'Product Added to Cart Successfully!');
    }
    public function create()
    {
        
    }
    public function show()
    {

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
