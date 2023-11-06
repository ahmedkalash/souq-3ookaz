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

//\Illuminate\Support\Facades\Auth::attempt([
//    'email'=>'kalash@admin.com',
//    'password'=>'ahmed'
//]);
//


// \Illuminate\Support\Facades\Auth::logout();


Route::group([
    'middleware'=> 'guest'
], function (){

        Route::get('/login', function () {
        return view('admin.welcome');
    });



});



Route::group([
    'middleware'=> 'role:super-admin'
], function (){









});


