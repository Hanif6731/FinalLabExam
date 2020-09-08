<?php

namespace App\Http\Controllers;

use App\employeer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=DB::table('employeers')
            ->get();
        //$users=$user->all();
        return view('employer.index')->with('users',$users);
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
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function show(employeer $employeer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function edit(employeer $employeer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employeer $employeer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeer $employeer)
    {
        //
    }
}
