@extends('layouts.app') 
 
@section('content') 
 
<div class="d-flex justify-content-between align-items-center mb-3"> 
    <h2>Student List</h2> 
 
    <a href="{{ route('students.create') }}" class="btn btn primary"> 
        Add Student 
    </a> 
</div> 
 
<div class="card"> 
    <div class="card-body"> 
 
        <table class="table table-bordered table-striped"> 
            <thead> 
                <tr> 
                    <th>Student Number</th> 
                    <th>Name</th> 
                    <th>Email</th> 
                    <th>Course</th> 
                    <th>Actions</th> 
                </tr> 
            </thead> 
 
            <tbody> 
                @forelse($students as $student) 
                    <tr> 
                        <td>{{ $student->student_number }}</td> 
                        <td>{{ $student->first_name }} {{ 
$student->last_name }}</td> 
                        <td>{{ $student->email }}</td> 
                        <td>{{ $student->course }}</td> 
 
                        <td> 
                            <a href="{{ route('students.show', $student) }}" 
                               class="btn btn-info btn-sm"> 
                                View 
                            </a> 
 
                            <a href="{{ route('students.edit', $student) }}" 
                               class="btn btn-warning btn-sm"> 
                                Edit 
                            </a> 
 
                            <form action="{{ route('students.destroy', $student) }}" 
                                  method="POST" 
                                  class="d-inline" 
                                  onsubmit="return confirm('Delete this student?')"> 
 
                                @csrf 
                                @method('DELETE') 
 
                                <button type="submit" class="btn btn-danger btn-sm"> 
                                    Delete 
                                </button> 
                            </form> 
                        </td> 
                    </tr> 
                @empty 
                    <tr> 
                        <td colspan="5" class="text-center"> 
                            No students found. 
                        </td> 
                    </tr> 
                @endforelse 
            </tbody> 
        </table> 
 
    </div> 
</div> 
 
@endsection