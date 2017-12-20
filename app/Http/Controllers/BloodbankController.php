<?php

namespace App\Http\Controllers;

use App\Bloodbank;
use Illuminate\Http\Request;

class BloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bloodbank::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bloodbank  $bloodbank
     * @return \Illuminate\Http\Response
     */
    public function show(Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bloodbank  $bloodbank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bloodbank  $bloodbank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bloodbank  $bloodbank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bloodbank $bloodbank)
    {
        //
    }
}
