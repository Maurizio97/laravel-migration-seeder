<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'sold',
        'record_company',
        'genres',
        'publication_date',
        'author'
    ];
}
    
