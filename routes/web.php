<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\Livrecontrolleur;
use App\Http\Controllers\Retourcontrolleur;
use App\Http\Controllers\Emprunteurcontrolleur;
use App\Http\Controllers\Empruntcontrolleur;



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

Route::get('/', function () {  return view('welcome');});

Route::get('/livre',[livrecontrolleur::class,'index'])->name('livre');
Route::get('/new_livre', function(){return view('new_livre');})->name('livre.new');
Route::post('/store_livre',[Livrecontrolleur::class,'store'])->name('livre.store');
Route::get('/edit_livre/{id}',[Livrecontrolleur::class,'edit'])->name('livre.edit');
Route::POST('/update_livre',[Livrecontrolleur::class,'update'])->name('livre.update');
Route::get('/delete_livre/{id}',[Livrecontrolleur::class,'delete'])->name('livre.delete');



Route::get('/emprunteur',[Emprunteurcontrolleur::class,'index'])->name('emprunteur');
Route::get('/new_emprunteur',function(){return view('new_emprunteur');})->name('emprunteur.new');
Route::post('/store_emprunteur',[Emprunteurcontrolleur::class,'store'])->name('emprunteur.store');
Route::get('/edit_emprunteur/{id}',[Emprunteurcontrolleur::class,'edit'])->name('emprunteur.edit');
Route::POST('/update_emprunteur',[Emprunteurcontrolleur::class,'update'])->name('emprunteur.update');
Route::get('/delete_emprunteur/{id}',[Emprunteurcontrolleur::class,'delete'])->name('emprunteur.delete');

Route::get('/retour',[Retourcontrolleur::class,'index'])->name('retour');
Route::get('/new_retour',function(){return view('new_retour');})->name('retour.new');
Route::post('/store_retour',[Retourcontrolleur::class,'store'])->name('retour.store');
Route::get('/edit_retour/{id}',[Retourcontrolleur::class,'edit'])->name('retour.edit');
Route::Post('/update_retour',[Retourcontrolleur::class,'update'])->name('retour.update');
Route::get('/delete_retour/{id}',[Retourcontrolleur::class,'delete'])->name('retour.delete');

Route::get('/emprunt',[Empruntcontrolleur::class,'index'])->name('emprunt');
Route::get('/new_emprunt',function(){return view('new_emprunt');})->name('emprunt.new');
Route::post('/store_emprunt',[Empruntcontrolleur::class,'store'])->name('emprunt.store');
Route::get('/edit_emprunt/{id}',[Empruntcontrolleur::class,'edit'])->name('emprunt.edit');
Route::POST('/update_emprunt',[Empruntcontrolleur::class,'update'])->name('emprunt.update');
Route::get('/delete_emprunt/{id}',[Empruntcontrolleur::class,'delete'])->name('emprunt.delete');