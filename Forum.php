<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    protected $fillable = [
        'postalcode', 'email', 'number', 'number','insurancetype'
    ];
}
