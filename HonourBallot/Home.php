<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="header&footer.css">
    <link rel="stylesheet" type="text/css" href="home.css">

    <!--section 2 card slider collaborations-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <script src="home.js"></script>
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

        <div class="navbar" id="Topnav">
          <a href="#default"><button class="active" type="button" id="bttn1"><b>Home</b></button></a>
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

    <section class="section-1" id="sec1">
      <div class="u-shape-1"></div>
      <img class="u-image-1" src="images\manaward.jpg" data-image-width="739" data-image-height="1080">
      <div class="u-group-1">
        <div class="u-container-layout-1">
          <h2 class="u-text-1"> Vote Now</h2>
          <h3 class="u-text-2">Make Your favourite candidate<br> A Nominee & A Winner
          </h3><br>
          <a href="Register_form.php" class="u-btn-1">Register Now</a>
        </div>
      </div>
    </section>
    

    <section class="section-2">
      
      <div class="sec2-poster">
          <h1 class="y-text-1-1">Elysian</h1><h1 class="y-text-1-2">Awards</h1>
          <p class="y-text-2">The most prominent <br>film award ceremony</p>
  
          <br>
            <a href="About Award Ceremony.html" class="y-btn-1">Learn More</a>
        </div>
        <div class="sec2-2">
          <h2 style="font-family:Brush Script MT,cursive;font-weight: bold;">Popular Awards</h2>
      <div class="swiper mySwiper container">
          <div class="swiper-wrapper content">
              
            <div class="swiper-slide">
              <a href="html\award list.php#award1" class="card-btn-1">
              <div class="card">
              <div class="wholecard"></div>
              <div class="card-content">
                  
                  <div class="name">
                      <span class="aname">Best Actor</span>
                  </div>
                  
              </div>
              </div>
            </a>
            </div>
            <div class="swiper-slide">
              <a href="html\award list.php#award2" class="card-btn-1">
              <div class="card">
              <div class="wholecard"></div>
              <div class="card-content">
                  
                  <div class="name">
                      <span class="aname">Best Actress</span>
                  </div>
                  
              </div>
              </div>
            </a>
            </div>
            <div class="swiper-slide">
              <a href="html\award list.php#award3" class="card-btn-1">
              <div class="card">
              <div class="wholecard"></div>
              <div class="card-content">
                  
                  <div class="name">
                      <span class="aname">Best Supporting Actor</span>
                  </div>
                  
              </div>
              </div>
            </a>
            </div>
            <div class="swiper-slide">
              <a href="html\award list.php#award4" class="card-btn-1">
              <div class="card">
              <div class="wholecard"></div>
              <div class="card-content">
                  
                  <div class="name">
                      <span class="aname">Best Supporting Actress</span>
                  </div>
                  
              </div>
              </div>
            </a>
            </div>
              
              
              
              
              
          </div>
          <div class="beforebullet"></div>
          <div class="swiper-pagination"></div>
      </div>
  </div>  
  </section>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
</script>

<section class="section-3">
  <div class="s3container">
    <div class="brandlogo">
      <h1><b>Elysian Awards</b></h1>
    </div>
    <div class="odometer" data-target="1000"><p id="odometer">0</p></div>
    <h2 class="theme"><b>Contributed Voters</b></h2>
  </div>
</section>

<script>
var project=setInterval(counter,1)
let count=1;

function counter(){
  count++;
  document.querySelector("#odometer").innerHTML=count;
  if(count==1000){
    clearInterval(project)
  }
}

</script>

<section class="section-4">
  <div class="imgcontainer">
    <img src="images/celebrity.jpg" class="sec4img">
    
  </div>
  <div class="findcandidate">
    <h3 class="sec4label">Find your favourite candidate</h3>
    <div class="search">
      <form action="Home.php" method="get">
        <img src="images/search.png" class="searchimg" height="20px" width="20px">
        <input type="text" name="search data" placeholder="Who is your favourite celebrities?" />
        <button type="submit">Search</button>
      </form>
    </div>
    
  </div>
  
</section>

<section class="section-5">
  <div class="sec5content">
    <div class="countdn">
      <h1><b>Hurry Up Time Is Ticking</b></h1>
    </div>
    <div class="countdown">
      <div class="cdquote">
        <p>Vote your candidate before it's late</p>
      </div>
      <div class="timer">
        <div>
          <p id="days">00</p>
          <span>Days</span>
        </div>
        <div>
          <p id="hours">00</p>
          <span>Hours</span>
        </div>
        <div>
          <p id="minutes">00</p>
          <span>Minutes</span>
        </div>
        <div>
          <p id="secs">00</p>
          <span>Seconds</span>
        </div>
      </div>
    </div>
  </div>
  <script>
    var countDownDate = new Date("Aug 1, 2023 00:00:00").getTime();
    var x = setInterval(function () {
      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("secs").innerHTML = seconds;

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("secs").innerHTML = "00";
      }
    }, 1000);
  </script>
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