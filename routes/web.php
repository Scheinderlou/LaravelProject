<?php

use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
//Added controller
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/payroll_hr', [PagesController::class, 'payroll_hr']);


//test purposes for tailwind
Route::get('/test', function () {
    return view('Pages.test');
});
