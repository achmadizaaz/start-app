<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route sesua user login
Route::prefix('/dashboard')->middleware(['auth'])->group(function(){

    Route::prefix('/users')->controller(UserController::class)->group(function(){
        
        Route::get('/', 'index')
        ->name('users.index');
    
        Route::get('create', 'create')
        ->name('users.create');
    
        Route::post('create', 'store')
        ->name('users.store');

        Route::get('{user:slug}/show','show')
        ->name('users.show');

        Route::get('{slug}/edit', 'edit')
        ->name('users.edit');

        Route::put('{slug}/edit', 'update')
        ->name('users.update');

        Route::delete('{slug}/delete', 'destroy')
        ->name('users.delete');
    });

    Route::prefix('users/roles')->controller(RoleController::class)->group(function(){
        Route::get('/', 'index')
        ->name('users.roles.index');

        Route::post('/', 'store')
        ->name('users.roles.store');

        Route::delete('{name}/delete', 'destroy')
        ->name('users.roles.delete');
    });

});

require __DIR__.'/auth.php';
