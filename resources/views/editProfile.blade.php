<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/profile.css">
    <title>Profile</title>
</head>
<body>
    <div class="page">
        <div class="container center-container">
            <form action="editProfile" method="POST">
                @csrf
                <div class="container" style="text-align: left">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input class="form-control" type="text" id="fullname" name="full_name" placeholder="Full Name" value="{{$user->full_name}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="{{$user->username}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password" value="{{$user->password}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="univ_number" class="form-label">Univ Number</label>
                                <input class="form-control" type="text" id="univ_number" name="univ_number" placeholder="Univ Number" value="{{$user->univ_number}}">
                            </div>
                        </div>
    
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>
                                    <label class="form-check-label" for="gender1">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
                                    <label class="form-check-label" for="gender2">
                                      Female
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>