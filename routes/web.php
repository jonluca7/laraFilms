<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonController;

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

/*Route::get('/', function () {
    return "<h1>Hello world</h1>";
});


Route::get('/{name}', function (string $name) {
    return '<h1>Hello '.$name.' !</h1>';
});

**/

Route ::get('/greetings/{name}',
    [MonController ::class, 'greetings']
    
    );