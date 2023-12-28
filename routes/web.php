<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdaksController;
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



Route::get('/', function () {
  return view('index');
});

// Route::get('/prodak', function () {
//     return view('prodak');  
//   });

  Route::get('/tentang', function () {
    return view('tentang');
  });

Route::get('/data-prodak',[ProdaksController::class,'index']);
Route::get('/tambah-prodak',[ProdaksController::class,'form']);
Route::post('/tambah-prodak',[ProdaksController::class,'create']);
Route::get('/edit-prodak/{ID}',[ProdaksController::class,'show']);
Route::post('/edit-prodak/{ID}',[ProdaksController::class,'edit']);
Route::get('/hapus-prodak/{ID}',[ProdaksController::class,'destroy']);
