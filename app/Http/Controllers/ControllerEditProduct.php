<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProduct;

class ControllerEditProduct extends Controller
{
    public function show($id){
        $editProduct = ListProduct::where('id',$id)->get()->first();
        return view('Page.EditProduct',compact('editProduct'));
    }
    public function editProduct(Request $request,$id){
        if ($request->hasFile('imageNew')){
            $editproduct = ListProduct::where('ID',$id)->update([
                'name'=>$request->name,
                'image'=>$request->imageNew,
                'price'=>$request->price,
                'description'=>$request->description,
            ]);
        }
        else{
            $editproduct = ListProduct::where('ID',$id)->update([
                'name'=>$request->name,
                'image'=>$request->imageOld,
                'price'=>$request->price,
                'description'=>$request->description,
            ]);
        }
        return redirect()->route('List_Product');
    }
}
