<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\functionController;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

//Added controller
Route::get('/user', [PagesController::class, 'user'])->name('user');
Route::get('/welcome', [PagesController::class, 'welcome']);
Route::get('/login', [PagesController::class, 'admin'])->name('admin');
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/admin_page', [PagesController::class, 'admin_page'])->name('admin_page');
Route::get('/payroll_page', [PagesController::class, 'payroll_page'])->name('payroll_page');
Route::get('/view_page', [PagesController::class, 'view_page'])->name('view_page');
Route::get('/edit_page', [PagesController::class, 'edit_page'])->name('edit_page');
Route::get('/job_page', [PagesController::class, 'job_page'])->name('job_page');
Route::get('/department_page', [PagesController::class, 'department_page'])->name('department_page');
Route::get('/defects_page', [PagesController::class, 'defects_page'])->name('defects_page');
Route::get('/qa_checks', [PagesController::class, 'qa_checks'])->name('qa_checks');
Route::get('/tp_page', [PagesController::class, 'tp_page'])->name('tp_page');



Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/admin', function () {
    return view('human_resources.admin_page');
})->name('admin_page');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/registration', [AuthManager::class, 'show'])->name('register');
Route::post('/registration', [AuthManager::class, 'register'])->name('registerPost');
Route::post('/job_page', [functionController::class, 'store'])->name('addJob.store');
Route::post('/department_page', [departmentController::class, 'addDepartment'])->name('addDepartment');
Route::put('/job/{id}/update', [functionController::class, 'editJobPost'])->name('editJobPost');

