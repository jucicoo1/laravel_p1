<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    protected $guarded = [
        'id',
        'created_at',
    ];

    public function __construct(){
        $authors = \App\Models\Author::all();
    }
}
