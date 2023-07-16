<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Database\Factories\todoFactory;

class todo extends Model
{
   /* protected static function newFactory()
    {
        return todoFactory::new();
    } */
    use HasFactory;
}
