<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return 'LMAO';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function show(Name $name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit(Name $name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNameRequest  $request
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Name $name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Name $name)
    {
        //
    }
}
