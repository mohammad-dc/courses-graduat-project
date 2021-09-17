<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/order.css">

    <title>Orders</title>
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
            <h1>Request Orders</h1>
            <div class="container">
              <div class="row">
                @foreach ($orders as $order)
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="request-card card">
                        <div><strong>{{$order->user_fullname}}</strong> had sent a request for <strong>{{$order->course_name}}({{$order->course_type}}).</strong></div>
                        <form action="orders" method="POST">
                          @csrf
                          <input class="form-control" type="text" id="id_order" name="id" placeholder="Bookcase Number" style="display: none" value="{{$order->order_id}}">
                          <div class="mb-3">
                            <label for="bookcase_number" class="form-label">Bookcase Number</label>
                            <input class="form-control" type="text" id="bookcase_number" name="bookcase_number" placeholder="Bookcase Number">
                          </div>

                          <div class="mb-3">
                              <label for="bookcase_password" class="form-label">Bookcase Password</label>
                              <input class="form-control" type="password" id="bookcase_password" name="bookcase_password" placeholder="Bookcase Password">
                          </div>

                          <button type="submit" class="btn btn-success">Accept</button>
                        </form>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>