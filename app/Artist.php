<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'age',
        'date_of_birth',
        'stage_name',
        'record_company'
    ];
}
