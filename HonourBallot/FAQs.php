<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="header&footer.css">
    <link rel="stylesheet" type="text/css" href="FAQs.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

</head>
<body>
    <!-- header-->
    
    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="Home.php"><img src="h&fimages\logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
        <div class="brand">
            <h2 id="logo" style="line-height: 10px;font-family:Lucida Handwriting,cursive;"><b>HonourBallot</b></h2><br>
            <h6 id="slogan" style="line-height: 2px;">We Value Your Vote</h6>
        </div>
        </div>

        <div class="navbar" id="Topnav">
          <a href="Home.php"><button class="active" type="button" id="bttn1"><b>Home</b></button></a>
          <div class="dropdown">
            <button class="dropbtn">Category</button>
            <div class="dropdown-content">
              <a href="html\award list.php">Awards</a>
              <a href="IWT Web Site\html\candidate llist .php">Candidates</a>
              <a href="About Award Ceremony.php">About Award Ceremony</a>
              <a href="IWT 6\gotDetails.php">Nomination Result</a>
              <a href="IWT 6\sponsors.php">Sponsors</a>
            </div>
          </div>
          <a href="IWT 6\finalvotep.php"><button  type="button" id="bttn1">Vote Now</button></a>
          <a href="IWT 6\finalcontus.php"><button  type="button" id="bttn1">Contact Us</button></a>
          <a href="IWT Web Site\html\about us page.html"><button  type="button" id="bttn1">About Us</button></a>
          <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
        </div>
        <!--User button with photo-->
        <div class="userbtn">
            <?php
            session_start(); // Start the session

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
                <a href="php\account.php">Profile</a>
                <a href="php\votinghistory.php">Voting History</a>
                <a href="MyQuestions.php">My Questions</a>
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
        <h2 class="title">FAQs</h2>
        <div class="heropart">
          <div class="quote">
            <h3>Need Help?</h3>
            <p>We got you covered</p>
          </div>
          <div class="search">
            <form action="/search" method="get">
              <img src="images\search.png" class="imagessearchimg" height="20px" width="20px" style="margin:8px;">
              <input type="text" name="search data" placeholder="Search.." />
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </section>



      <section class="section-1" id="sec1">
  <?php
  include_once "config.php";
  //session_start(); // Start the session
  $username = $_SESSION['username'];

  // Check if search term is provided
  if (isset($_GET['search_data'])) {
    $searchTerm = $_GET['search_data'];
    $sql = "SELECT * FROM faqs WHERE faqq LIKE '%$searchTerm%'";
  } else {
    $sql = "SELECT * FROM faqs";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="faq">';
      echo '<div class="question">';
      echo '<h3>' . $row["faqq"] . '</h3>';
      echo '<svg width="15" height="10" viewBox="0 0 42 25">';
      echo '<path d="M3 3L21 21L39 3" stroke="black" stroke-width="7" stroke-linecap="round"/>';
      echo '</svg>';
      echo '</div>';
      echo '<div class="answer">';
      echo '<p>' . $row["faqans"] . '</p>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo "No results found.";
  }

  mysqli_close($conn);
  ?>
</section>

    <script src="./FAQs.js"></script>
    



    <section class="section-2" id="sec2">
      <form class="voterquestion" action="postQuestion.php" method="post">
        <input type="email" id="faqmail" name="faqmail" placeholder="Enter your email..">
        <textarea id="userquestion" name="userquestion" rows="10" cols="80" placeholder="Enter your question"></textarea>
        <input id="submitq" type="submit" value="Submit">
      </form>
    </section>
    


   



    <hr style="background-color: black;height:1px;">
    <footer>
      <div class="footer-container">
       
          <div class="footerhead1">
            <img src="h&fimages\Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
            <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
            <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
            <div>
              <a href="https://www.facebook.com/profile.php?id=100093221663480" target="_blank"><img src="h&fimages\fb.png" class="fimg"></a>
                <a href="https://www.instagram.com/honourballot/" target="_blank"><img src="h&fimages\instagram.png" class="fimg"></a>
                <a href="https://twitter.com/HonourBallot" target="_blank"><img src="h&fimages\twitter.png" class="fimg"></a>
                
            </div>
          </div>
          <div class="footerhead" id="fhd2">
            <h2>Categories</h2>
            <a href="html\award list.php">Awards</a>
                <a href="IWT Web Site\html\candidate llist .php">Candidates</a>
                <a href="About Award Ceremony.html">About Award Ceremony</a>
                <a href="IWT 6\gotDetails.php">Nomination Result</a>
                <a href="IWT 6\sponsors.php">Sponsors</a>
          </div>
          <div class="footerhead" id="fhd3">
            <h2>We are</h2>
              <a href="IWT Web Site\html\about us page.html">About Us</a>
              <a href="IWT 6\finalcontus.php">Contact Us</a>
              <a href="#">What is an Online Voting System?</a>
          </div>
          <div class="footerhead" id="fhd4">
            <h2>Voter</h2>
              <a href="login.php">Log in</a>
              <a href="FAQs.php">FAQs</a>
              <a href="IWT 6\Terms-Conditions.php">Terms & Condition</a>
              <a href="html\privacypolicy.php">Privacry & Policy</a>
          </div>
        
        
        <div class="footer-email">
            <h2>Connect with Us</h2>
            <form action="emailsubs.php" method="POST">
            <input type="email" name="femail"placeholder="Enter your email address" id="footermail"> <input type="hidden" name="page_link" value="<?php echo $_SERVER['REQUEST_URI']; ?>"> <input type="submit" Value="Subscribe" id="footermail-btn">
            </form>
        </div>
      </div>
      <center>
        <div class="copyright"><h4>© 2023 HonourBallot. All rights reserved.(By Rachith @TeamHB)</h4></div>
      </center>
      
     </footer>


</body>

</html>