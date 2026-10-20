@extends('layouts.app') 
 
@section('content') 
 
<h2>Edit Student</h2> 
 
<div class="card"> 
    <div class="card-body"> 
 
        @if($errors->any()) 
            <div class="alert alert-danger"> 
                <ul class="mb-0"> 
                    @foreach($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                    @endforeach 
                </ul> 
            </div> 
        @endif 
 
        <form action="{{ route('students.update', $student) }}" method="POST"> 
 
            @csrf 
            @method('PUT') 
 
            <div class="mb-3"> 
                <label class="form-label">Student Number</label> 
                <input type="text" 
                       name="student_number" 
                       class="form-control" 
                       value="{{ old('student_number', $student>student_number) }}" 
                       required> 
            </div> 
 
            <div class="mb-3"> 
                <label class="form-label">First Name</label> 
                <input type="text" 
                       name="first_name" 
                       class="form-control" 
                       value="{{ old('first_name', $student>first_name) }}" 
                       required> 
            </div> 
 
            <div class="mb-3"> 
                <label class="form-label">Last Name</label> 
                <input type="text" 
                       name="last_name" 
                       class="form-control" 
                       value="{{ old('last_name', $student>last_name) }}" 
                       required> 
            </div> 
 
            <div class="mb-3"> 
                <label class="form-label">Email Address</label> 
                <input type="email" 
                       name="email" 
                       class="form-control" 
                       value="{{ old('email', $student->email) }}" 
                       required> 
            </div> 
 
            <div class="mb-3"> 
                <label class="form-label">Course</label> 
                <input type="text" 
                       name="course" 
                       class="form-control" 
                       value="{{ old('course', $student->course) }}" 
                       required> 
            </div> 
 
            <button type="submit" class="btn btn-success"> 
                Update Student 
            </button> 
 
            <a href="{{ route('students.index') }}" 
               class="btn btn-secondary"> 
                Cancel 
            </a> 
 
        </form> 
 
    </div> 
</div> 
 
@endsection