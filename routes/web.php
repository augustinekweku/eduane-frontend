<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//api routes
Route::prefix('app')->group(function(){
Route::post('/register_user',[UserController::class, 'registerUser']);
Route::post('/login_user',[UserController::class, 'loginUser']);

});
//view routes
Route::get('/register',[UserController::class, 'index']);
Route::get('/login',[UserController::class, 'loginIndex']);
Route::get('/mealplans',[MealController::class, 'index']);
Route::get('/logout',[UserController::class, 'logout']);
Route::get('/',[HomeController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });
