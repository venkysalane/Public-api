<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::post('/students', [StudentController::class, 'store']);
//Update the specified resource
Route::put('/students/{id}', [StudentController::class, 'update']);
//Remove the specified resource
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
//Remove the specified resource
Route::get('/students/search/{city}', [StudentController::class, 'search']);
