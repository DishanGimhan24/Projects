<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitble" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlog</title>
   <link rel="stylesheet" href="css/adminlog.css">
   <link rel="stylesheet" type="text/css" href="header&footer.css">
</head>

<body>
        <!-- header-->
    
    <header class="header">
       
      <!-- Brand and Slogan-->
      <div class="header-left" style="margin-right: 25px;">
        <!-- Logo-->
      <a href="#default"><img src="h&fimages\logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
      <div class="brand">
          <h2 id="logo" style="line-height: 10px;font-family:Lucida Handwriting,cursive;"><b>HonourBallot</b></h2><br>
          <h6 id="slogan" style="line-height: 2px;">We Value Your Vote</h6>
      </div>
      </div>

      
      <!--User button with photo-->
      <div class="userbtn">
          <?php
          //session_start(); // Start the session

          // Check if the session is started or not
          $isSessionStarted = isset($_SESSION['username']);

          if ($isSessionStarted) {
              // Session is started
              $username = $_SESSION['username'];
              echo '<div class="userbtntext">Hello!<br><a onclick="toggleDropdown()"> ' . $username . '</a></div>';
          } else {
              // Session is not started
              echo '<div class="userbtntext">Hello!<br><a href="login.php" class="userlink">Login</a>/<a href="Register_form.php" class="userlink">SignUp</a></div>';
          }
          ?>
          <img src="h&fimages\uuser.png" class="userbtnimg" height="40px" width="40px">
          <div id="dropdownMenu" class="headerdropdown-content">
              <!-- Dropdown menu content -->
              <!-- Add your menu items here -->
              <a href="profile.html">Profile</a>
              <a href="logoff.php">Logout</a>
          </div>
      </div>
      <script>
          function toggleDropdown() {
          var dropdownMenu = document.getElementById("dropdownMenu");
          dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";

              // Close dropdown when clicking outside
                      document.addEventListener("click", function(event) {
                          var dropdownMenu = document.getElementById("dropdownMenu");
                          var userBtn = document.querySelector(".userbtn");
                          
                          if (!dropdownMenu.contains(event.target) && !userBtn.contains(event.target)) {
                              dropdownMenu.style.display = "none";
                          }
                      });
          }
          
      </script>   

    </header>
    <br>
    <!-------------------------------------------------------------------->
   <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box-login">
            <h2>Login</h2>
            <form action="adminlogin.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" id="username" name="username"   required >
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>password</label>
                </div>
                <!--<div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>-->
                    <!--<a href="#">Forgot Password</a>
                </div>-->
                    <button type="submit" name="login" class="btn">Login</button>
                
            </form>
        </div>
    </div>
<script src="../js/adminlog.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<br>
<!------------------------------------------------------------------------------------------------------------>
<footer>
  <div class="footer-container">
   
      <div class="footerhead1">
        <img src="h&fimages\Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
        <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
        <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
        <div>
          <a href="#"><img src="h&fimages\fb.png" class="fimg"></a>
            <a href="#"><img src="h&fimages\instagram.png" class="fimg"></a>
            <a href="#"><img src="h&fimages\twitter.png" class="fimg"></a>
            
        </div>
      </div>
      
      
      
    
    
    
  </div>
  <center>
    <div class="copyright"><h4>© 2023 HonourBallot. All rights reserved.</h4></div>
  </center>
  
 </footer>     

</body>
</html>