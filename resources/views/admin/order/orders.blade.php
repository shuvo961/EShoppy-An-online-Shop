@extends('admin.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

@endsection


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display  table table-primary" style="width:100%">
                    <thead class="bg-gradient-dark">
                    <tr class="text-center text-white">
                        <th scope="col">SL.</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Order Total</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($orders as $order)
                    <tr class="text-center">
                        <th scope="row">{{$i++}}</th>
                        <td>{{$order->name}}</td>
                        <td>{{$order->OrderTotal}}</td>
                        <td>{{$order->created_at}}</td>
                        <th>{{$order->OrderStatus}}</th>
                        <td>{{$order->PaymentMethod}}</td>
                        <td>{{$order->PaymentStatus}}</td>
                        <td>
                            <a href="{{route('view-order-detail',['id'=>$order->id])}}" title="View Order" class="btn btn-success">
                                <span><i class="fa fa-search-plus"></i></span></a>
                            <a href="{{route('view-invoice',['id'=>$order->id])}}" title="View Invoice" class="btn btn-warning">
                                <span><i class="fa fa fa-file"></i></span></a>
                            <a href="{{route('download-order-invoice',['id'=>$order->id])}}" title="Download Invoice" class="btn btn-facebook">
                                <span><i class="fa fa-download"></i></span></a>
                            <a href="{{route('view-order-detail',['id'=>$order->id])}}" title="View Order" class="btn btn-info">
                                <span><i class="fa fa-search-plus"></i></span></a>
                            <a href="{{route('view-order-detail',['id'=>$order->id])}}" title="Delete" class="btn btn-danger">
                                <span><i class="fa fa fa-trash"></i></span></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('script')


    <script src="{{asset('/')}}/admin2/DataTables/datatables.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@endsection
