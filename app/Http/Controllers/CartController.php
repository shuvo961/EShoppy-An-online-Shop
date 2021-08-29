<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {


        $product = Product::find($request->product_id);


        Cart::add([

            'id' => $request->product_id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->quantity,
            'options'=>[
                'image'=>$product->product_image,
                'sdes'=>$product->short_description
            ]
        ]);

        return redirect('cart/show');
    }



    public function showCart( ){

           $cartProducts = Cart::content();



           return view('front-end.cart.show-cart',['cartProducts'=>$cartProducts]);

    }

    public function deleteCart($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');

    }

    public function updateCartPlus(Request $request)
    {
        $qty=$request->qty + 1 ;

        Cart::update($request->rowId,$qty);


        return redirect('cart/show');

    }
    public function updateCart(Request $request)
    {


        Cart::update($request->rowId,$request->qty);


        return redirect('cart/show');

    }

    public function updateCartMinus(Request $request)
    {
        $qty=$request-> qty - 1 ;


        Cart::update($request->rowId,$qty);


        return redirect('cart/show');

    }



}
