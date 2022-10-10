<?php

namespace App\Http\Controllers;

use App\Models\Surname;
use Illuminate\Http\Request;

class SurnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'KEKW';
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surname  $surname
     * @return \Illuminate\Http\Response
     */
    public function show(Surname $surname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surname  $surname
     * @return \Illuminate\Http\Response
     */
    public function edit(Surname $surname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Surname  $surname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surname $surname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surname  $surname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surname $surname)
    {
        //
    }
}
