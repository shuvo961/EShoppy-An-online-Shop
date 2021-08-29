
@extends('admin.master')


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-11 mx-auto my-auto">
                <div class="panel panel-default border-0">
                    <div class="panel-heading py-lg-3">
                        <h5 class="text-dark  text-uppercase" align="center">Manage - Category</h5>
                    </div>
                    <div class="panel-body">
                        <h3 id="msg" class="text-center text-success"> {{Session::get('message')}}</h3>
                        <table class="table table-responsive table-striped my-auto align-content-center text-center">
                            <tr class="bg-primary text-white text-center">
                                <th>SL NO</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th>Pubication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->manufacturer_name}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>Tk.{{$product->product_price}}</td>
                                    <td>{{$product->product_quantity}}</td>
                                    <td>
                                        <img src="{{asset($product->product_image)}}" alt="" height="100" width="100">
                                    </td>
                                    <td>{{$product->publication_status==1 ? 'Published' : 'Unpublished'}}</td>
                                    <td class="text-center m-0 p-0">
                                        <a href="{{route('view-product', ['id'=>$product->id])}}" title="View" class="btn btn-block btn-info btn-xs">
                                            <span> <i class="fa fa-file" aria-hidden="true"></i></span>
                                        </a>
                                        @if($product->publication_status==1)
                                            <a href="{{route('unpublished-product', ['id'=>$product->id])}}" title="Unpublish" class="btn btn-block btn-warning btn-xs">
                                                <span> <i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                            </a>
                                        @else()
                                            <a href="{{route('published-product', ['id'=>$product->id])}}" title="Publish" class="btn btn-block btn-info btn-xs">
                                                <span> <i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                            </a>
                                        @endif
                                        <a href="{{route('edit-product', ['id'=>$product->id])}}" title="Edit" class="btn btn-block btn-success btn-xs">
                                            <span> <i class="fa fa-edit" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="{{route('delete-product', ['id'=>$product->id])}}" title="Delete" class="btn btn-block btn-danger btn-xs">
                                            <span> <i class="fa fa-trash" aria-hidden="true"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
@endsection

