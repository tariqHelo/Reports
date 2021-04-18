<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminController;


use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\BrancheController;
use App\Http\Controllers\PublicAdministrationController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix'=>'admin','middleware' => ['auth']], function () {
    
    /// الإدارة العامة 
    Route::resource('publicAdministration', PublicAdministrationController::class);
    Route::get('publicAdministration/delete/{id}', [PublicAdministrationController::class , 'destroy'])->name('public-delete');
    Route::get('publicAdministration/edit/{id}',[PublicAdministrationController::class,'destroy'])->name('branche-edit');

    /// الفروع
    Route::resource('branches', BrancheController::class);
    Route::get('branches/delete/{id}', [BrancheController::class ,'destroy'])->name('branche-delete');
    Route::get('branches/edit/{id}', [BrancheController::class ,'edit'])->name('branche-edit');

    /// الإدارة 
    Route::resource('administration', AdministrationController::class);
    Route::get('administration/delete/{id}',[AdministrationController::class,'destroy'])->name('administration-delete');
    Route::get('administration/edit/{id}',[AdministrationController::class,'edit'])->name('administration-edit');

    /// الإقسام
    Route::resource('sections', SectionController::class);
    Route::get('sections/delete/{id}', [SectionController::class ,'destroy'])->name('section-delete');
    Route::get('sections/edit/{id}',[SectionController::class,'edit'])->name('section-edit');

    /// المستخدمين
    Route::resource('employee', EmployeeController::class);


     // Permissions
     Route::delete('permissions/destroy',[PermissionsController::class
     ,'massDestroy'])->name('permissions.massDestroy');
     Route::resource('permissions', PermissionsController::class);
     // Roles
     Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
     Route::resource('roles', RolesController::class);
     // Users
     Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
     Route::resource('users', UsersController::class);
     
     //change-password
     Route::get("/change-password", [ AdminController::class,'changePassword'])->name("change-password");
     Route::put("/change-password", [ AdminController::class,'postChangePassword'])->name("post-change-password");


});
