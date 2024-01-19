<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/body",function(){
//     return view("welcome");
// });

Route::get('/',[IndexController::class,'dataIndex'])->name("body");
Route::post('/getCookie',[IndexController::class,'getCookie'])->name("getCookie");

Route::get('/politicas',[IndexController::class,'policy'])->name("policy");
Route::get('/imc',[IndexController::class,'imc'])->name("imc");
Route::get('/calorias',[IndexController::class,'calories'])->name("calories");
Route::get('/meuTreino',[IndexController::class,'exercises'])->name("exercises");
Route::get('/musculo/{muscle}',[IndexController::class,'dataList'])->name("list");
Route::get('/treino/{gender}',[IndexController::class,'basicTrainning'])->name("basic.trainning");

Route::get('/musculo/{nomeMuscle}/{exercicio}',[IndexController::class,'dataMuscle'])->name("muscle");
Route::get('/addCookie/{muscle}/{exercise}',[IndexController::class,'createCookie'])->name("createAddCookie");

