<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Stats;
use App\Models\Name;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function store($data)
    {
        
    }

    public function showStats(Stats $stats)
    {
        
    }

    public function showNameStats()
    {
        
         // in collections:    

        //  $total = Name::groupBy('errors')
        //     ->selectRaw('count(*) as total, errors')
        //     ->get();

            //
        //   $total = Name::groupBy('errors')
        //       ->selectRaw('count(*) as count, errors')
        //       ->pluck('count', 'errors');
        //    // dd($total);
        

            $total = DB::table('names')
                  ->select('errors', DB::raw('count(*) as total'))
                  ->groupBy('errors')
                  ->get();
            
                  foreach($total as $error)
               // dd($error->errors);
                    {
                        if ($error->errors == 'Field must be at least 3 characters') {
                            
                            Stats::create
                  ([
                      'nameTooShort' => $error->total,                     
                  ]);
                        }
                        elseif ($error->errors == 'field must be in Name Surname format, numbers and special characters are not allowed') {
                            
                            DB::table('stats')->where('id', 14)->update
                  ([
                      'nameWrongCharacter' => $error->total,                     
                  ]);
                        }
                        
                    }
        
               //  dd($total);
          return ($total);
      
    }

    public function showEmailStats()
    {

    }

    public function showPhoneStats()
    {

    }
}
