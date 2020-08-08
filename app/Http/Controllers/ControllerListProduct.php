<?php

namespace App\Http\Controllers;
use App\ListProduct;
use Illuminate\Http\Request;

class ControllerListProduct extends Controller
{
    public function show(){
        $listProduct = ListProduct::all();
        return view('Page.ListProduct',compact('listProduct'));
    }
}
