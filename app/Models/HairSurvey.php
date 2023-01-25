<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HairSurvey extends Model
{
    use HasFactory;
    protected $fillable = [
        'hair_Type',
        'hair_Structure',
        'hair_Moisture',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

}
