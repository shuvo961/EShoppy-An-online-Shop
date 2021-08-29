@extends('front-end.master')
@section('head')
    <style>
        .button {
            position: relative;
            background-color: cyan;
            border: none;
            font-size: 28px;
            color: #FFFFFF;
            padding: 20px;
            width: 200px;
            text-align: center;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            cursor: pointer;
        }

        .button:after {
            content: "";
            background: #90EE90;
            display: block;
            position: absolute;
            padding-top: 300%;
            padding-left: 350%;
            margin-left: -20px!important;
            margin-top: -120%;
            opacity: 0;
            transition: all 0.8s
        }

        .button:active:after {
            padding: 0;
            margin: 0;
            opacity: 1;
            transition: 0s
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

    </style>
@endsection

@section('body')


    <div class="container">
        <div class="row mx-auto my-auto py-lg-5 px-lg-3">
            <div class="col-sm-12 " style="padding-top: 20px ; margin-top: 20px">
                <div class="col-md-12">
                    <h4 style="border: #0c0c0c; padding-bottom: 10px;padding-top: 10px; padding-left: 10px ; padding-right: 10px; margin-bottom: 20px ;background-color: #f7e1b5 ; border-radius: 10px" class="text-center">Dear, {{Session::get('customerName')}}. Please select your payment method to complete your order. </h4>
                </div>

                <div class="col-sm-offset-2 col-sm-7">

                    {{Form::open(['route'=>'confirm-order','method'=>'post'])}}

                    <div class="">
                        <div class="form-group col-md-12">
                            <h2 class="bg-gradient-info">Payment</h2>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group col-md-12">
                            {{Session::put('total',Cart::total())}};
                            <span> <h4>You have to pay total BDT {{Cart::total()}} for {{Cart::count()}} items.</h4></span>
                        </div>
                    </div>

                 <div class="form-row">
                        <div class="form-group col-md-12">
                            <select required class="form-control " name="paymentMethod">
                                <option value="" >Please select payment method.....</option>
                                <option value="cash">Cash on delivery</option>
                                <option value="paypal">Paypal</option>
                                <option value="bkash">Bkash</option>
                            </select>

                        </div>
                 </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                           <button class="btn button btn-block"><span><h3>Proceed Payment</h3></span></button>
                        </div>
                    </div>

                    {{Form::close()}}

                </div>

            </div>
        </div>
    </div>

@endsection
