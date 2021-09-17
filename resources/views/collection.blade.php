<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/collections.css">
    <title>Collections</title>
</head>
<body>
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Courses</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/collection">Collections</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/orders">Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/messages">Messages</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="body">
            <h1>My Collections</h1>
            <div class="container">
              <div class="row">
                @foreach($collections as $collection)
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card"><div><span class="badge bg-success">Accepted</span> user: <strong>{{$collection->user_fullname}}</strong>, course: <strong>{{$collection->course_name}}({{$collection->course_type}})</strong></div></div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>