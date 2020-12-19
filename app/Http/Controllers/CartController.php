<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->user()->id;
        $cartitems=Cart::where('user_id','=',$id);
        return view('cart',compact('cartitems'));
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
    public function store($id)
    {  
        $item = Item::find($id);       
        if(!$item) {
            abort(404);
        }
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                        "user_id" => $request->user()->user_id,
                        "total_amount" => $item->price,                  
            ];
            $cart->items()->attach($item);
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart)) {
            $itemincart=$cart->items()->where('item_id', $item->id)->first();
            if(!$itemincart)
            {
                // if item not exist in cart then add to cart with quantity = 1
                $itemwhole=Item::where('item_id',$item_id)->first();
                $itemprice=$itemwhole->price;
                $cart->total_amount+=$itemprice;
                $cart->save();
                $itemsincart=array();
                $itemsincart= $cart->items();// arrays of item ids
                $updateditemsincart= array_push($itemsincart,$item->item_id);//pushing the new item into the array
                $cart->items()->attach($updateditemsincart);
                $cart->p
                

     
                session()->put('cart', $cart);
     
            return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            else
            {
               $totalprice=$cart->items()->where('item_id',$item_id)->first()->pivot->total_price; 
               $unitprice=$cart->items()->where('item_id',$item_id)->first()->pivot->unit_price; 
               $newtotalprice=$totalprice+$unitprice;
               $cart->items()->where('item_id',$item_id)->first()->pivot->total_price=$newtotalprice;
               $cart->items()->where('item_id',$item_id)->first()->pivot->quantity+=1;
               $cart->pivot->save();
               $cart->total_amount =$cart->total_amount + $unitprice;
               $cart->save();
               session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
 
           
 
        }
 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
