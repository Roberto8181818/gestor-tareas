<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController; 
use Illuminate\Support\Facades\Blade;

Route::get('/', CategoriaController::class);

Route::controller(CategoriaController::class)->group(function(){
    Route::get('crear-categoria','Create');
});


Route::controller(TareaController::class)->group(function(){
    Route::get('crear-curso','Create');
});
