<!DOCTYPE html>
<html>
<head>
    <title>Administrator Portal</title>
    <link rel="stylesheet" href="new_win.css">
    
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
      <!----------------------------------------------------------------------------------------------------------------------->
      <hr>
      <br>
    <h1>Administrator Portal</h1>
      <br>
    
    <ul class="newwin-list">
        <button>
            <a href="adminAwards.php">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png">
            <div class="candidate-details">
                <h2>Awards</h2>
                
                <p>Manage Awards Details</p>
                
            </div>
        </li>
    </button>
    <button>
        <a href="adminFAQs.php">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png" alt="Candidate 2">
            <div class="newwin-details">
                <h2>FAQs</h2>
                
                <p> Manage FAQs</p>
               
            </div>
        </li>
    </a>
    </button>
    <button>
        <a href="adminUserQuestion.php">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png" alt="Candidate 3">
            <div class="newwin-details">
                <h2>User Questions</h2>
                
                <p>Manage Use Questions</p>
                
            </div>
        </li>
    </a>
    </button>
    <button>
        <a href="php\nominators.php">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png" alt="Candidate 4">
            <div class="newwin-details">
                <h2>Nominators</h2>
                
                <p>Manage Nominators</p>
                
            </div>
        </li>
    </a>
    </button>
    <button>
        <a href="nominatorCandidate.php">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png" alt="Candidate 4">
            <div class="newwin-details">
                <h2>Candidates</h2>
                
                <p>Manage Candidates</p>
                
            </div>
        </li>
    </a>
    </button>
    <button>
        <a href="">
        <li class="newwin-item">
            <img src="h&fimages\logo_1.png" alt="Candidate 4">
            <div class="newwin-details">
                <h2>task6</h2>
                
                <p>description6</p>
                
            </div>
        </li>
    </a>
    </button>
        
        <!-- Add more candidate items as needed -->
    </ul>
    <br>

    <hr style="background-color: black;height:1px;">
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