<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Models\noticia;

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
    $noticias = Noticia::all();
    return view('welcome', compact('noticias' ));


});

Route::resource('noticia',NoticiaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function () {

    Route::get('noticia/', [NoticiaController::class, 'index'])->name('home');

});