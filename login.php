<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Rhythmbeat</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
      <nav>
        <label class="logo">Rhythmbeat</label>
        <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="music.html">Music
            <i class="fas fa-caret-down"></i>
          </a>
            <ul>
  <li><a href="bollywood.html">Bollywood</a></li>
  <li><a href="hollywood.html">Hollywood</a></li>
  
  </ul>
  </li>
  <li><a href="topchart.html">Top Chart
            <i class="fas fa-caret-down"></i>
          </a>
            <ul>
  <li><a href="album.html">Album</a></li>
  <li><a href="singer.html">Singer</a></li>
  <li><a href="genre.html">Genre
                <i class="fas fa-caret-right"></i>
              </a>
                <ul>
  <li><a href="rock.html">Rock</a></li>
  <li><a href="hiphop.html">Hip Hop </a></li>
  <li><a href="jazz.html">Jazz</a></li>
  </ul>
  </li>
  </ul>
  </li>
  <li><a href="about.html">About Us
      <i class="fas fa-caret-down"></i>
  </a>
    <ul>
  <li><a href="contactus.html">Contact Us</a></li>
  <li><a href="team.html">Team</a></li>
  </ul>
  </li>
  <li><a class="active" href="login.php">Login</a></li>
  </ul>
  </nav>
</head>  
    <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
          <button type="botton" class="toggle-btn" onclick="login()">Log In</button>
          <button type="botton" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
            <img src="fb.png">
            <img src="tw.png">
            <img src="gp.png">
            
      </div>
       <form action="validation.php" method="POST" id="login" class="input-group">
         <input type="text" class="input-field" name="user" placeholder="User ID" required>
         <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
        
        <button type="submit" class="submit-btn">Log In</button>
        </form>
        <form action="register.php" method="POST" id="register" class="input-group">
          <input type="text" class="input-field" name="user" placeholder="User Id" required>
          <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
         
         <button type="submit" class="submit-btn">Register</button>
         </form>
        </div>
    </div>
    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("btn");

      function register(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
      }
      function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
      }
    </script>
 
 <footer class="footer">
  <div class="inner-footer">
  <center>
  <div class="outer-footer">
    Copyright &copy; Vidit Abhilasha & Pravej Sayyed. All Right Reserved.
  </div>
</center>

