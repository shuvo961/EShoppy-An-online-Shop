<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use Database\Seeders\DatabaseSeeder;
use Faker\Core\File;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(){


         $categories = Category::where('publication_status',1) -> get();
         $brands= Manufacturer::where('publication_status',1) -> get();

        return view('admin.product.add-product',[

            'categories' => $categories,
            'brands' => $brands,
        ]);

    }

    public function manage(){

          $products = DB::table('products')
              ->join('categories' , 'products.category_id','=','categories.id')
              ->join('manufacturers' , 'products.brand_id','=','manufacturers.id')
              ->select('products.*','categories.category_name','manufacturers.manufacturer_name')
              ->get();
          return view('admin.product.manage-product',['products'=>$products]);

    }


    protected function validateProduct($request){
        $this->validate($request,[
            'product_name'=>'required',
            'short_description'=>'required',
            'publication_status'=>'required'
        ]);

    }


    protected function imageUpload($request){
        $product_Image= $request->file('product_image');
      //  $imageName= $product_Image->getClientOriginalName();
        $fileType= $product_Image->getClientOriginalExtension();
        $imageName= $request->product_name.'.'.$fileType;
        $directory = 'product-image/';
        $imgURL= $directory.$imageName;
        //$product_Image->move($directory,$imageName);
        Image::make($product_Image)->save($imgURL);
        return $imgURL;
    }

    protected function saveProductBasic($request,$imgURL){

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imgURL;

        $product->publication_status = $request->publication_status;
        $product->save();


    }


    public function save(Request $request){

        $this->validateProduct($request);

        $imgURL= $this->imageUpload($request);

        $this->saveProductBasic($request,$imgURL);

        return redirect('/dashboard/add-product')->with('message','Product Added Successfully');
    }


    public function publishedProduct ($id) {
            $product = Product::find($id);

            $product->publication_status = 1;
            $product->save();

            return redirect('dashboard/manage-product')->with('message','Product has been Publisehd');

    }

    public function unpublishedProduct ($id) {
        $product = Product::find($id);

        $product->publication_status = 0;
        $product->save();

        return redirect('dashboard/manage-product')->with('message','Product has been Unpublisehd');

    }

    public function editProduct ($id) {
        $product = Product::find($id);
        $categories = Category::where('publication_status',1) -> get();
        $brands= Manufacturer::where('publication_status',1) -> get();
        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories' => $categories,
            'brands' => $brands,
        ]);

    }

    public function deleteProduct ($id) {
        $product = Product::find($id);

        $product->delete();

        return redirect('dashboard/manage-product')->with('message','Product has been Deleted');

    }

    public function viewProduct ($id) {
        $product = Product::find($id);

        return view('admin.product.view-product',['product'=>$product]);

    }


    public function productInfoBasicUpdate($product, $request , $imgURL=null){

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if($imgURL){
            $product->product_image = $imgURL;
        }

        $product->publication_status = $request->publication_status;
        $product->save();


    }

    public function updateProduct (Request $request) {

        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);

        if($productImage){
              unlink($product->product_image);
              $imgURL= $this->imageUpload($request);
              $this->productInfoBasicUpdate($product,$request,$imgURL);
        }
        else {

            $this->productInfoBasicUpdate($product,$request);
        }
        return redirect('dashboard/manage-product')->with('message','Product has been updated successfully');

    }

}
