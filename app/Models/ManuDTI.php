<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManuDTI extends Model
{
    use HasFactory;
    protected $fillable = [
        'setor',
        'manutencao',
        'prioridade',
        'local',
        'description',
    ];
}
