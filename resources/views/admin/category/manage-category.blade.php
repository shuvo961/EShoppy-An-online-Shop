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
                      <table class="table table-bordered">
                          <tr class="bg-primary text-white text-center">
                              <th>SL NO</th>
                              <th>Category Name</th>
                              <th>Category Description</th>
                              <th>Pubication Status</th>
                              <th>Action</th>
                          </tr>
                          @php($i=1)
                          @foreach($categories as $category)
                          <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{$category->category_name}}</td>
                              <td>{{$category->category_description}}</td>
                              <td>{{$category->publication_status==1 ? 'Published' : 'Unpublished'}}</td>
                              <td class="text-center m-0 p-0">
                                  @if($category->publication_status==1)
                                     <a href="{{route('unpublished-category', ['id'=>$category->id])}}" class="btn btn-warning btn-xs">
                                         <span> <i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                     </a>
                                  @else()
                                      <a href="{{route('published-category', ['id'=>$category->id])}}" class="btn btn-info btn-xs">
                                          <span> <i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                      </a>
                                  @endif
                                     <a href="{{route('edit-category', ['id'=>$category->id])}}" class="btn btn-success btn-xs">
                                         <span> <i class="fa fa-edit" aria-hidden="true"></i></span>
                                     </a>
                                     <a href="{{route('delete-category', ['id'=>$category->id])}}" class="btn btn-danger btn-xs">
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

