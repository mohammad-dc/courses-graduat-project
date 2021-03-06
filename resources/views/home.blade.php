<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/home.css">
    <title>Home</title>
</head>
<body>
   <div class="page">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between"">
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
      <div class="user-info">
        <div >
          <a href="/notifications"><i class="bi bi-bell-fill"></i></a>
        </div>
        <div>
          @if($user->gender === "male")
          <a href="/profile"><img src="/assets/images/boy.jfif" alt="boy" /></a>
          @else
          <a href="/profile"><img src="/assets/images/girl.jfif" alt="boy" /></a>
          @endif
      </div>
    </div>
    </nav>

      <div class="body">
        <div class="courses">
            <div class="flex">
                <h1>Courses</h1>
                <a href="/addCourses" class="btn btn-info">Add Course</a>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="head">
                                <p class="course-name">{{$course->name}}</p>
                                <p>({{$course->type}})</p>
                            </div>
                            <div class="actions">
                                <form action="/home/{{$course->id}}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn">Send Request</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   <script>
     function truncate(str) {
      return str.length > 20 ? str.substring(0, 7) + "..." : str;
    }

     let course_name = document.querySelectorAll(".course-name");
     course_name.forEach(element => {
      let new_value = truncate(element.innerHTML);
      element.innerHTML = new_value;
     });
   </script>
</body>
</html>