<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
  <link rel="stylesheet" href="dashboard.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="container">
    @auth
    @include('navbar')
    <main>
        <div class="category">
            <h3>Categories</h3>
            <div class="quiz">
              <div class="quiz-photo">
                <a href="/createQuiz">
                <span class="material-icons-sharp">grass</span>
                <p>Art</p>
              </a>
              </div>
              <div class="quiz-science">
                <a href="">
                <span class="material-icons-sharp">science</span>
                <p>Science</p>
                </a>
              </div>
              <div class="quiz-commercial">
                <a href="">
                <span class="material-icons-sharp">language</span>
                <p>Commercial</p>
                </a>
              </div>
              <div class="quiz-music">
                <a href="">
                <span class="material-icons-sharp">album</span>
                <p>Music</p>
                </a>
              </div>
              
              <div class="quiz-photo">
                <a href="">
                <span class="material-icons-sharp">psychology</span>
                <p>General Knowledge</p>
              </a>
              </div>
          
            </div>
        </div>
    </main>
    <div class="right">
        @include('header')
    </div>
    @endauth