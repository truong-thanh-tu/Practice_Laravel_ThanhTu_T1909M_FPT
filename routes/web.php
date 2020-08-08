<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*List Product*/
Route::get('/',[
    'as'=>'List_Product',
    'uses'=>'ControllerListProduct@show'
]);
/*Delete Product*/
Route::get('Delete/{id}',[
    'as'=>'Delete',
    'uses'=>'ControllerDelete@delete'
]);
/*Add Product*/
Route::get('Add',[
    'as'=>'Add',
    'uses'=>'ControllerAddProduct@show'
]);
Route::post('Add_Product',[
    'as'=>'Add_Product',
    'uses'=>'ControllerAddProduct@addProduct'
]);
/*Search product*/
Route::post('Search',[
    'as'=>'Search',
    'uses'=>'ControllerSearchProduct@searchProduct'
]);
/*Edit Product*/
Route::get('Edit/{id}',[
    'as'=>'Edit',
    'uses'=>'ControllerEditProduct@show'
]);
Route::post('Edit_Product/{id}',[
    'as'=>'Edit_Product',
    'uses'=>'ControllerEditProduct@editProduct'
]);
