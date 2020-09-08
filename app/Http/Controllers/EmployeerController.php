<?php

namespace App\Http\Controllers;

use App\employeer;
use App\Http\Requests\adminRequests;
use App\User;
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
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(adminRequests $request)
    {
        $emp=new employeer();
        $emp->name=$request->name;
        $emp->username=$request->username;
        $emp->password=$request->password;
        $emp->company=$request->company;
        $emp->contact=$request->contact;
        $emp->save();
        return redirect()->route('employer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function show($employeer)
    {
        $employeer=employeer::find($employeer);
        return view('employer.show')->with('user',$employeer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function edit($employeer)
    {
        $employeer=employeer::find($employeer);
        return view('employer.edit')->with('user',$employeer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function update(adminRequests $request,$employeer)
    {
        $emp=employeer::find($employeer);
        $emp->name=$request->name;
        $emp->username=$request->username;
        $emp->password=$request->password;
        $emp->company=$request->company;
        $emp->contact=$request->contact;
        $emp->save();
        return redirect()->route('employer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employeer  $employeer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$employeer)
    {
        if(employeer::destroy($employeer))
        return redirect()->route('employer.index');
        else
            return redirect()->route('employer.delete',$employeer);
    }

    public function delete($id){
        $employer=employeer::find($id);
        return view('employer.delete')->with('user',$employer);
    }
}
