<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationCotroller;

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
Route::get('/', [AssociationCotroller::class, 'index'])->name('Acceuil');
route::get('/Adherent', function(){
    return view("Adherent");
})->middleware('auth');
route::get('/periode', function(){
    return view("periode");
})->middleware('auth');
route::get('/transaction', function(){
    return view("transaction");
})->middleware('auth');
route::get('/compte', function(){
    return view('compte');
})->middleware('auth');



route::get('/projet', function(){
    return view('projet');
});
route::get('/information', function(){
    return view('information');
});
route::get('/contact', function(){
    return view('contact');
});
// Route::get('/', function () {
//     return );
// })->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
