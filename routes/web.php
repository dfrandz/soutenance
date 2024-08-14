<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Client\EcoleController;
use App\Http\Controllers\Client\FormationController;
use App\Http\Controllers\Institue\Auth\AuthController as InstutueAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.pages.welcome');
});

Route::get('/formations', [FormationController::class, 'listFormations'])->name('formations');
Route::get('/ecoles', [EcoleController::class, 'ecoles'])->name('ecoles');



//ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/register', [AuthController::class, 'customRegistration'])->name('requestRegister');
        Route::post('/login', [AuthController::class, 'customLogin'])->name('requestLogin');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::get('/dashboard', [LayoutController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/roles',[RoleController::class, 'index'])->name('roles');
        Route::post('/roles', [RoleController::class, 'storeRole'])->name('storeRole');
    });

});


//INSTITUES ROUTES
Route::prefix('institue')->name('institue.')->group(function(){
    Route::middleware(['guest:institue'])->group(function(){
        Route::get('/login', [InstutueAuthController::class, 'login'])->name('login');
    });

    Route::middleware(['auth:institue'])->group(function(){
        Route::get('/dashboard', [LayoutController::class, 'dashboard'])->name('dashboard');
        
    });

});
