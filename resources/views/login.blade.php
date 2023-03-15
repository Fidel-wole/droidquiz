<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>

</head>
<body>
    <section class="body">
   <section class="landing-page ">
    <div class="landing-pagecon form">
       <form action="login" method="post">
        @csrf
        <h1 style="color:black;">Quiz<span style="color:blue;">Grad</span></h1>
        <p style="margin-top: 30px;">Welcome back!</p>
        <p style="margin-bottom: 15px;">Please login/Signup to your account.</p>
       
        @if(Session::get('fail'))
        <div style="background-color:  rgb(17, 231, 160); width:90%; margin-bottom:20px;
         margin-left:30px; font-weight:lighter; float:left; padding:12px; color:white;">
            {{Session::get('fail')}}
        </div>
        @endif

        
        <div class="input">
            <input type="email" name='email' placeholder="Email Address">
        </div>
        <span>@error('email'){{$message}}@enderror</span>
        <div class="input" style="margin-bottom: 20px;">
            <input type="password"name='Password' placeholder="Password">
        </div>
        <span>@error('Password'){{$message}}@enderror</span>
        <div class="remember" style="margin-bottom: 20px;">
            <div><input type="checkbox" style="margin-right: 3px;">Remember me</div>
            <h4>Forgot Password?</h4>
        </div>
        <div style="display:flex; gap:20%; margin-bottom: 12%" >
            <button style=" width:20%;">Log in</button>
            <a href="signup"><button type = "button" style=" width:20%;  background: transparent;color: black; box-shadow: 0px 0px 10px 4px rgba(88, 118, 175, 0.5);">Sign Up</button>
            </a>
        </div>
        
       </form>
        
    </div>
    <div class="landing-pageimg login">
       <img src="images/funny-3d-illustration-american-referee.jpg">
    </div>
   </section>
    </section>
</body>
</html>