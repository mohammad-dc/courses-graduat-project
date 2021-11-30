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
      <h1>Admin Dashboard Messages
      </h1>
 <div class="container">
   <div class="row">
    @foreach($users as $user)
    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="/admin/messages/{{$user->user_id}}" class="box list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1">{{$user->full_name}}</strong>
          <small>{{date('d/m/Y', strtotime($user->created_at));}}</small>
        </div>
        <div class="col-10 mb-1 small">{{$user->message}}</div>
      </a>
    </div>
  @endforeach
   </div>
 </div>
          {{-- <div class="chat">
            @foreach($messages as $message)
            @if($message->sender == "admin")
              <div class="message-wrapper-left">
                <div class="message left">
                  {{$message->message}}
                </div>
              </div>
            @else
              <div class="message-wrapper-right">
                <div class="message right">
                  {{$message->message}}
                </div>
              </div>
            @endif
          @endforeach

              <div class="type_message">
                  <form action="">
                    @csrf
                      <input type="text" name="message" id="replay" placeholder="type message">
                      <button type="submit" class="btn btn-info">send</button>
                  </form>
              </div>
          </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>