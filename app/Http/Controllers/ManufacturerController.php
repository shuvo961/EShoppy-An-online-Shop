<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{

    public function addBrand(){

        return view('admin.manufacturer.add-brand');

    }

    public function manageBrand(){

        $manufacturers= Manufacturer::all();
        return view('admin.manufacturer.manage-brand',['manufacturers'=>$manufacturers]);

    }
    public function unpublish($id){
        $manufacturer = Manufacturer::find($id);
        $manufacturer->publication_status = 0;
        $manufacturer->save();
        return redirect('dashboard/manage-brand')->with('message','Brand has been Unpublished');
    }

    public function publish($id){
        $manufacturer = Manufacturer::find($id);
        $manufacturer->publication_status = 1;
        $manufacturer->save();
        return redirect('dashboard/manage-brand')->with('message','Brand has been Published');
    }

    public function editBrand($id){
        $manufacturer= Manufacturer::find($id);
        return view('admin.manufacturer.edit-brand',['manufacturer'=>$manufacturer]);
    }
    public function delete($id){
        $manufacturer= Manufacturer::find($id);
        $manufacturer->delete();
        return redirect('dashboard/manage-brand')->with('message','Manufacturer has been Deleted');
    }

    public function save(Request $request){
        $this->validate($request,[
            'manufacturer_name'=>'required|regex:/(^([a-zA-z]+)(\d+)?$)/u|max:15|min:5',
            'manufacturer_description'=>'required|regex:/(^([a-zA-z]+)(\d+)?$)/u|max:15|min:5',
            'publication_status'=>'required'
        ]);

        Manufacturer::create($request->all());

        return redirect('dashboard/add-brand')->with('message','Manufacturer Brand Added Succesfully');


    }

    public function update(Request $request){

        $manufacturer = Manufacturer::find($request->manufacturer_id);
        $manufacturer->manufacturer_name = $request->manufacturer_name;
        $manufacturer->manufacturer_description = $request->manufacturer_description;
        $manufacturer->publication_status = $request->publication_status;
        $manufacturer->save();

        return redirect('dashboard/manage-brand')->with('message','Manufacturer Brand Updated Succesfully');


    }

}
