@extends('admin.master')
@section('head')
    <link rel="stylesheet" href="{{asset('/')}}/admin2/css/invoice.css">
@endsection

@section('body')

    <div class="ihtml mt-0">
        <div class="ibody">

            <header>
                <h1>Invoice</h1>
                <address>
                    <h5 style="">Ordered By</h5>
                    <p>{{$customer->name}}</p>
                    <p>{{$customer->address}}</p>
                    <p>{{$customer->phone}}</p>
                </address>
                <span><img alt="" src="{{asset('/')}}/img/logo.png"><input type="file" accept="image/*"></span>
            </header>
            <article>
                <h5>Recipient</h5>
                <address contenteditable>
                    <p>{{$shipping->name}}<br>{{$shipping->address}}<br>{{$shipping->phone}}</p>
                </address>
                <table class="meta">
                    <tr>
                        <th><span contenteditable>Invoice #</span></th>
                        <td><span contenteditable>000{{$order->id}}</span></td>
                    </tr>
                    <tr>
                        <th><span contenteditable>Date</span></th>
                        <td><span contenteditable>{{$order->created_at}}</span></td>
                    </tr>
                    <tr>
                        <th><span contenteditable>Amount Due</span></th>
                        <td><span id="prefix" contenteditable>Tk.</span><span>{{$order->OrderTotal}}</span></td>
                    </tr>
                </table>
                <table class="inventory">
                    <thead>
                    <tr>
                        <th><span contenteditable>SL.</span></th>
                        <th><span contenteditable>Item</span></th>
                        <th><span contenteditable>Rate</span></th>
                        <th><span contenteditable>Quantity</span></th>
                        <th><span contenteditable>Price</span></th>
                    </tr>
                    </thead>
                      @php($i=1)
                    @foreach($orderDetails as $details)
                        <tbody class="">
                        <tr class="text-center">
                            <th scope="row"  >{{$i++}}</th>
                            <td>{{$details->productName}}</td>
                            <td>Tk. {{$details->productPrice}}</td>
                            <td>{{$details->productQuantity}}</td>
                            <td>Tk. {{$details->productPrice * $details->productQuantity}}</td>
                        </tr>

                        </tbody>
                    @endforeach


                </table>

                <table class="balance">
                    <tr>
                        <th><span contenteditable>Total</span></th>
                        <td><span data-prefix>Tk.</span><span>{{$order->OrderTotal}}</span></td>
                    </tr>
                    <tr>
                        <th><span contenteditable>Amount Paid</span></th>
                        <td><span data-prefix>Tk.</span><span contenteditable>0.00</span></td>
                    </tr>
                    <tr>
                        <th><span contenteditable>Balance Due</span></th>
                        <td><span data-prefix>Tk.</span><span>{{$order->OrderTotal}}</span></td>
                    </tr>
                </table>
            </article>
            <aside>
                <h1><span contenteditable>Additional Notes</span></h1>
                <div contenteditable>
                    <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
                </div>
            </aside>
        </div>
    </div>

@endsection
