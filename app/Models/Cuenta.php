<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cuenta extends Model
{
    use HasFactory;

    public function ingresos(): HasMany
    {
        return $this->hasMany(Ingreso::class);
    }

    public function egresos(): HasMany
    {
        return $this->hasMany(Egreso::class);
    }
}
