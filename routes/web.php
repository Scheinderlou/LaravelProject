<?php

use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

//Added controller
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/dashboard_hr', [PagesController::class, 'dashboard_hr']);
