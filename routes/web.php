<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\Livrecontrolleur;
use App\Http\Controllers\Retourcontrolleur;
use App\Http\Controllers\Emprunteurcontrolleur;
use App\Http\Controllers\Empruntcontrolleur;
use App\Http\Controllers\Stockcontrolleur;
use App\Http\Controllers\Combocontrolleur;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Usercontroller;




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

Route::get('/',[Logincontroller::class,'index'])->name('login');
Route::Post('/authenticate',[Logincontroller::class,'authenticate'])->name('authenticate');
Route::get('/error', function(){ return view('error');})->name('error');

Route::get('/welcome', function () {  return view('welcome');})->name=('welcome');
Route::get('/users', function () { return view('users');})->name('users');
Route::get('/edit_user', function () { return view('edit_user');})->name('users.edit');

Route::get('/head', function () { return view('head');})->name('head');

Route::get('/stock', function () {  return view('stock');})->name('stock');

Route::get('/livre',[livrecontrolleur::class,'index'])->middleware(['auth'])->name('livre');
Route::get('/new_livre', function(){return view('new_livre');})->name('livre.new');
Route::post('/store_livre',[Livrecontrolleur::class,'store'])->name('livre.store');
Route::get('/edit_livre/{id}',[Livrecontrolleur::class,'edit'])->name('livre.edit');
Route::POST('/update_livre',[Livrecontrolleur::class,'update'])->name('livre.update');
Route::get('/delete_livre/{id}',[Livrecontrolleur::class,'delete'])->name('livre.delete');



Route::get('/emprunteur',[Emprunteurcontrolleur::class,'index'])->middleware(['auth'])->name('emprunteur');
Route::get('/new_emprunteur', function(){return view('new_emprunteur');})->name('emprunteur.new');
Route::post('/store_emprunteur',[Emprunteurcontrolleur::class,'store'])->name('emprunteur.store');
Route::get('/edit_emprunteur/{id}',[Emprunteurcontrolleur::class,'edit'])->name('emprunteur.edit');
Route::POST('/update_emprunteur',[Emprunteurcontrolleur::class,'update'])->name('emprunteur.update');
Route::get('/delete_emprunteur/{id}',[Emprunteurcontrolleur::class,'delete'])->middleware(['auth'])->name('emprunteur.delete');

Route::get('/retour',[Retourcontrolleur::class,'index'])->middleware(['auth'])->name('retour');
Route::get('/new_retour',[Combocontrolleur::class,'index1'])->middleware(['auth'])->name('retour.new');
Route::post('/store_retour',[Retourcontrolleur::class,'store'])->name('retour.store');
Route::get('/edit_retour/{id}',[Retourcontrolleur::class,'edit'])->name('retour.edit');
Route::Post('/update_retour',[Retourcontrolleur::class,'update'])->name('retour.update');
Route::get('/delete_retour/{id}',[Retourcontrolleur::class,'delete'])->middleware(['auth'])->name('retour.delete');

Route::get('/emprunt',[Empruntcontrolleur::class,'index'])->middleware(['auth'])->name('emprunt');
Route::get('/new_emprunt',[Combocontrolleur::class,'index'])->name('emprunt.new');
Route::post('/store_emprunt',[Empruntcontrolleur::class,'store'])->name('emprunt.store');
Route::get('/edit_emprunt/{id}',[Empruntcontrolleur::class,'edit'])->name('emprunt.edit');
Route::POST('/update_emprunt',[Empruntcontrolleur::class,'update'])->name('emprunt.update');
Route::get('/delete_emprunt/{id}',[Empruntcontrolleur::class,'delete'])->middleware(['auth'])->name('emprunt.delete');

Route::get('/users',[Usercontroller::class,'index'])->name('Users');

Route::get('/acceuil',function(){
    return view('acceuil');
})->name('acceuil');