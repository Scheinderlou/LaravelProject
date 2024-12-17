<?php

use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
//Added controller
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/employees_hr', action: [PagesController::class, 'employees_hr'])->name('employees_hr');
Route::get('/payroll_view', [PagesController::class, 'payroll_view'])->name('payroll_view');
Route::get('/payroll_hr', [PagesController::class, 'payroll_hr'])->name('payroll_hr');



//test purposes for tailwind
Route::get('/test', function () {
    return view('Pages.test');
});
