<?php

use Illuminate\Support\Facades\Route;
use Rish0593\Testing\Http\Controllers\TestingController;

Route::get('testing', [TestingController::class, 'index'])->name('testing');
