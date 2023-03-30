<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
  <link rel="stylesheet" href="/dashboard.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('navbar')
        <main>
            <div class="create">
                <form action="/quiz/{{$quizid}}" method="post">
                    @csrf
                    <h2>Create your own quiz</h2>
                    @if(Session::get('sucess'))
            <div style="background-color:  rgb(17, 231, 160); width:90%; margin-bottom:20px;
              font-weight:lighter;  padding:12px; color:white;">
                {{Session::get('sucess')}}
            </div>
            @endif
                    <div class="input-group">
                        <input type ="text" name="subject" placeholder="Subject">
                        <span>@error('subject'){{$message}}@enderror
                     </div>
                     <div class="input-group">
                        <input type ="text" name="topic" placeholder="Topic">
                        <span>@error('subject'){{$message}}@enderror
                     </div>
                     
                  <button>Submit</button>
                </form>
            </div>
        </main>
        <div class="right">
            @include('header')
        </div>
    </div>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>