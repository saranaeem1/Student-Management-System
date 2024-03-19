<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    }

    /* Sidebar links */
    .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
    background-color: #04AA6D;
    color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
    }

    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
    margin-top:20px;
    width:900px;
    }
    @media screen and (max-width: 700px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
    }
    @media screen and (max-width: 400px) {
    .sidebar a {
        text-align: center;
        float: none;
    }
    }
  </style>
</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
         </div>
        </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="{{url('/student')}}">Student</a>
            <a href="{{url('/teacher')}}">Teacher</a>
            <a href="{{url('/course')}}">Courses</a>
            <a href="{{url('/batches')}}">Batches</a>
            <a href="{{url('/enrollments')}}">Enrollment</a>
            <a href="{{url('/payments')}}">Payment</a>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="content">
            @yield('content')
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>