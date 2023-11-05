@extends('layouts')

@section('content')
<style>
    /* Your CSS styles go here */
    h1 {
        color: #007BFF;
    }

    p {
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        background-color: #007BFF;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        margin-right: 10px;
    }

    a:hover {
        background-color: #0056b3;
    }

    button {
        background-color: #d9534f;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        margin-right: 10px;
    }

    button:hover {
        background-color: #c9302c;
    }
</style>

<h1>{{ $job->title }}</h1>

<p>Salary: {{ number_format($job->salary, 2) }}</p>
<a href="{{ route('job.edit', $job->id) }}">Edit</a>
<form action="{{ route('job.destroy', $job->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this job listing?')">Delete</button>
</form>
<a href="{{ route('jobindex') }}">Back to Job Listings</a>
@endsection
