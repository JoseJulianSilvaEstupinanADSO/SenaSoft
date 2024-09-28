<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regionale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_regional',
        'latitud',
        'longitud',
        'cantidad_bicicletas'
    ];
}
