<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\SellsController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\RoleController; 
use App\Http\Controllers\SuppliesController; 

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

Route::get('/', [PageController::class, 'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function(){

    Route::get('routing', [PageController::class, 'routing'])
        ->middleware('permission:routing');
        
    Route::get('route', [PageController::class, 'routingGuest'])
        ->middleware('permission:route');

    //roles
    Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', [RoleController::class, 'index'])->name('roles.index')
        ->middleware('permission:roles.index');
    
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create')
        ->middleware('permission:roles.create');
    
    Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update')
        ->middleware('permission:roles.edit');
    
    Route::get('role/show/{role}', [RoleController::class, 'show'])->name('roles.show')
        ->middleware('permission:roles.show');
    
    Route::delete('roles/show/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    
    Route::get('roles/show/{role}', [RoleController::class, 'edit'])->name('roles.edit')
        ->middleware('permission:roles.edit');

    //sells
    Route::post('sell/store', [SellsController::class, 'store'])->name('sells.store')
        ->middleware('permission:sells.create');

    Route::get('sell', [SellsController::class, 'index'])->name('sells.index')
        ->middleware('permission:sells.index');
    
    Route::get('sell/create', [SellsController::class, 'create'])->name('sells.create')
        ->middleware('permission:sells.create');
    
    Route::put('sell/{sell}', [SellsController::class, 'update'])->name('sells.update')
        ->middleware('permission:sells.edit');
    
    Route::get('sell/show', [SellsController::class, 'show'])->name('sells.show')
        ->middleware('permission:sells.show');
    
    Route::delete('sell/destroy/{sell}', [SellsController::class, 'destroy'])->name('sells.destroy')
        ->middleware('permission:sells.destroy');
    
    Route::get('sell/edit/{sell}', [SellsController::class, 'edit'])->name('sells.edit')
        ->middleware('permission:sells.edit');

    //users
    Route::post('users/store', [UserController::class, 'store'])->name('users.store')
        ->middleware('permission:users.create');

    Route::get('users', [UserController::class, 'index'])->name('users.index')
        ->middleware('permission:users.index');
    
    Route::get('users/create', [UserController::class, 'create'])->name('users.create')
        ->middleware('permission:users.create');
    
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update')
        ->middleware('permission:users.edit');
    
    Route::get('users/show/{user}', [UserController::class, 'show'])->name('users.show')
        ->middleware('permission:users.show');
    
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy')
        ->middleware('permission:users.destroy');
    
    Route::get('users/{user}', [UserController::class, 'edit'])->name('users.edit')
        ->middleware('permission:users.edit');
    //supplies
    Route::post('supplies/store', [SuppliesController::class, 'store'])->name('supplies.store')
        ->middleware('permission:supplies.create');

    Route::get('supplies', [SuppliesController::class, 'index'])->name('supplies.index')
        ->middleware('permission:supplies.index');
    
    Route::get('supplies/create', [SuppliesController::class, 'create'])->name('supplies.create')
        ->middleware('permission:supplies.create');
    
    Route::put('supplies/{supplie}', [SuppliesController::class, 'update'])->name('supplies.update')
        ->middleware('permission:supplies.edit');
    
    Route::get('supplies/show', [SuppliesController::class, 'show'])->name('supplies.show')
        ->middleware('permission:supplies.show');
    
    Route::delete('supplies/{supplie}', [SuppliesController::class, 'destroy'])->name('supplies.destroy')
        ->middleware('permission:supplies.destroy');
    
    Route::get('supplies/{supplie}', [SuppliesController::class, 'edit'])->name('supplies.edit')
        ->middleware('permission:supplies.edit');
});