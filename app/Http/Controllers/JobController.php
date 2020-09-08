<?php

namespace App\Http\Controllers;

use App\employeer;
use App\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $emps = new employeer();

        $emp=DB::table('employeers')
            ->where('username',$request->session()->get('username'))
            ->get();
        $request->session()->put('company',$emp[0]->company);
        $jobs=DB::table('jobs')
            ->where('company',$emp[0]->company)
            ->get();
        return view('job.index')->with('jobs',$jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job=new job();
        $job->title=$request->title;
        $job->company=$request->company;
        $job->salary=$request->salary;
        $job->location=$request->location;
        $job->save();
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($job)
    {
        $job=job::find($job);
        return view('job.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job)
    {
        $job=job::find($job);
        $job->title=$request->title;
        $job->company=$request->company;
        $job->salary=$request->salary;
        $job->location=$request->location;
        $job->save();
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $job)
    {
        if(job::destroy($job))
            return redirect()->route('job.index');
        else
            return redirect()->route('job.delete',$job);
    }

    public function delete($id){
        $job=job::find($id);
        return view('job.delete')->with('job',$job);
    }
}
