<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

//Public Routes
Route::get('/studentsinfo', function(){
    return 'All student info API';
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//show all resource
Route::get('/students', [StudentController::class, 'index']);
//show the specified resource
Route::get('/students/{id}', [StudentController::class, 'show']);
//create a new resource
// Route::post('/students', [StudentController::class, 'store']);
// //Update the specified resource
// Route::put('/students/{id}', [StudentController::class, 'update']);
// //Remove the specified resource
// Route::delete('/students/{id}', [StudentController::class, 'destroy']);
// search the specified resource based on city
Route::get('/students/search/{city}', [StudentController::class, 'search']);
//Register a new user
Route::post('/register', [UserController::class, 'register']);
//Login existing user
Route::post('/login', [UserController::class, 'login']);

//Protected Routes single
//Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);

//Route::middleware('auth:sanctum')->get('/students/{id}', [StudentController::class, 'show']);

//Protected Routes in group
Route::middleware('auth:sanctum')->group(function(){
    //create a new resource
    Route::post('/students', [StudentController::class, 'store']);
    //Update the specified resource
    Route::put('/students/{id}', [StudentController::class, 'update']);
    //Remove the specified resource
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    //search the specified resource based on city
    //Route::get('/students/search/{city}', [StudentController::class, 'search']);
    //user logout
    Route::post('/logout', [UserController::class, 'logout']);
});