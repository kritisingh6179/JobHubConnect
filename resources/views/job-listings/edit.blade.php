@extends('layouts')

@section('content')
<style>
    /* Your CSS styles go here */
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    .form-container {
  width: 350px;
  height: 600px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 10px;
  box-sizing: border-box;
  padding: 20px 30px;
  justify-content: space-between;
  margin:0 auto;
  margin top:50px;
}
.form{
    padding:10px;
    margin:10px;
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
    
   
    <div class="clearfix"></div>
</div>
<div class="form-container">
<form action="{{ route('job.update', $job->id) }}" method="POST" class="form">
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
</div>
@endsection
