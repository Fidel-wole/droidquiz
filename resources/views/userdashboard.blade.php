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
    <aside>
      <div class="top">
        <div class="logo">
          <h2>Quiz<span>Grad</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
         </div>
      </div>
      <div class="sidebar">
        <a href="" class="active">
          <span class="material-icons-sharp">grid_view</span>
          <h3>Dashboard</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">insights</span>
          <h3>Analytics</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">mail_outline</span>
          <h3>Messages</h3>
          <span class="message-count">20</span>
        </a>
        <a href="">
          <span class="material-icons-sharp">person</span>
          <h3>Take test</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">edit_note</span>
          <h3>Create Quiz</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">settings</span>
          <h3>Settings</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">logout</span>
          <h3>Log-out</h3>
        </a>
      </div>
    </aside>
    <!--------------------------END OF ASIDE---------->
    <main>
      <h1>Dashboard</h1>

      <div class="date">
        <input type="date">
      </div>

      <div class="insights">
        <div class="stats">
          <span class="material-icons-sharp">analytics</span>
        <div class="middle">
          <div class="left">
            <h3>Total Points</h3>
            <h1>1000</h1>
          </div>
          <div class="progress">
            <svg>
              <circle cx='38' cy='38' r='36'></circle>
            </svg>
            <div class="number">
              <p>81%</p>
            </div>
          </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
        </div>
<!--------------------END OF STATS--------------->
        <div class="test">
          <span class="material-icons-sharp">grade</span>
        <div class="middle">
          <div class="left">
            <h3>Local Rank</h3>
            <h1>100</h1>
          </div>
          <div class="progress">
            <svg>
              <circle cx='38' cy='38' r='36'></circle>
            </svg>
            <div class="number">
              <p>21%</p>
            </div>
          </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
        </div>
        <!---------------END OF LOCAL RANK-------------->
        <div class="time">
          <span class="material-icons-sharp">language</span>
        <div class="middle">
          <div class="left">
            <h3>Global Rank</h3>
            <h1>200</h1>
          </div>
          <div class="progress">
            <svg>
              <circle cx='38' cy='38' r='36'></circle>
            </svg>
            <div class="number">
              <p>31%</p>
            </div>
          </div>
        </div>
        <small class="text-muted">Last 24 hours</small>
        </div>
        <!--------------END OF TIME SPENT----------->
      </div>
    </main>
<!------END OF MAIN SECTION------------------>
<div class="right">
  <div class="top">
    <button id="menu-btn">
      <span class="material-icons-sharp">menu</span>
    </button>
    <div class="theme-toggle">
      <span class="material-icons-sharp active">light_mode</span>
      <span class="material-icons-sharp">dark_mode</span>
    </div>
    <div class="profile">
      <div class="info">
        <p>Hey,<b>{{$LoggedUserInfo['Username']}}</b></p>
        <small class="text-muted">User</small>
      </div>
      <div class="profile-photo">
        <img src="images/character-avatar-3d-illustration_460336-702.jpg" alt="">
      </div>
    </div>
  </div>
  <!-----------END OF TOP---------------->
  <div class="recent-updates">
    <h2>Recents Updates</h2>
    <div class="updates">
      <div class="update">
        <div class="profile-photo">
          <img src="images/character-avatar-3d-illustration_460336-702.jpg" alt="">
        </div>
        <div class="message">
          <p><b>Eliab Zoe</b> challenged you to a quiz</p>
          <small class="text-muted">2 minutes ago</small>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
          <img src="images/character-avatar-3d-illustration_460336-702.jpg" alt="">
        </div>
        <div class="message">
          <p><b>Williams Odunayo</b> challenged you to a quiz</p>
          <small class="text-muted">2 minutes ago</small>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
          <img src="images/character-avatar-3d-illustration_460336-702.jpg" alt="">
        </div>
        <div class="message">
          <p><b>Pery Tylon</b> challenged you to a quiz</p>
          <small class="text-muted">2 minutes ago</small>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
  <script src="script.js"></script>
</body>
</html>