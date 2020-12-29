<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayListController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/playlist/', [PlayListController::class, 'index']);
Route::get('/remove/{id}/',  [PlayListController::class, 'remove']);
Route::post('/append/',  [PlayListController::class, 'append']);

Route::get('/lucky/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
