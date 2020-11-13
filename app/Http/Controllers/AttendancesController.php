<?php

namespace App\Http\Controllers;

use App\Attendances;
use Illuminate\Http\Request;


class AttendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendances::all();
        return view('attendance', compact('attendances')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Attendances::create($request->all());
        return redirect('/attendance');
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
     * @param  \App\attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function show(attendances $attendances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function edit(attendances $attendances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendances $attendances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendances $attendances)
    {
        //
    }
}
