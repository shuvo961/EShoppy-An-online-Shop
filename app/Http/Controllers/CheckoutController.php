<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Session;


class CheckoutController extends Controller
{
    public function checkout(){
        if (Session::get('customerName')){
           return  redirect('cart/show');
        }
        else
        return view('front-end.checkout.checkout');
    }


    public function shipping(){

        $customerId = Session::get('customerId');
        $count = Cart::count();
        if($customerId){
           if ($count!=0){
               $customer = Customer::find(Session::get('customerId'));

               return view ('front-end.checkout.checkout-content',['customer'=>$customer]);
           }
           else
               return redirect('/');
        }
        else
            return redirect('/');

    }

    public function newshipping(Request $request)
    {
        $shipping = new Shipping();
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;
        $shipping->city = $request->city;
        $shipping->state = $request->state;
        $shipping->zip = $request->zip;

        $shipping->save();

        Session::put('shippingId',$shipping->id);

        return redirect('checkout/payment');

    }

    public function payment(){

        $shippingId = Session::get('shippingId');

           if($shippingId){
               return view('front-end.checkout.payment');
           }
           else
               return redirect('/');

    }

    public function confirmOrder(Request $request){



        $paymentMethod = $request->paymentMethod;

        if($paymentMethod== 'cash'){
            $order = new Order();
            $order->customerId = Session::get('customerId');
            $order->shippingId = Session::get('shippingId');
            $order->orderTotal = Cart::total();

            $order->save();

            $payment = new Payment();
            $payment->orderId = $order->id;
            $payment->paymentMethod = $paymentMethod;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetails = new OrderDetails();
                $orderDetails->orderId= $order->id;
                $orderDetails->productId = $cartProduct->id;
                $orderDetails->productName = $cartProduct->name;
                $orderDetails->productPrice = $cartProduct->price;
                $orderDetails->productQuantity = $cartProduct->qty;
                $orderDetails->save();
            }
            Cart::destroy();
            Session::forget('shippingId');

            return redirect('complete/order');


        }


    }
    public function orderSuccess(){
        return redirect('/');
    }

    public function emailcheck($a){
           $customer = Customer::where('email',$a)->first();
           if ($customer){
               echo "User Already Exists";
           }
    }

}
