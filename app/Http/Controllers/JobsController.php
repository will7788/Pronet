<?php
//William Thornton, Sam Krall, 06/28/2020

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs');
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
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobs $jobs)
    {
        //
    }
}
