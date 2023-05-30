<?php
use App\Http\Controllers\BeverageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BeverageController::class, 'index']);
route::resource('/beverage',BeverageController::class);









?>