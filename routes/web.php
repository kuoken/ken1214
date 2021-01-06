<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\MainController;




Route::get('/', [MainController::class, "index"]);
Route::post('/insert/', [MainController::class, "insert"]);
Route::get('/myremove/{id}',[MainController::class, "delete"]);
Route::get('/mylogout/',[MainController::class, "logout"]);
Route::post('/mylogout/',[MainController::class, "logout"]);


Route::get('/playlist/', [PlayListController::class, "index"]);
Route::post('/playlist/', [PlayListController::class, "index"]);
Route::get('/remove/{id}/',  [PlayListController::class, "remove"]);
Route::post('/remove/{id}/',  [PlayListController::class, "remove"]);
Route::get('/append/',  [PlayListController::class, "append"]);
Route::post('/append/',  [PlayListController::class, "append"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/lucky/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});