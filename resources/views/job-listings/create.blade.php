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
        <h4 class="pb-3">Create Job Listing</h4>
    </div>
    <div class="float-end">
        <a href="{{ route('jobindex') }}" class="btn btn-info">
            <i class="fa fa-arrow-left"></i> All Jobs
        </a>
    </div>
    <div class="clearfix"></div>
</div>
<form action="{{ route('job.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Description</label>
    <textarea name="description" id="description" required></textarea>

    <label for="location">Location</label>
    <input type="text" name="location" id="location" required>

    <label for="company_name">Company Name</label>
    <input type="text" name="company_name" id="company_name" required>

    <label for="salary">Salary</label>
    <input type="number" name="salary" id="salary" required>

    <button type="submit">Create</button>
</form>
<a href="{{ route('jobindex') }}">Back to Job Listings</a>
</div>
@endsection
