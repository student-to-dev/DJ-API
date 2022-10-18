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
       // function totalRepeatedName() {
            $total = Name::groupBy('errors')
            ->selectRaw('count(*) as count, errors')
            ->pluck('count', 'errors');
            return $total->all();
      //  }
    }

    public function showEmailStats()
    {

    }

    public function showPhoneStats()
    {

    }
}
