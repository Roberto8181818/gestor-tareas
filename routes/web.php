<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController; 
use Illuminate\Support\Facades\Blade;


Route::controller(CategoriaController::class)->group(function(){
    Route::get('crear-categoria','Create');
    Route::get('listar-categoria','List');
    Route::get('editar-categoria','Edit');
    Route::get('eliminar-categoria','Delete');
});


Route::controller(TareaController::class)->group(function(){
    Route::get('crear-tarea','Create');
    Route::get('listar-tarea','List');
    Route::get('editar-tarea','Edit');
    Route::get('eliminar-tarea','Delete');
});
