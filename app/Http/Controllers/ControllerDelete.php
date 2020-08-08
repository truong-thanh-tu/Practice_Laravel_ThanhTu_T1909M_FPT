<?php

namespace App\Http\Controllers;

use App\ListProduct;
use Illuminate\Http\Request;

class ControllerDelete extends Controller
{
    public function delete($id){
        ListProduct::where('id',$id)->delete();
        return redirect()->route('List_Product');
    }
}
