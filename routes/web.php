<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
use App\Http\Controllers\classController;
use App\Http\Controllers\eskulController;

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

 Route::get('/index', function () {
   return view('index');
});
Route::get('/data',function () {
    return view('data');
});
Route::get('/eskuls',function () {
    return view('eskuls');
});


Route::get('/data',[dataController::class, 'index']);
Route::get('/data-add',[dataController::class, 'create']);
Route::get('/data-add',[dataController::class, 'jurusan']);
Route::post('/data',[dataController::class, 'store']);
Route::get('/data-edit/{id}',[dataController::class, 'edit']);
Route::put('/data/{id}',[dataController::class, 'update']);
Route::get('/data-delete/{id}',[dataController::class, 'delete']);
Route::delete('/data-destroy/{id}',[dataController::class, 'destroy']);

Route::get('/classroom',[classController::class, 'index']);

Route::get('/eskuls',[eskulController::class, 'index']);
Route::get('/eskuls-add',[eskulController::class, 'create']);
Route::get('/eskuls-add',[eskulController::class, 'kategori']);
Route::post('/eskuls',[eskulController::class, 'store']);
Route::get('/eskuls-edit/{id}',[eskulController::class, 'edit']);
Route::put('/eskuls/{id}',[eskulController::class, 'update']);
Route::get('/eskuls-delete/{id}',[eskulController::class, 'delete']);
Route::delete('/eskuls-destroy/{id}',[eskulController::class, 'destroy']);

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout',function (){
    \Auth::logout();
    return redirect('/');
});
