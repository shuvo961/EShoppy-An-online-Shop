<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class OrderController extends Controller
{
    public function view(){
           $orders = DB::table('orders')

               ->join('customers','orders.customerId','=','customers.id')
               ->join('payments','orders.id','=','payments.OrderId')
               ->select('orders.*','customers.name','payments.PaymentMethod','payments.PaymentStatus')
               ->get();

           return view('admin.order.orders',['orders'=>$orders]);
    }

    public function details($id){
         $order = Order::find($id);
         $customer = Customer::find($order->customerId);
         $shipping = Shipping::find($order->ShippingId);
         $payment = Payment::where('orderId',$order->id)->first();
         $orderDetails = OrderDetails::where('orderId',$order->id)->get();


         return view('admin.order.order-details',[
             'customer'=> $customer,
             'shipping'=>$shipping,
             'payment'=> $payment,
             'orderDetails'=>$orderDetails,
             'order'=>$order
         ]);

    }

    public function invoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->ShippingId);
        $payment = Payment::where('orderId',$order->id)->first();
        $orderDetails = OrderDetails::where('orderId',$order->id)->get();
        return view('admin.order.invoice',[
            'customer'=> $customer,
            'shipping'=>$shipping,
            'payment'=> $payment,
            'orderDetails'=>$orderDetails,
            'order'=>$order
        ]);
    }
    public function download($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->ShippingId);
        $payment = Payment::where('orderId',$order->id)->first();
        $orderDetails = OrderDetails::where('orderId',$order->id)->get();


        $pdf = PDF::loadView('admin.order.pdf',[
            'customer'=> $customer,
            'shipping'=>$shipping,
            'payment'=> $payment,
            'orderDetails'=>$orderDetails,
            'order'=>$order
        ]);

        return $pdf->stream('invoice.pdf');

    }

}
