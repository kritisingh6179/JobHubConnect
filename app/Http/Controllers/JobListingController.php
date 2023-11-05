<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;
class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobindex()
    {
        $job = JobListing::orderBy('id', 'desc')->get();
        return view('job-listings.index', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job-listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $job = new JobListing();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->company_name = $request->company_name;
        $job->salary = $request->salary;
        $job->save();
        return redirect()->route('jobindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { $job = JobListing::findOrFail($id);
        return view('job-listings.show', compact( 'job'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = JobListing::findOrFail($id);
       
        return view('job-listings.edit', compact( 'job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = JobListing::findOrFail($id);
        $request->validate([
            'title' => 'required'
        ]);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->company_name = $request->company_name;
        $job->salary = $request->salary;
        $job->save();
        return redirect()->route('jobindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = JobListing::findOrFail($id);
        $job->delete();
        return redirect()->route('jobindex');
    }
}
