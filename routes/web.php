<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Auth\Login::class)->name('login');

Route::group(['middleware'=>[AdminMiddleware::class]], function (){
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::group(['prefix' => 'expenses/'], function(){
        Route::get('/' , \App\Livewire\Admin\Expenses\ExpenseList::class)->name('expenses.expenselists');
        Route::get('/categories' , \App\Livewire\Admin\Expenses\ExpenseCategoryList::class)->name('expenses.categories');
    });
});
