<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencias extends Model
{
    use HasFactory;

    protected $fillable = [
        'setor',
        'tipo',
        'local',
        'description',
    ];
}
