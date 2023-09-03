<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TaskController;


//?Inicio de todas as rotas da aplicacao

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', TaskController::class);