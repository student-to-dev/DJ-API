<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    static public function validate($data) 
    {
        
        $response = [
            'valid' => true,
            'status' => 200,
            'message' => "MJ"

        ];
        return $response;
    }
}
// if validate = true {
//     $status = 200
// } else status = 404
