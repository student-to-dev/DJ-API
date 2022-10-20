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
                           // 'regex:/^[\\p{L} \'.-]+$/',
                          'regex:/^(?:[\p{L}\p{Mn}\p{Pd}\'\x{2019}]+\s[\p{L}\p{Mn}\p{Pd}\'\x{2019}]+\s?)+$/u', 

                                                /* ^   # start of subject
                            (?:     # match this:
                                [           # match a:
                                    \p{L}       # Unicode letter, or
                                    \p{Mn}      # Unicode accents, or
                                    \p{Pd}      # Unicode hyphens, or
                                    \'          # single quote, or
                                    \x{2019}    # single quote (alternative)
                                ]+              # one or more times
                                \s          # any kind of space
                                [               #match a:
                                    \p{L}       # Unicode letter, or
                                    \p{Mn}      # Unicode accents, or
                                    \p{Pd}      # Unicode hyphens, or
                                    \'          # single quote, or
                                    \x{2019}    # single quote (alternative)
                                ]+              # one or more times
                                \s?         # any kind of space (0 or more times)
                            )+      # one or more times
                        $   # end of subject
                        u #to read unicode */

                        ],      
       ],
                [
                'nameSurname.min' => 'Field must be at least 3 characters',      // nameTooShort  surnameTooShort
                'nameSurname.required' => 'Empty field',
                'nameSurname.max' => 'Too much symbols, max allowed 35 characters',                // nameTooLong
                'nameSurname.regex' => 'field must be in Name Surname format, numbers and special characters are not allowed',    // nameWrongCharacter
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
        return $messages;
    }
    }
}
 
           
          