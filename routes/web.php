<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Auth\Login::class)->name('login');

Route::group(['middleware'=>[AdminMiddleware::class]], function (){
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::group(['prefix' => 'customers/'], function(){
        Route::get('/' , \App\Livewire\Admin\Customers\CustomerList::class)->name('customers.customerlists');
    });
    Route::group(['prefix' => 'expenses/'], function(){
        Route::get('/' , \App\Livewire\Admin\Expenses\ExpenseList::class)->name('expenses.expenselists');
        Route::get('/categories' , \App\Livewire\Admin\Expenses\ExpenseCategoryList::class)->name('expenses.categories');
    });
    Route::group(['prefix' => 'services/'], function(){
        Route::get('/', \App\Livewire\Admin\Services\ServiceTypes::class)->name('services.servicetypes');
        Route::get('/servicelists', \App\Livewire\Admin\Services\ServiceLists::class)->name('services.servicelists');
    });
    Route::group(['prefix' => 'orders/'], function(){
        Route::get('/pos', \App\Livewire\Admin\Orders\POS\Pos::class)->name('orders.pos');
        Route::get('/productlist', \App\Livewire\Admin\Orders\POS\ProductList::class)->name('orders.productlist');
    });
    Route::group(['prefix' => 'invetory/'], function(){
        Route::get('/items', \App\Livewire\Admin\Inventory\ItemList::class)->name('inventory.itemlist');
        Route::get('/addonslist', \App\Livewire\Admin\Inventory\AddOn\AddOnList::class)->name('inventory.addonslist');
        Route::get('/addons/manage/{id?}', \App\Livewire\Admin\Inventory\AddOn\AddOnManage::class)->name('inventory.addonsmanage');
        Route::get('/items/list', \App\Livewire\Admin\Inventory\Item\ItemList::class)->name('inventory.itemslist');
        Route::get('/items/manage/{id?}', \App\Livewire\Admin\Inventory\Item\ItemManage::class)->name('inventory.itemsmanage');
        Route::get('/items/products', \App\Livewire\Admin\Inventory\Item\ProductList::class)->name('inventory.productlist');
        Route::get('/items/categories', \App\Livewire\Admin\Inventory\Item\CategoryList::class)->name('inventory.categorylist');
    });
    Route::group(['prefix' => 'invetory_two/'], function(){
        Route::get('/items', \App\Livewire\Admin\Inventory\ItemListTwo::class)->name('inventory_two.itemlist');
    });
    Route::group(['prefix' => 'invetory_three/'], function(){
        Route::get('/items', \App\Livewire\Admin\Inventory\ItemListThree::class)->name('inventory_three.itemlist');
    });
    Route::group(['prefix' => 'cards/'], function(){
        Route::get('/cards', \App\Livewire\Card\Cards::class)->name('cards');
        Route::get('/ui_components', \App\Livewire\Card\UiComponents::class)->name('ui.components');
    });
    Route::group(['prefix' => 'new_sidebar/'], function(){
        Route::get('/new_sidebar', \App\Livewire\Admin\AdminPanel::class)->name('new_sidebar');
    });
});
