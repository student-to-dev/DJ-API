<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $fillable = ['nameTooShort', 'nameWrongCharacter'];

    use HasFactory;

}