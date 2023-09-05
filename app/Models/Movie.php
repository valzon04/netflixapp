<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    public function category(){
        return $this->belongsTo(Category::class);


    }

    public function serie(){
        return $this->belongsTo(Serie::class);


    }
}

