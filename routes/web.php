<?php

use Illuminate\Support\Facades\Route;
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

Route::prefix('app')->group(function(){
Route::post('/register_user',[UserController::class, 'registerUser']);

});
Route::get('/register',[UserController::class, 'index']);
Route::get('/login',[UserController::class, 'login']);


Route::get('/', function () {
    return view('welcome');
});
