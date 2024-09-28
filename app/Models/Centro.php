<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'longitud',
        'altura',
        'telefono_centro',
        'regional_id'
    ];
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function ciclas()
    {
        return $this->hasMany(Bicicleta::class);
    }
}
