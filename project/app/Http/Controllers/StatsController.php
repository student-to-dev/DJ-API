<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Stats;

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
        
    }

    public function showEmailStats()
    {

    }

    public function showPhoneStats()
    {
        return response(Phone::all());
    }
    public function showPhoneErrors()
    {
        $phones = Phone::get('errors');
        return response($phones);
        
    }
}
