<?php

use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
//Added controller
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/home_page', [PagesController::class, 'home_page'])->name('home_page');
Route::get('/employees_page', action: [PagesController::class, 'employees_page'])->name('employees_page');
Route::get('/payroll_page', [PagesController::class, 'payroll_page'])->name('payroll_page');
Route::get('/view_page', [PagesController::class, 'view_page'])->name('view_page');
Route::get('/edit_page', [PagesController::class, 'edit_page'])->name('edit_page');




//test purposes for tailwind
Route::get('/test', function () {
    return view('Pages.test');
});
