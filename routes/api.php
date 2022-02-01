<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/// Student class Routes

Route::get('/class', [SclassController::class, 'Index']);
Route::post('/class/store', [SclassController::class, 'Store']);
Route::get('/class/edit/{id}', [SclassController::class, 'Edit']);
Route::post('/class/update/{id}', [SclassController::class, 'Update']);
Route::get('/class/delete/{id}', [SclassController::class, 'Delete']);


/// Subject  Routes
Route::get('/subject', [SubjectController::class, 'Index']);
Route::post('/subject/store', [SubjectController::class, 'Store']);
Route::get('/subject/Editt/{id}', [SubjectController::class, 'SubjectEdit']);
Route::post('/subject/update/{id}', [SubjectController::class, 'SubjectUpdate']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'SubjectDelete']);