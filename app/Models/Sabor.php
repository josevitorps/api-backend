<?php

namespace App\Models;

use App\Http\Enums\TamanhoEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    use HasFactory;

    protected  $casts = [
        'tamanho' =>  TamanhoEnum::class
    ];

    protected $fillable = [
        'sabor',
        'valor',
        'tamanho'
    ];
}
