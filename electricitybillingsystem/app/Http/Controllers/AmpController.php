<?php

namespace App\Http\Controllers;

use App\Models\Amp;
use Illuminate\Http\Request;

class AmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = Amp::find(1)->getAmpDetails;

        return view('home', compact('result'));
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
     * @param  \App\Models\Amp  $amp
     * @return \Illuminate\Http\Response
     */
    public function show(Amp $amp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amp  $amp
     * @return \Illuminate\Http\Response
     */
    public function edit(Amp $amp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amp  $amp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amp $amp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amp  $amp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amp $amp)
    {
        //
    }
}
