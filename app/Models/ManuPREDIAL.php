<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManuPREDIAL extends Model
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
