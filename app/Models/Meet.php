<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    protected  $fillable = [

        'title',
        'link',
        
    ];

    use HasFactory;
}
