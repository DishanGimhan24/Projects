<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="header&footer.css">
    <style>
        .section-0{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 30px;
    }
    .section-0 .title{
        font-size: 4rem;
        margin: 2rem;
        display: flex;
        justify-content: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight:1000;
        padding: 1rem;
        
    }
    .section-0 .heropart{
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 60%;
    }
    .heropart .quote h3{
        font-size: 1.2rem;
        font-family: Brush Script MT,cursive;
        font-weight: 800;
    }
    .addform{
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        width:80%;
    }
    .addform input{
      padding:5px;
      width:500px;
      height:40px;
      font-size:1rem;
      border:none;
      outline:none;
      box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
    }
    .addform textarea{
      padding:5px;
      width:500px;
      height:150px;
      font-size:1.2rem;
      border:none;
      outline:none;
      box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
    }
    
  #submitBtn{
    width:100px;
    height:40px;
    background-color:black;
    color:white;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size:1.3rem;
    padding:5px;
    margin:50px;
    border-radius:8px;
  }
  #submitBtn:hover{
    color:black;
    background-color:grey;
    cursor:pointer;
  }
  

    </style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

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
    
       


    <!--code here-->
    <section class="section-0" id="sec0">
  <h2 class="title">Add New FAQs</h2>
  <div class="heropart">
    <div class="quote">
      <h3>Make users a comfortable area by providing luxury response</h3>
    </div>
    
  </div>
</section>

<section class="section-1" id="sec1">
<center>
    <div class="addform">
    
            <form action='submitAddFaqs.php' method="post">
                 
                </br>
                <input type="text" name="field1" placeholder="Place FAQ here" required>
                </br>
               
                <br>
                <textarea name="field2" rows="8" cols="50" Placeholder="I want answers" required></textarea>
                <br>
                <input type="submit" id="submitBtn" value="submit">
            </form>
    </div>
</center>

</section>

    <script src="./FAQs.js"></script>



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