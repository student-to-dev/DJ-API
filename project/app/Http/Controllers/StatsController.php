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

    public function showNameStats(Request $request)
    {
        
         // in collections:    

        //  $total = Name::groupBy('errors')
        //     ->selectRaw('count(*) as total, errors')
        //     ->get();

            //
          $total = Name::groupBy('errors')
              ->selectRaw('count(*) as count, errors')
              ->pluck('count', 'errors');
           // dd($total);


        //    $total = DB::table('names')
        //          ->select('errors', DB::raw('count(*) as total'))
        //          ->groupBy('errors')
        //          ->get();
        
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
