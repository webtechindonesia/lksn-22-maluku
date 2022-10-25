<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_name',
        'form_slug',
        'Description',
        'allowed_domains',
        'limit_one_response',
    ];

    protected $table = 'forms';
}
