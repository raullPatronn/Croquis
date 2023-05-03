<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $fillable = ['nombre'];

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
