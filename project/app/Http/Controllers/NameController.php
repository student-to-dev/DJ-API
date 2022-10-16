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
           'nameSurname' => ['required', 'min:3', 'max:64','regex:/^[A-Za-z-]+$/'],        
       ],
                [
                'nameSurname.min' => 'Too low characters',
                'nameSurname.required' => 'Empty field',
                'nameSurname.max' => 'Too much',
                'nameSurname.regex' => 'wrong character(s)',
                ]
       );

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
 
           
          