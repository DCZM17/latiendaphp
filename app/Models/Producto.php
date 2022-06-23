<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //extender modelo para relacionar cada categoria con el modelo proucto
    public function categoria(){
        // 1 categoria - M productos
        return $this->belongsTo(Categoria::class);
    }
    public function marca(){
        // 1 categoria - M productos
        return $this->belongsTo(marca::class);
    }
} 
