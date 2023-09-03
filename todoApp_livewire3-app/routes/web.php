<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductList;


//?Inicio de todas as rotas da aplicacao

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', ProductList::class)->name('products.index');