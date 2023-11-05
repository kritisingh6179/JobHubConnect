@extends('layouts')

@section('content')
<style>
    /* Your CSS styles go here */
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    label {
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="float-start">
        <h4 class="pb-3">Edit Job listing <span class="badge bg-info">{{ $job->title }}</span></h4>
    </div>
    <div class="float-end">
        <a href="{{ route('jobindex') }}" class="btn btn-info">
            <i class="fa fa-arrow-left"></i> All Job
        </a>
    </div>
    <div class="clearfix"></div>
</div>
<form action="{{ route('job.update', $job->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $job->title }}" required>
    
    <label for="description">Description</label>
    <textarea name="description" id="description" required>{{ $job->description }}</textarea>
    
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="{{ $job->location }}" required>
    
    <label for="company_name">Company Name</label>
    <input type="text" name="company_name" id="company_name" value="{{ $job->company_name }}" required>
    
    <label for="salary">Salary</label>
    <input type="number" name="salary" id="salary" value="{{ $job->salary }}" required>
    
    <a href="{{ route('jobindex') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i> Cancel</a>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Save
    </button>
</form>
</div>
@endsection
