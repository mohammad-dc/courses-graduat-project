<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/messages.css">

    <title>Admin | Messages</title>
</head>
<body>
    <div class="page">
      <div class="body">
        <div class="container">
          <div class="chat-box">
            <div class="messaging">
              @foreach($messages as $message)
                @if($message->sender != "admin")
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
            </div>

            <div class="type_message">
                <form action="/admin/messages/{{$id}}" method="POST">
                  @csrf
                    <input type="text" name="message" id="replay" placeholder="type message...">
                    <button type="submit" class="btn btn-info">send</button>
                </form>
            </div>
        </div>
        </div>
        </div>
      </div>
            </div>
          </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>