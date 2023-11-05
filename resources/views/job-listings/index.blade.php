@extends('layouts')

@section('content')
<style>
    /* Your CSS styles go here */
    .float-start {
        float: left;
    }

    .float-end {
        float: right;
    }

    .clearfix {
        clear: both;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    /* li {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
    } */

    /* a.btn {
        text-decoration: none;
        background-color: #007BFF;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        margin-right: 10px;
    }

    a.btn:hover {
        background-color: #0056b3;
    } */
</style>

<div>
    <div class="float-start">
        <h4 class="pb-3">All Jobs</h4>
    </div>
    <div class="float-end">
        <a href="{{ route('job.create') }}" class="btn btn-info">
            <i class="fa fa-plus-circle"></i> Create Job Listing
        </a>
    </div>
    <div class="clearfix"></div>
</div>
<ul>
    @foreach($job as $job)
        <li>
            <a href="{{ route('job.show', $job) }}">
                {{ $job->title }}
            </a>
           
            <p>Description: {{ $job->description }}</p>
<p>Location: {{ $job->location }}</p>
<p>Company: {{ $job->company_name }}</p>
<p>Salary: {{ $job->salary }}</p>

            <a href="{{ route('job.edit', $job) }}">Edit</a>
            <form action="{{ route('job.destroy', $job) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
<a href="{{ route('job.create') }}">Create Job Listing</a>
@endsection
