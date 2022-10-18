<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\HistoryController;

Route::get('' , [AdminController::class , 'index'])->name('admin.index');







