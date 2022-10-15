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
        Name::create([
            'nameSurname' => $request->input('nameSurname'),
        ]);
        $validator = Validator::make($request->all(),
       [
           'nameSurname' => ['required', 'min:4', 'max:64'],
           
       ],
[
'nameSurname.min' => 'Too low characters'
]
       );
       if ($validator->fails()) {
          // $request->flash();
           return redirect()->back()->withErrors($validator);
        
    }
}
}