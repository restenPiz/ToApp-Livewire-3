<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TaskController;


//?Inicio de todas as rotas da aplicacao

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Task', TaskController::class)->name('task');