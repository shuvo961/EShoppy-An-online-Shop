@extends('admin.master')



@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-lg-3">

                <div class="card">

                    <div class="card-body">
                        <table  class="table table-bordered" >
                            <h3 class="text-center card-heading text-primary">Order info</h3>
                            <tr>
                                <th>Order ID</th>
                                <td>{{$order->id}}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{$order->OrderStatus}}</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>{{$order->OrderTotal}}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{$order->created_at}}</td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>

               <div class="col-md-6 py-lg-3">

                   <div class="card">

                       <div class="card-body">
                           <table  class="table table-bordered" >
                               <h3 class="text-center card-heading text-primary">Customer info for this order</h3>
                               <tr>
                                   <th>Customer Name</th>
                                   <td>{{$customer->name}}</td>
                               </tr>
                               <tr>
                                   <th>Email Address</th>
                                   <td>{{$customer->email}}</td>
                               </tr>
                               <tr>
                                   <th>Phone Number</th>
                                   <td>{{$customer->phone}}</td>
                               </tr>
                               <tr>
                                   <th>Address</th>
                                   <td>{{$customer->address}}</td>
                               </tr>

                           </table>
                       </div>
                   </div>

               </div>
            <div class="col-md-6 py-lg-3">

                <div class="card">

                    <div class="card-body">
                        <table  class="table table-bordered" >
                            <h3 class="text-center card-heading text-primary">Shipping info for this order</h3>
                            <tr>
                                <th>Ship To</th>
                                <td>{{$shipping->name}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$shipping->phone}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$shipping->city}}</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>{{$shipping->state}}</td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-6 py-lg-3">

                <div class="card">

                    <div class="card-body">
                        <table  class="table table-bordered" >
                            <h3 class="text-center card-heading text-primary">Payment info for this order</h3>
                            <tr>
                                <th>Payment Method</th>
                                <td>{{$payment->paymentMethod}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$payment->paymentStatus}}</td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>


            <div class="col-md-12 py-lg-3">

                <div class="">

                    <div class="">

                        <table  class="table table-bordered" >
                            <thead class="" style="background-color: royalblue ">
                            <tr class="text-center text-white">
                                <th scope="col">SL.</th>
                                <th scope="col">Product Id</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            @php($i=1)
                            @foreach($orderDetails as $details)
                            <tbody class="">
                                <tr class="text-center">
                                    <th scope="row" class="table-active" style="font-weight:bold;" >{{$i++}}</th>
                                    <td>{{$details->productId}}</td>
                                    <td>{{$details->productName}}</td>
                                    <td>Tk. {{$details->productPrice}}</td>
                                    <td>{{$details->productQuantity}}</td>
                                    <td>Tk. {{$details->productPrice * $details->productQuantity}}</td>
                                </tr>

                            </tbody>
                            @endforeach
                            <th colspan="4">Grand Total inc Vat</th>
                            <td class="text-center font-weight-bolder" colspan="2">Tk. {{$order->OrderTotal}}</td>

                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



