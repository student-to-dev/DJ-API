<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\StatsController;

class NameController extends Controller
{
    public function store(StatsController $stats, Request $request)
    {
        $data = $request->input('name');
        $response = Name::class()->validate($data);
        $stats->store($data);
        return response($response, $response[1]);
        
    }
}
