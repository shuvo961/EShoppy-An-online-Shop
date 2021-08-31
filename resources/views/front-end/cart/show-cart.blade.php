

@extends('front-end.master')

@section('head')

    <link href="{{asset('/')}}/front-end/css/cart.css" rel='stylesheet' type='text/css'/>

@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <header id="site-header">
                    <div class="container">
                        <h1>Shopping cart <span>[</span> <em><a href="https://codepen.io/tag/rodeo-007" target="_blank">Check Out if ready</a></em> <span class="last-span is-open">]</span></h1>
                    </div>
                </header>

                <div class="container">

                    <section id="cartbox">





                        @foreach($cartProducts as $cartProduct)



                            <article class="product">
                                <header>
                                    <a class="remove">
                                        <img class="thumbnail"  src="{{asset($cartProduct->options->image)}}" alt="">

                                        <a href="{{route('delete-cart-item',['rowId'=>$cartProduct->rowId])}}"><h3>Remove product</h3></a>
                                    </a>
                                </header>

                                <div class="content">

                                    <h1>{{$cartProduct->name}}</h1>

                                    {{$cartProduct->options->sdes}}

                                    <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
                                    <div style="top: 43px" class="type small">XXL</div>
                                </div>

                                <footer class="content">

                                    {{--<span   class="qt-minus" id="minus" >-</span>--}}



                                    {{Form::open(['route'=>'update-cart','method'=>'post' ,'name'=>'formupdate' ,'id'=>'123'])}}


                                    <input name="qty" id="target" class="qt" type="number" min="0" value="{{$cartProduct->qty}}">
                                    <input name="rowId" type="hidden" value="{{$cartProduct->rowId}}">
                                    <input type="submit" name="submit" value="Update" >

                                    {{Form::close()}}


                                    {{--
                                                    <span  class="qt-plus" id="plus" >+</span>
                                    --}}
                                    <h2 class="full-price">
                                        {{$cartProduct->price}}
                                    </h2>

                                    <h2 class="price">
                                        {{$cartProduct->price}}
                                    </h2>
                                </footer>
                            </article>

                        @endforeach

                    </section>

                </div>

                <div id="site-footer">
                    <div class="container clearfix">

                       <div class="row">
                           <div class="col-sm-12">
                               <div class="left">
                                   <h2 class="subtotal">Subtotal: <span>{{Cart::subtotal()}}</span> Tk.</h2>
                                   <h3 class="tax">Taxes (5%): <span>{{Cart::tax()}}</span> Tk.</h3>
                                   <h3 class="shipping">Shipping: <span>0.00</span> Tk.</h3>
                               </div>

                               <div class="right">
                                   <h1 class="total">Total: <span>{{Cart::total()}}</span> TK.</h1>
                                   @if(Session::get('customerId'))
                                       <a href="{{route('checkoutShipping')}}" class="btn">Checkout</a>
                                   @else
                                       <a href="{{route('checkout')}}" class="btn">Checkout</a>
                                   @endif
                               </div>

                           </div>
                       </div>

                    </div>
                </div>


                <script>
                    document.getElementById("target").addEventListener("change", Update);
                    function Update() {
                        document.getElementById('123').submit();
                    }

                </script>





            </div>
        </div>
    </div>
@endsection

@section('script')


    <script src="{{asset('/')}}/front-end/js/cart.js"></script>

@endsection







