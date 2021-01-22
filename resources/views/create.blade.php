<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-image">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link " href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-ite mr-4">
          <a class="nav-link active" aria-current="page" href="#">Add Book</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="{{route('edit')}}">Update Book</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="container">
    <h1 class="text-center text-dark mt-5">Add Book</h1>
    <hr style="height:2px;border-width:1;color:gray;background-color:black;width:50%">
        <div class ="d-flex align-items-center justify-content-center " style="min-height: 60vh">
    
            <form class="col-lg-6 " action="{{route('store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label text-white font-weight-bold">Book's Title</label>
                    <input class="form-control alert-primary @error("title") is-invalid @enderror" name="title" type="text" placeholder="Enter Book's Title">
                  
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white font-weight-bold">Book's Author</label>
                    <input class="form-control alert-primary  @error("author") is-invalid @enderror" name="author" type="text" placeholder="Enter Book's Author" >
                        @error('author')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white font-weight-bold">Total Pages</label>
                    <input class="form-control alert-primary @error('pages') is-invalid @enderror" name="pages" type="number" placeholder="Total Pages">
                    @error('pages')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-dark font-weight-bold">Publication Year</label>
                    <select name="year" class="form-control alert-primary" id="" placeholder="Select Publication Year">
                        <option disabled>Select Publication Year</option>
                    @for ($i = 2000; $i < 2022; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                    </select>
                </div>
        
                <button type="submit" class="btn btn-primary" style="width: 100%">Add Book</button>
            </form>

        </div>
    </div>

</body>
</html>
