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
                    <h4 style="border: #0c0c0c; padding-bottom: 10px;padding-top: 10px; padding-left: 10px ; padding-right: 10px; margin-bottom: 20px ;background-color: #f7e1b5 ; border-radius: 10px" class="text-center">Dear, {{Session::get('customerName')}}. Please give us product shipping info to complete your valuable order. If your billing info and shipping info is same just press the Save Info. </h4>
                </div>

                <div class="col-sm-offset-2 col-sm-7">

                    {{Form::open(['route'=>'new-shipping','method'=>'post'])}}

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h3 class="bg-gradient-info">Shipping Info goes here..</h3>
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress2">Name</label>
                                <input name="name" type="text" value="{{$customer->name}}" class="form-control" id="inputAddress2" placeholder="Name of the person who gets the package">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input name="email" type="email" value="{{$customer->email}}" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone</label>
                                <input name="phone" type="text" value="{{$customer->phone}}" class="form-control" id="inputPassword4" placeholder="01XXX-XXXXXX">
                            </div>
                        </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                              <label for="inputAddress">Address</label>
                              <input name="address" type="text" value="{{$customer->address}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                      </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input name="city" type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select name="state" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input name="zip" type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit"  class="btn button btn-block"><span><h4>Save Shipping Info</h4></span></button>
                                </div>

                            </div>
                    {{Form::close()}}

                </div>
                <div class="col-sm-3">
                    <table border="1" class="table table-striped" style="width:100% ; padding-top: 60px ; margin-top: 60px">
                        <tr>
                            <th>Total Amount</th>
                            <td><h3>BDT {{Cart::total()}}</h3></td>
                        </tr>
                        <tr>
                            <th>Total Items</th>
                            <td><h4>{{Cart::count()}}</h4></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
     </div>

@endsection
