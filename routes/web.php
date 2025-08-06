<?php
use Illuminate\Support\Facades\Route;
use Modules\Property\App\Http\Controllers\PropertyController;

Route::get('/property', [PropertyController::class, 'index']);
Route::get('/property/cho-thue', [PropertyController::class, 'chothue']);
Route::get('/property/du-an', [PropertyController::class, 'duan']);
Route::get('/property/chi-tiet/{id}', [PropertyController::class, 'show']);

