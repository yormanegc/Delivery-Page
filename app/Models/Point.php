<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Point extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(Pedido::class);
    }
}

