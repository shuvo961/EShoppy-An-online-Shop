@extends("admin.master")

@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mx-auto my-auto">
                <div class="panel panel-default border-0">
                    <div class="panel-heading">
                        <h4 class="text-dark  text-uppercase" align="center">Add - Product</h4>
                    </div>

                    <div class="panel-body">
                        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>


                        {!! Form::open(['route' => 'update-product', 'method' => 'POST','class'=>'form-horizontal', 'name'=>'editProductForm', 'enctype' => 'multipart/form-data']) !!}



                        <div class="form-group row ">
                            {{ Form::label('category_name', 'Category Name',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row ">
                            {{ Form::label('brand_name', 'Brand Name',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->manufacturer_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row mt-lg-3">
                            {{ Form::label('product_name', 'Product Name',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                {{ Form::text('product_name', $product->product_name ,['class'=>'form-control'])}}
                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                <span class="text-danger">{{ $errors->has('manufacturer_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row ">
                            {{ Form::label('product_price', 'Product Price',['class'=>'col-md-3'])}}
                            <div class="col-md-3">
                                {{ Form::number('product_price', $product->product_price,['class'=>'form-control'])}}

                                <span class="text-danger">{{ $errors->has('manufacturer_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>

                            {{ Form::label('product_quantity', 'Product Quantity',['class'=>'col-md-3'])}}
                            <div class="col-md-3">
                                {{ Form::number('product_quantity', $product->product_quantity,['class'=>'form-control'])}}

                                <span class="text-danger">{{ $errors->has('manufacturer_name') ? $errors->first('manufacturer_name') : '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row ">

                        </div>


                        <div class="form-group row ">
                            {{ Form::label('short_description', 'Short Description',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                {{ Form::text('short_description', $product->short_description,['class'=>'form-control'])}}
                                <span class="text-danger">{{ $errors->has('manufacturer_description') ? $errors->first('manufacturer_description') : '' }}</span>

                            </div>
                        </div>

                        <div class="form-group row ">
                            {{ Form::label('long_description', 'Long Description',['class'=>'col-md-3'])}}
                            <div class="col-md-9">
                                <textarea id="editor" class="form-control" name="long_description">{{$product->long_description}}</textarea>
                                <span class="text-danger">{{ $errors->has('manufacturer_description') ? $errors->first('manufacturer_description') : '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row ">
                            {{ Form::label('product_image', 'Product Image',['class'=>'col-md-3'])}}
                            <div class="col-md-6">
                                {{ Form::file('product_image',['accept'=>'image/*'])}}
                                <span class="text-danger">{{ $errors->has('manufacturer_description') ? $errors->first('manufacturer_description') : '' }}</span>
                            </div>
                            <div class="col-md-3">
                                <img height="80" width="80" src="{{asset($product->product_image)}}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3">Publication status</label>
                            <div class="col-md-9 radio">
                                <label><input class="form-control pr-lg-5" type="radio" name="publication_status" {{$product->publication_status==1 ? 'checked' : ''}} value="1"/> Published</label>
                                <label class="ml-lg-5"><input class="form-control " type="radio" name="publication_status" {{$product->publication_status==0 ? 'checked' : ''}} value="0"/> Unpublished</label>

                            </div>
                            <div class="col-md-9 offset-3">
                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                            </div>


                        </div>
                        <div class="form-group row my-lg-3">
                            <div class="col-md-12">
                                <input type="submit" name="btn" value="Update Product Info" class="btn btn-primary btn-block"/>
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

<script>
    document.forms['editProductForm'].elements['category_id'].value= '{{$product->category_id}}';
    document.forms['editProductForm'].elements['brand_id'].value= '{{$product->brand_id}}';

</script>
