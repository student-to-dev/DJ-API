<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = ['nameSurname', 'errors'];
    public function country() 
    {
        return $this->belongsTo('App\Models\Stats');
    }
}
// if validate = true {
//     $status = 200
// } else status = 404
