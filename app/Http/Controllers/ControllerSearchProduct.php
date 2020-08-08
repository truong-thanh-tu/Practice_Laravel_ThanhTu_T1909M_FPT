<?php

namespace App\Http\Controllers;

use App\ListProduct;
use Illuminate\Http\Request;

class ControllerSearchProduct extends Controller
{
    public function searchProduct( Request $request){
        $listProduct = ListProduct::where('name',$request->name)->get();
        return view('Page.ListProduct',compact('listProduct'));
    }
}
