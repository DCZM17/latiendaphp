<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
        //relacion M - 1 con categoria
        public function marca(){
            return $this->hasMany(Marca::class);
        }
}
