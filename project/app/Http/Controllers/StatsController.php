<?php

namespace App\Http\Controllers;

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
         $total = Name::groupBy('errors')
            ->selectRaw('count(*) as total, errors')
            ->get();

            //
        //  $total = Name::groupBy('errors')
        //      ->selectRaw('count(*) as count, errors')
        //      ->pluck('count', 'errors');
           // dd($total);

           
            return response($total);
      
    }

    public function showEmailStats()
    {

    }

    public function showPhoneStats()
    {

    }
}
