<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;



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

/// Section  Routes
Route::get('/section', [SectionController::class, 'SectionIndex']);
Route::post('/section/store', [SectionController::class, 'SectionStore']);
Route::get('/section/Edit/{id}', [SectionController::class, 'SectionEdit']);
Route::post('/section/update/{id}', [SectionController::class, 'SectionUpdate']);
Route::get('/section/delete/{id}', [SectionController::class, 'SectionDelete']);



/// Student  Routes
Route::get('/student', [StudentController::class, 'StudentIndex']);
Route::post('/student/store', [StudentController::class, 'StudentStore']);
Route::get('/student/Edit/{id}', [StudentController::class, 'StudentEdit']);
Route::post('/student/update/{id}', [StudentController::class, 'StudentUpdate']);
Route::get('/student/delete/{id}', [StudentController::class, 'StudentDelete']);