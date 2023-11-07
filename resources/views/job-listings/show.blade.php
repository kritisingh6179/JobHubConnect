@extends('layouts')

@section('content')
<style>
    /* Your CSS styles go here */
    .box3{
        width: 350px;
  height: 500px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 10px;
  box-sizing: border-box;
  padding: 20px 30px;
    }
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
<div class="box3">
<h1>{{ $job->title }}</h1>
<p>Salary: {{ number_format($job->salary, 2) }}</p>
<p>Description: {{ $job->description }}</p>
<p>Location: {{ $job->location }}</p>
<p>Company Name: {{ $job->company_name }}</p>
<a href="{{ route('job.edit', $job->id) }}">Edit</a>
<form action="{{ route('job.destroy', $job->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this job listing?')">Delete</button>
</form>
</div>
@endsection
