<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

//Added controller
Route::get('/welcome', [PagesController::class, 'welcome']);
Route::get('/login', [PagesController::class, 'admin'])->name('admin');
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/home_page', [PagesController::class, 'home_page'])->name('home_page');
Route::get('/employees_page', action: [PagesController::class, 'employees_page'])->name('employees_page');
Route::get('/payroll_page', [PagesController::class, 'payroll_page'])->name('payroll_page');
Route::get('/view_page', [PagesController::class, 'view_page'])->name('view_page');
Route::get('/edit_page', [PagesController::class, 'edit_page'])->name('edit_page');


Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/home', function () {
    return view('human_resources.home_page'); // Replace 'home' with your home page Blade file
})->name('home_page');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/registration', [AuthManager::class, 'show'])->name('register');
Route::post('/registration', [AuthManager::class, 'register'])->name('registerPost');
//test purposes for tailwind
Route::get('/test', function () {
    return view('Pages.test');
});
