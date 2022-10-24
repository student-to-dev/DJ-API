<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Stats;
use Illuminate\Support\Facades\DB;

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
        
        $totalPhoneErrors = DB::table('phones')->count();
        $totalPhoneLengthErrors = DB::table('stats')->where('phoneLengthError', 1)->count();
        $totalPhoneRegionErrors = DB::table('stats')->where('phoneRegionError', 1)->count();
        $totalPhoneBadInput = DB::table('stats')->where('phoneBadInput', 1)->count();
        return ([
            'Total Phone validation errors registered: ' . $totalPhoneErrors,
            'Total Phone length validation errors registered: ' . $totalPhoneLengthErrors,
            'Total Phone region validation errors registered: ' . $totalPhoneRegionErrors,
            'Total Phone Bad Input validation errors registered: ' . $totalPhoneBadInput
        ]);
    }
    public function showPhoneErrors()
    {
        $phones = Phone::get('errors');

            return response($phones);
        
        
    }
}
