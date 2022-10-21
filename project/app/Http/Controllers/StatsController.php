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
        $allerrors = collect($this->showNameStats())->merge($this->showEmailStats());
        return $allerrors;
    }

    public function showNameStats()
    {
        
         // in collections:    

        //   $total = Name::groupBy('errors')
        //      ->selectRaw('count(*) as total, errors')
        //      ->get()
        //      ->sortByDesc('total');

             $total = DB::table('names')
                  ->select('errors', DB::raw('count(*) as total'))
                  ->groupBy('errors')
                  ->get()
                  ->sortByDesc('total');

            //
        //    $total = Name::groupBy('errors')
        //        ->selectRaw('count(*) as count, errors')
        //        ->sortBy('count')
        //        ->pluck('count', 'errors');
               
       
          return ($total);
      
    }

    public function showEmailStats()
    {

    }

    public function showPhoneStats()
    {

    }
}
