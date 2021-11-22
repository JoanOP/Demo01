<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\StoreController;
use App\Http\Controllers\productosController;

use App\Http\Controllers\tiendaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\adminlte\indexController;







Route::get('/', [HomeController::class, 'listado']);
Route::get('/store', [StoreController::class, 'storepage']);


Route::get('admin/index', [indexController::class, 'index']);

Route::get('admin/store',[tiendaController::class,'tienda']);
Route::post('admin/ingreso/store',[tiendaController::class,'ingresotienda']);
Route::get('admin/store/edit/{id}',[tiendaController::class,'edit']);
Route::put('admin/store/update/{id}',[tiendaController::class,'update']);
Route::delete('admin/store/eliminar/{id}',[tiendaController::class,'eliminar']);

Route::get('admin/categorias',[categoriaController::class,'indexcategoria']);
Route::post('admin/ingreso/categorias',[categoriaController::class,'ingresocategoria']);
Route::get('admin/categorias/edit/{id}',[categoriaController::class,'edit']);
Route::put('admin/categorias/update/{id}',[categoriaController::class,'update']);
Route::delete('admin/categorias/eliminar/{id}',[categoriaController::class,'eliminar']);

Route::get('admin/fabricantes',[FabricanteController::class,'indexfabricante']);
Route::post('admin/ingreso/fabricantes',[FabricanteController::class,'ingresofabricantes']);
Route::get('admin/fabricantes/edit/{id}',[FabricanteController::class,'edit']);
Route::put('admin/fabricantes/update/{id}',[FabricanteController::class,'update']);
Route::delete('admin/fabricantes/eliminar/{id}',[FabricanteController::class,'eliminar']);







