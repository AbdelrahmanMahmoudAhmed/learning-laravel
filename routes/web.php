<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::view('contact-me', 'contact' , ['page_name'=> 'contact me' , 'page_title'=> 'hi , Do not hesitate to communicate with me']);

Route::get('/category/{id}/{year}', function ($id , $year) {
    $name = request('name');
    $categories = [
        '1'=> 'sucess',
        '2'=> 'failed',
        '3'=> 'acceptance',
    ];

    return view('category' , ['name'=> $name , 'id'=> $categories[ $id ] ?? "this category not found" ,"year" => $year ]  );
});


Route::namespace("Front")->group(function () {

    // all of these routes are access only the functions in the contoller ( Front );
    // Route::get("/users","UserController@showName");

});

Route::group(["prefix"=> "main" , "namespace"=> "Front"], function () {
    // Route::get("/users","UserController@showName");
    Route::get('/users', [UserController::class, 'showName']);
});
Route::resource('/news', NewsController::class);


