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
//department controller
Route::resource('department', 'departmentcrudController');

Route::post('department/update', 'departmentcrudController@update')->name('department.update');

Route::get('department/destroy/{id}', 'departmentcrudController@destroy');

//store routes
Route::resource('store-crud', 'storeCrudController');

Route::post('store-crud/update', 'storeCrudController@update')->name('store-crud.update');

Route::get('store-crud/destroy/{id}', 'storeCrudController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
