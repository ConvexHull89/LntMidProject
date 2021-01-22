<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-welcome">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-ite mr-4">
          <a class="nav-link" href="{{route('create')}}">Add Book</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link active" aria-current="page" href="#">Update Book</a>
        </li>

      </ul>
    
    </div>
  </div>
</nav>
<table class="table table-hover">
  <thead class="">
    <tr>
      <th class="text-white" scope="col">No.</th>
      <th class="text-white" scope="col">Book's Title</th>
      <th class="text-white" scope="col">Author</th>
      <th class="text-white" scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <th class="text-white" scope="row">{{$loop->iteration}}</th>
      <td class="text-white" >{{$book->title}}</td>
      <td class="text-white" >{{$book->author}}</td>
      <td> <a href="{{route('update',$book->id)}}" class="btn btn-primary" style="width:22%">Update</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>