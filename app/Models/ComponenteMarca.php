<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponenteMarca extends Model
{
    use HasFactory;

    protected $fillable = [
        'componente_id',
        'marca_id',
        'cantidad',
        'comentario'
    ];

    public function componente(){
        return $this->hasMany('App\Models\Componente');
    }

    public function marca(){
        return $this->hasMany('App\Models\Marca');
    }
}
