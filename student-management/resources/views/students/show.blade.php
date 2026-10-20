@extends('layouts.app') 
 
@section('content') 
 
<h2>Student Details</h2> 
 
<div class="card"> 
    <div class="card-body"> 
 
        <p><strong>Student Number:</strong> 
            {{ $student->student_number }} 
        </p> 
 
        <p><strong>First Name:</strong> 
            {{ $student->first_name }} 
        </p> 
 
        <p><strong>Last Name:</strong> 
            {{ $student->last_name }} 
        </p> 
 
        <p><strong>Email:</strong> 
            {{ $student->email }} 
        </p> 
 
        <p><strong>Course:</strong> 
            {{ $student->course }} 
        </p> 
 
        <a href="{{ route('students.edit', $student) }}" 
           class="btn btn-warning"> 
            Edit Student 
        </a> 
 
        <a href="{{ route('students.index') }}" 
           class="btn btn-secondary"> 
            Back to List 
        </a> 
 
    </div> 
</div> 
 
@endsection