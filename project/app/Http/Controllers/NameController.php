<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\StatsController;
use App\Http\Requests\StoreNameRequest;


class NameController extends Controller
{

    public function store(Request $request) 
    {
          $validator = Validator::make($request->all(),
       [
           'nameSurname' => ['required', 'min:3', 'max:35',
                           // 'not_regex:/^[0-9]+$/',
                            //'regex:/^[a-zA-Z\'\-\040]+$/',
                            'regex:/~^(?:[\p{L}\p{Mn}\p{Pd}\'\x{2019}]+\s[\p{L}\p{Mn}\p{Pd}\'\x{2019}]+\s?)+$/u',
                        ],      
       ],
                [
                'nameSurname.min' => 'Too low characters',      // nameTooShort  surnameTooShort
                'nameSurname.required' => 'Empty field',
                'nameSurname.max' => 'Too much',                // nameTooLong
                'nameSurname.regex' => 'wrong character(s)',    // nameWrongCharacter
               // 'nameSurname.not_regex' => 'no numbers',    // nameWrongCharacter
                ]
       );
                //    nameNumberInput	surnameTooLong	nameNoSpace	nameTooManySpace
          
                    if ($validator->fails()) {
            $messages = $validator->errors()->all();
          // dd($messages);
           foreach ($messages as $message) {
            
            Name::create
                  ([
                      'errors' => $message,
                      'nameSurname' => $request->input('nameSurname'),
                  ]);
                  
        }
        return response($messages, 200);
    }
    }
}
 
           
          