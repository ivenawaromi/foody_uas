<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function food(){
        return $this->belongsTo(Foods::class, 'order_id', 'id');
    }
}
