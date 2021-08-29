<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\True_;

class CategoryController extends Controller
{
   public function add(){
       return view("admin.category.add-category");
   }

   public function manage(){
       $categories = Category::all();
       return view("admin.category.manage-category",['categories'=>$categories]);
   }

    public function unpublishedCategory($id){
              $category = Category::find($id);
              $category->publication_status = 0;
              $category->save();
        return redirect('dashboard/manage-category')->with('message','Category has been Unpublished');
    }
    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('dashboard/manage-category')->with('message','Category has been Published');
    }

    public function editCategory($id){
        $category = Category::find($id);

        return view("admin.category.edit-category",['category'=>$category]);
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('dashboard/manage-category')->with('message','Category has been Deleted');
    }


    public function save(Request $request) {

//       $category  =  new Category();
//
//       $category->category_name = $request->category_name;
//       $category->category_description = $request->category_description;
//       $category->publication_status = $request->publication_status;
//       $category->save();

     Category::create($request->all());

//          DB::table('categories')->insert([
//              'category_name'           => $request->category_name,
//              'category_description'    => $request->category_description,
//              'publication_status'      => $request->publication_status
//          ]);



        return redirect('dashboard/add-category')->with('message','Category Added Succesfully');

    }

    public function update(Request $request)
    {
        $category = Category::find($request->category_id);

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('dashboard/manage-category')->with('message','Category edited Successfullyphp');
    }




}
