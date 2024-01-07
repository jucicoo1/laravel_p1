<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function details(){
        return $this->hasOne('\App\Models\Bookdetail');
    }

    public function author(){
        return $this->belongsTo('\App\Model\Author');
    }
}
