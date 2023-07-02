<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    use HasFactory;
    protected $table = 'trains';
    protected $filltable = [
        'azienda',
        'stazione_di_partenza',
        'stazione_di:arrivo',
        'orario_di_partenza',
        'orario_di_arrivo',
        'codice_treno',
        'numero_carrozze',
        'in_orario',
        'cancellato',
    ];
}