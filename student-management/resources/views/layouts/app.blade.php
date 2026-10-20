<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial
scale=1.0"> 
 
    <title>Student Management System</title> 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="bg-light"> 
 
    <nav class="navbar navbar-dark bg-dark"> 
        <div class="container"> 
            <a class="navbar-brand" href="{{ 
route('students.index') }}"> 
                Student Management System 
            </a> 
        </div> 
    </nav> 
 
    <div class="container mt-4"> 
 
        @if(session('success')) 
            <div class="alert alert-success"> 
                {{ session('success') }} 
            </div> 
        @endif 
 
        @yield('content') 
 
    </div> 
 
</body> 
</html>