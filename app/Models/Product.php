<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function links(){
        return $this->hasMany(ProductLinks::class, "product_id");
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
