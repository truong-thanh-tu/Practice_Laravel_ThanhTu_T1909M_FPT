<?php

namespace App\Http\Controllers;
use App\ListProduct;
use Illuminate\Http\Request;

class ControllerAddProduct extends Controller
{
    public function show(){

        return view('Page.AddProduct');
    }
    public function addProduct(Request $request){


        if ($request->hasFile('image')){
            $addProduct = new ListProduct();

            $imageFile = $request->image;
            $imageFile->move('Image',$imageFile->getClientOriginalName());

            $addProduct->name = $request->name;
            $addProduct->image = $imageFile->getClientOriginalName();
            $addProduct->price = $request->price;
            $addProduct->description = $request->description;
            $addProduct->save();

            return redirect()->route('List_Product');

      }

    }
}
