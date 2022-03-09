<?php

use App\Events\PusherConfig;
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
    return event(new PusherConfig('asd'));
});
// event(new PusherConfig('asd'));

Route::get('/sender', function () {
    return view('sender');
});

Route::post('/sender', function () {
    // $message = request()->message;
    $message = ['name'=> 'hamza', 'role' => 'fullstack Dev'];
    event(new PusherConfig($message));
});
