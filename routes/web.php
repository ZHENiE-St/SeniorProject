<?php

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
//set Controller
//            Menu
Route::get('customers','PagesController@getCustomer');
Route::get('work','PagesController@getWork');
Route::get('work2','PagesController@getWork2');
Route::get('work3','PagesController@getWork3');
Route::get('work4','PagesController@getWork4');
Route::get('work5','PagesController@getWork5');
Route::get('work6','PagesController@getWork6');
Route::get('total','PagesController@getTotal');
Route::get('homepage','PagesController@getHomepage');
//test
// Route::get('testPages','PagesController@getPasing');
// Route::get('testPassing','PagesController@getPasing');
// Route::get('pages/{id?}','PagesController@getShow');

Route::get('index','PagesController@getIndex');
//homepage
Route::get('/', function () {
    return view('menu.homepage');
});
//Example

//test

Route::post('/store',function(){
  //
});
Route::put('/update',function(){
  //
});
Route::patch('/update',function(){
  //
});
Route::delete('/destroy',function(){
  //
});
Route::match(['get','post'],'hello',function(){
  //
});
Route::any('/edit',function(){
  //
});
