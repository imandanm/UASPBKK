<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\InventoryController;

Route::resource('inventory', InventoryController::class);

// Rute lainnya di bawah ini
Route::get('/', function () {
    return view('welcome');
});
