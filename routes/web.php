<?php

use App\Http\Controllers\ExpenseController;
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

Route::get('/', [ExpenseController::class,'index'])->name('expense.home');

Route::get('/create', [ExpenseController::class,'displayCreateForm'])->name('expense.create');

Route::get('/edit/{id}', [ExpenseController::class,'displayEditForm'])->name('expense.edit');
Route::get('/delete/{id}', [ExpenseController::class,'deleteForm'])->name('delete.edit');

Route::post('/store', [ExpenseController::class,'store'])->name('expense.store');
Route::post('/update/{id}', [ExpenseController::class,'update'])->name('expense.update');


