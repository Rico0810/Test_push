<?php

use App\Models\user1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('index');
});

Route::get('/history', [BuyerController::class, 'customer1']);

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/', function () {
    return view('login');
});
