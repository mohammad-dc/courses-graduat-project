<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/adminDashboard.css">
    <title>Admin | Dashboard</title>
</head>
<body>
    <div class="page">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white sidebar-wrapper" style="width: 380px;">
            <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
              <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-5 fw-semibold">Messages</span>
            </a>
            @foreach($users as $user)
              <div class="list-group list-group-flush border-bottom scrollarea">
                <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{$user->full_name}}</strong>
                    <small>{{date('d/m/Y', strtotime($user->created_at));}}</small>
                  </div>
                  <div class="col-10 mb-1 small">{{$user->message}}</div>
                </a>
              </div>
            @endforeach
          </div>
          <div class="chat">
              <div class="message">
                  hi
              </div>

              <div class="type_message">
                  <form action="">
                    @csrf
                      <input type="text" name="replay" id="replay" placeholder="type message">
                      <button type="submit" class="btn btn-info">send</button>
                  </form>
              </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>