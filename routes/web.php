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

/*
Route ::get('/', function () {
    return "<h2>Bienvenue sur la page d'accueil</h2>";
});
**/


Route::get('/{name}', function (string $name) {
    return view('hello', 
    ['name' => $name]);
});



Route ::get('/greetings/{name}',
    [MonController ::class, 'greetings']
    
    );
