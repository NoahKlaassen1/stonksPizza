<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class)->withPivot('quantity');
    }



    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
