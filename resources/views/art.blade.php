<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
<link rel="stylesheet" href="/dashboard.css">
    <title>Document</title>
    <style>
      .quest  label{
          font-size:18px;
          padding-top: 50px;
        } 
        .quest span{
            font-size:18px;
            padding-left: 5px
         }  
         .quest{
            margin-top: 10px;
         }
         

           
        </style>
</head>
<body>
    <div class="container">
        @include('navbar')
        <main>
    <form method="post" action="art">
      @csrf
        <fieldset>
            <legend style="text-align:center; font-size:13px; "><h2>Practice Questions</h2></legend>
            <p style="margin-top:10px; font-weight:bold; font-size:18px;">Answer each of the following questions currently</p>
            
            @foreach ($userinfo as $item)
            <div class="quest">
                
                    <label for="">{{$item->id}}</label>
                    <span>{{$item->questions}}</span>
                    <p>
                    <input type="radio" name="{{$item->id}}" value="{{$item->option_a}}">{{$item->option_a}}
                    <p>
                    <input type="radio" name="{{$item->id}}"value="{{$item->option_b}}">{{$item->option_b}}
                    <p>
                    <input type="radio"name="{{$item->id}}"value="{{$item->option_c}}">{{$item->option_c}}
                     <p>
                    <input type="radio" name="{{$item->id}}"value="{{$item->option_d}}">{{$item->option_d}}
                    <hr>
                     </div>
                    @endforeach
            <button style="text-align:center; padding:12px; font-size:15px; background-color:#7380ec;width:20%; margin-left:80%;
             color:white; border:none;" name="submit">Submit</button>
    </fieldset>
        
    
</form>
</main>
        <div class="right">
            @include('header')
        </div>
    </div>

</body>
</html>