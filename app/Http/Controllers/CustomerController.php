<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;

class CustomerController extends Controller
{
    public function signup(Request $request){

        $this->validate($request,[
            'email' => 'email|unique:customers,email'
        ]);

        $customer =  new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        $customerId= $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->name);

        $data= $customer->toArray();

        Mail::send('front-end.mails.confirmation-mail', $data , function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Confirmation Mail');
        });



        return redirect('checkout/shipping');

    }

    public function login(Request $request){

        $customer = Customer::where('email',$request->email)->first();


        if($customer)
        {
            if(Hash::check($request->password, $customer->password)){
                $customerId= $customer->id;
                Session::put('customerId',$customerId);
                Session::put('customerName',$customer->name);
                return redirect('checkout/shipping');
            }
            else{
                return redirect('Customer-Panel')->with('message','Please enter valid password');
            }
        }
        else{
            return  redirect('Customer-Panel')->with('message','Please enter valid email');
        }

    }


    public function logout(){
        Session::forget('customerName');
        Session::forget('customerId');

        return redirect('/');
    }
}
