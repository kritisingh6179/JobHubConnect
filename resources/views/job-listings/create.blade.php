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
.title {
        text-align: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        margin: 10px 0 30px 0;
        font-size: 28px;
        font-weight: 800;
        animation: fadeInUp 1.5s; /* Add animation */
    }
.form {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 18px;
  margin-bottom: 15px;
}
.form-btn {
  padding: 10px 15px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  border-radius: 20px;
  border: 0 !important;
  outline: 0 !important;
  background: teal;
  color: white;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.form-btn:active {
  box-shadow: none;
}

.input {
  border-radius: 20px;
  border: 1px solid #c0c0c0;
  outline: 0 !important;
  box-sizing: border-box;
  padding: 12px 15px;
}
   
@keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
</style>

<div class="container">
    <div class="float-start">
        <h4 class=" title pb-3 " >Create Job Listing</h4>
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-container">
    <form action="{{ route('job.store') }}" method="POST"  class="form">
        @csrf
        
        <label for="title"  >Title</label>
        <input type="text" name="title" id="title" required>
    
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    
        <label for="location">Location</label>
        <input type="text" name="location" id="location" required>
    
        <label for="company_name">Company Name</label>
        <input type="text" name="company_name" id="company_name" required>
    
        <label for="salary">Salary</label>
        <input type="number" name="salary" id="salary" required>
    
        <button type="submit"  class="form-btn">Create</button>
    </form>
</div>
<div class="float-end">
    <a href="{{ route('jobindex') }}" class="btn btn-info">
        <i class="fa fa-arrow-left"></i> All Jobs
    </a>
</div>
</div>
@endsection
