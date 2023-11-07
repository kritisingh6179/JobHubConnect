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
         // Retrieve all job listings and order them by the newest first.
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
        // Validate the incoming request data.
        $request->validate([
            'title' => 'required'
        ]);
        // Create a new job listing and save it to the database.
        $job = new JobListing();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->company_name = $request->company_name;
        $job->salary = $request->salary;
        $job->save();
        // Redirect to the job listing index page.
        return redirect()->route('jobindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the job listing with the specified ID.
         $job = JobListing::findOrFail($id);
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
          // Retrieve the job listing with the specified ID for editing.
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
        // Retrieve the job listing with the specified ID.
        $job = JobListing::findOrFail($id);
         // Validate the incoming request data.
        $request->validate([
            'title' => 'required'
        ]);
         // Update job listing details.
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->company_name = $request->company_name;
        $job->salary = $request->salary;
        $job->save();
        // Redirect to the job listing index page.
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
        // Retrieve the job listing with the specified ID and delete it.
        $job = JobListing::findOrFail($id);
        $job->delete();
        // Redirect to the job listing index page.
        return redirect()->route('jobindex');
    }
}
