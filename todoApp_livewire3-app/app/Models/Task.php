<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //*Instanciando a tabela
    protected $table='tasks';

    //?Criando a tabela
    protected $fillable=[
        'Task',
    ];
}
