<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/addCourses.css">
    <title>Add Courses</title>
</head>
<body>
   <div class="page">
       <div class="container center-container">
        <form action="addCourses" method="POST">
            @csrf
            <div class="container " style="text-align: left">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input class="form-control" type="text" id="type" name="type" placeholder="Type">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info">Add Course</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>