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
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
Route::get('/', function () {
    // return new App\Mail\TestMail();
    Mail::to([[
        'name' => 'hogehogesan',
        'email' => 'msht0511@gmail.com'
    ]])->send(new TestMail());
    return view('welcome');
});
