<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;




Route::get('/create',[productController::class, 'create']);
Route::post('/store',[productController::class, 'store']);
Route::get('/',[productController::class, 'index']);
Route::get('/edit/{id}',[productController::class, 'edit']);
Route::post('/update/{id}',[productController::class, 'update']);
Route::get('/delete/{id}',[productController::class, 'delete']);
