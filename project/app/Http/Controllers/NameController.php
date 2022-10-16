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
        //$name = Name::create($request->all());

       // public function validateName(){

          //  $v = $request;
          $validator = Validator::make($request->all(),
       [
           'nameSurname' => ['required', 'min:3', 'max:64'],        
       ],
                [
                'nameSurname.min' => 'Too low characters'
                ]
       );

          if ($validator->fails()) {
            $messages = $validator->errors();
           // foreach ($messages as $error) {
                //DB::table('names')->insert
               Name::create
                  ([
                      'errors' => $messages
      
                  ]);
                  
          //  }
              return response($messages, 200);
        }
            //return redirect()->back()->withErrors($validator);
    }
}
 
           
            // $messages = $request->messages('error');
            
            // if ($messages != null) {
            //     foreach ($messages as $error) {
            //       // DB::table('names')->insert
            //        Name::create
            //         ([
            //             'errors' => $error
        
            //         ]);
                    
            //     }
            //     return response($messages, 422);
            // }
           
// }
// }