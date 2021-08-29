@extends("admin.master")

@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mx-auto my-auto">
                <div class="panel panel-default border-0">
                    <div class="panel-heading py-lg-3">
                        <h4 class="text-dark  text-uppercase" align="center">Add - Brand</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>


                        {!! Form::open(['route' => 'new-brand'] ,['method'=>'POST'] ,['class'=>'form-horizontal']) !!}

                        <div class="form-group row my-lg-5">
                            {{ Form::label('manufacturer_name', 'Brand Name',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                {{ Form::text('manufacturer_name', '',['class'=>'form-control'])}}

                                <span class="text-danger">{{ $errors->has('manufacturer_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>
                        </div>
                        <div class="form-group row my-lg-5">
                            {{ Form::label('manufacturer_description', 'Brand Description',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                {{ Form::text('manufacturer_description', '',['class'=>'form-control'])}}
                                <span class="text-danger">{{ $errors->has('manufacturer_description') ? $errors->first('manufacturer_description') : '' }}</span>

                            </div>
                        </div>

                        <div class="form-group row my-lg-5">
                            <label class="control-label col-md-3">Publication status</label>
                            <div class="col-md-9 radio">
                                <label><input class="form-control pr-lg-5" type="radio" name="publication_status" value="1"/> Published</label>
                                <label class="ml-lg-5"><input class="form-control " type="radio" name="publication_status" value="0"/> Unpublished</label>

                            </div>
                            <div class="col-md-9 offset-3">
                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                            </div>


                        </div>
                        <div class="form-group row my-lg-5">
                            <div class="col-md-12">
                                <input type="submit" name="btn" value="Save Manufacturer Info" class="btn btn-primary btn-block"/>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
@endsection
