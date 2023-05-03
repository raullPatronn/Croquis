<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nombre', 'edificio_id'];

    public function edificio()
    {
        return $this->belongsTo(Edificio::class);
    }
    
}
