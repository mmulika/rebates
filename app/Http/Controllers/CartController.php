<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CartController extends Controller
{
    public  function cartList(){
        $cartItems = \Cart::getContent();
        //addcart itrms 

        return view('cart',compact('cart'));
    }

    public function addToCart(Request $request){

        \Cart::add([

            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'attributes'=>array(
                'image'=> $request->image,
            )
            ]);
            session()->flash('success','product is added to th cart  successuflly ');

            return redirect()->route('cart.list');
    }

    public function updateCart(Request $request){

        \Cart::update(
            $request->id,[
                'quantity'=>[
                    'relative' => false,
                    'value' => $request->quantity
                ],

            ]
            );

            session()->flash('success','Item Cart is Update ');

            return redirect()->route('cart.list');

    }

    public function removeCart(Request $request){

        \Cart::remove($request->id);
        session()->flash('sucess','item succesfully removed ');
        return redirect()->route('cart.list');

    }

    public function clearALLCart(){

        \Cart::clear();
            session()->flash('success','all items successfully removed from the cart');
            return redirect()->routr('cart.list');
        }
    }

