<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'title',
        'genres',
        'publication_date',
        'author',
        'record_company',
        'duration'
    ];
}
