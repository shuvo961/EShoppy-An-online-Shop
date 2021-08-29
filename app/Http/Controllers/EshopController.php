<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class EshopController extends Controller
{
     public function index(){


         $newProducts= Product::where('publication_status',1)
             ->orderBy('id','DESC')
             ->take(8)
             ->get();

         return view('front-end.home.home',[
              'newProducts'=>$newProducts
         ]);

     }
    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id',$id)
                             ->where('publication_status',1)
                             ->get();

        return view('front-end.category.man-products',[
            'categoryProducts'=>$categoryProducts
        ]);

    }
    public function contact(){


        return view('front-end.contact.contact-us');

    }


    public function single($id){
         $product = Product::find($id);

         return view('front-end.single.single',[
             'product'=>$product
         ]);
    }

    public function about(){


        return view('front-end.about.about');

    }
    public function WomanProduct(){


        return view('front-end.category.woman-products');

    }

    public function forms(){
        return view('admin.forms.forms');

    }

}
