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

Route::get('/', function () {
    return view('welcome');
});
//route Admin
Route::get('/index','Admin\AdminController@index')->name('index');

// Types
Route::get('/TypesForm','Admin\TypesController@showtypes')->name('typesform');
Route::post('/Types/Create','Admin\TypesController@create');
Route::get('/AddTypes','Admin\TypesController@addtypes')->name('addtypes');
Route::get('/EditTypes','Admin\TypesController@edittypes')->name('edittypes');

// Product
Route::get('/ProductForm','Admin\AdminController@showproduct')->name('productform');
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');
Route::get('/Addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::get('/Editproduct','Admin\ProductController@editproduct')->name('editproduct');


// Backgroud
Route::get('/admin/backgroud/index','Admin\backgroudController@index')->name('backgroud');
Route::get('/Addbackgroud','Admin\BackgroudController@addbackgroud')->name('addbackgroud');
Route::get('/Editbackgroud','Admin\BackgroudController@editbackgroud')->name('editbackgroud');


// Contents
Route::get('/admin/contents/index','Admin\contentsController@index')->name('contents');
Route::get('/Addcontents','Admin\ContentsController@addcontents')->name('addcontents');
Route::get('/Editcontents','Admin\ContentsController@editcontents')->name('editcontents');


// Specialcontents
Route::get('/admin/specialcontents/index','Admin\specialcontentsController@index')->name('specialcontents');
Route::get('/Addspecialcontents','Admin\specialcontentsController@addspecialcontents')->name('addspecialcontents');
Route::get('/Editspecialcontents','Admin\specialcontentsController@editspecialcontents')->name('editspecialcontents');


//
Auth::routes();

Route::get('/about' , 'HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
