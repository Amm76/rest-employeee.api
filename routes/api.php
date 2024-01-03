<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/goodbye/{name}', function ($name) {
    return "Goodbye " .$name;
});

Route::post('/info', function (Request $request) {
    return "Your name is " . $request["name"]. " Your age is " . $request["age"]." years old";
});

//CReate

Route::post('/tasks', [TaskController::class, 'store']);

Route::get('tasks',[TaskController::class, 'index']); 
// get one employees

Route::get('/tasks/{id}', [TaskController::class, 'show']); 
//Edit 
Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'delete']);