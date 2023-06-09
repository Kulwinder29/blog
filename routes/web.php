<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Demo;
use App\Http\Controllers\singlecontroller;
use App\Http\Controllers\crud;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;


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

Route::get('/', [Demo::class, 'index']);
Route::get('/', [Demo::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', singlecontroller::class);
// Route::get('register', [FormController::class, 'index']);
// Route::post('register', [FormController::class, 'register']);

Route::get('register', [CustomerController::class, 'index']);
Route::post('register', [CustomerController::class, 'store']);
Route::get('register/view', [CustomerController::class, 'view']);
Route::get('register/show/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

// Route:: get('/contact',[Demo::class,'contact']);
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::view('/contact', 'contact_us');

// Route::get('/about/{name?}', function ($name = null) {
//     $data = compact('name');
//     return view('about')->with($data);
// });

// Route::post('/home', 'FormController@store')->name('/home');

// Route::get('/home', function () {
//     return view('home');
// })->name('/home');


//working get method 
//Route::view('/about','about',["name"=>"Kulwinder"]);
// Route::get('/about',function(){
//     // $name = request()->query('name') ;
//     // $email = request()->query('email') ;
//     // $number = request()->query('number') ;
//     return view('about',["data"=>array($name,$email,$number)]);
// });
