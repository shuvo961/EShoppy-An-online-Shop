@extends("admin.master")

@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mx-auto my-auto">
                <div class="panel panel-default border-0">
                    <div class="panel-heading py-lg-3">
                        <h4 class="text-dark  text-uppercase" align="center">Edit - Category</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
                        <form action="{{ route('update-category') }}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group row my-lg-5">
                                <label class="control-label col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}"/>
                                    <input type="hidden" name="category_id" class="form-control" value="{{$category->id}}"/>
                                </div>
                            </div>
                            <div class="form-gorup row my-lg-5">
                                <label class="control-label col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="category_description" >{{$category->category_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row my-lg-5">
                                <label class="control-label col-md-3">Publication status</label>
                                <div class="col-md-9 radio">
                                    <label><input class="form-control pr-lg-5" type="radio" name="publication_status" {{$category->publication_status==1 ? 'checked' : ''}} value="1"/> Published</label>
                                    <label class="ml-lg-5"><input class="form-control " type="radio" name="publication_status" {{$category->publication_status ==0 ? 'checked' : ''}} value="0"/> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row my-lg-5">
                                <div class="col-md-12">
                                    <input type="submit" name="btn" value="Update Category Info" class="btn btn-primary btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
@endsection
