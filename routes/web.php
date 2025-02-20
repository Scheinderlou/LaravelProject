<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\functionController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\payrollController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\searchBarController;
use Illuminate\Support\Facades\Route;

//Added controller
Route::get('/user', [PagesController::class, 'user'])->name('user');
Route::get('/welcome', [PagesController::class, 'welcome']);
Route::get('/login', function () {
    return view('pages.admin');
})->name('login');
Route::get('/dashboard_qa', [PagesController::class, 'dashboard_qa']);
Route::get('/payroll_page', [PagesController::class, 'payroll_page'])->name('payroll_page')->middleware('auth');
Route::get('/view_page', [PagesController::class, 'view_page'])->name('view_page');
Route::get('/view_page', [payrollController::class, 'showPayrolls'])->name('view_page');

Route::post('/view_page', [payrollController::class, 'store'])->name('store');

Route::get('/edit_page', [PagesController::class, 'edit_page'])->name('edit_page');
Route::get('/job_page', [PagesController::class, 'job_page'])->name('job_page')->middleware('auth');
Route::get('/department_page', [PagesController::class, 'department_page'])->name('department_page')->middleware('auth');
Route::get('/defects_page', [PagesController::class, 'defects_page'])->name('defects_page');
Route::get('/qa_checks', [PagesController::class, 'qa_checks'])->name('qa_checks');
Route::get('/tp_page', [PagesController::class, 'tp_page'])->name('tp_page');
Route::get('/admin', [employeeController::class, 'inJoin'])->name('admin_page')->middleware('auth');
Route::post('/admin_page', [employeeController::class, 'display'])->name('display');


Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::get('/registration', [AuthManager::class, 'show'])->name('register');
Route::post('/registration', [AuthManager::class, 'register'])->name('registerPost');
Route::post('/job_page', [functionController::class, 'store'])->name('addJob.store');
Route::post('/department_page', [departmentController::class, 'addDepartment'])->name('addDepartment');
Route::put('/job/{id}/update', [functionController::class, 'editJobPost'])->name('editJobPost');
Route::put('/hr_departments/{department_id}/update', [departmentController::class, 'updateDepartmentPost'])->name('updateDepartmentPost');
