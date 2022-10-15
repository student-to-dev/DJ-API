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

    public function store(StoreNameRequest $request) 
    {
        //$name = Name::create($request->all());

       // public function validateName(){

            //$v = $request;
            $messages = $request->messages('error');
            if ($messages !== null) {
                foreach ($messages as $error) {
                  // DB::table('names')->insert
                   Name::create
                    ([
                        'errors' => $error
        
                    ]);
                    
                }
                return response($messages, 422);
            }
           
}
}