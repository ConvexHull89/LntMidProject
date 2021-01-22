<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-edit">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar Show {{$book->title}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link "  href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-ite mr-4">
          <a class="nav-link" href="{{route('create')}}">Add Book</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="{{route('edit')}}">Update Book</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>
<div class="container ">
    <h1 class="text-center text-white mt-5">Book's Detail</h1>
    <hr style="height:2px;border-width:1;color:gray;background-color:white;width:50%">
        <div class ="d-flex align-items-center justify-content-center " style="min-height: 50vh">
        <form class="col-lg-6 " action="{{route('store')}}" method="POST">
            <div class="mb-3">
                 <h1 class="text-center text-white">Book's Title : {{$book->title}}</h1>
            </div>
            <div class="mb-3">
                <h1 class="text-center text-white">Book's Author : {{$book->author}}</h1>
            </div>
            <div class="mb-3">
                <h1 class="text-center text-white">Number of Pages : {{$book->pages}}</h1>
            </div>
            <div class="mb-3">
                <h1 class="text-center text-white">Year of Publication : {{$book->year}}</h1>
            </div> 
            </form>
        </div>
</div>
    
</body>
</html>