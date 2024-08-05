<!DOCTYPE html>
<html>
<head>
    <title>Candidate List - Online Voting System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
        }
        .search-bar {
            width: 300px;
            padding: 8px;
        }
        .candidate-container {
            display: flex;
            flex-wrap: wrap;
        }
        .candidate-box {
            flex-basis: 50%;
            padding: 20px;
            box-sizing: border-box;
        }
        .candidate-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .candidate-name {
            margin-top: 10px;
            font-weight: bold;
        }
        .candidate-category {
            margin-top: 5px;
            color: #888;
        }
        .candidate-details {
            margin-top: 10px;
        }
        .vote-button {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
        }
        .slide {
            display: none;
        }
        body{
  background-image: url(../1Images/manaward.jpg);
}
    </style>
    <link rel="stylesheet" href="../css/header footer.css">
</head>
<body>

  <!------------------------------------------------------------------------------------------------------------->
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
  <!---------------------------------------------------------------------------------------------------------------->
    <div class="header">
        <h2>Award Categories</h2>
        <div>
            <input type="text" class="search-bar" placeholder="Search category...">
        </div>
    </div>
    <div class="candidate-container">
      <div class="slide">
          <div class="candidate-box">
            <img src="../best actor 2.jpeg" alt="Candidate 1" class="candidate-image">
              <h3 class="candidate-name">Best actor</h3>
             
              <p class="candidate-details"> This award recognizes outstanding emerging talent in the music industry. It celebrates artists who have made a significant impact with their debut or breakthrough work, showcasing their creativity, innovation, and potential. The Best New Artist category is a testament to the fresh voices and promising careers that shape the future of music.</p>
             <a href="candidate detailed list 1.html" ><button class="vote-button">View</button></a> 
          </div>
          <div class="candidate-box">
              <img src="../best actress award.webp" alt="Candidate 2" class="candidate-image">
              <h3 class="candidate-name">Best actress</h3>
              
              <p class="candidate-details"> This prestigious award honors the exceptional artistry and skill displayed by dancers in various genres. It acknowledges the performers who captivate audiences with their graceful movements, precision, and ability to convey emotions through dance. The Best Dancer category celebrates the dedication, talent, and passion of those who bring stories to life through their extraordinary physical expression and captivating stage presence.</p>
              <a href="candidate detailed list2.html"><button class="vote-button">View</button></a>
          </div>
      </div>
      <div class="slide">
          <div class="candidate-box">
              <img src="../actor supportive.webp" alt="Candidate 3" class="candidate-image">
              <h3 class="candidate-name">Best supporting actor</h3>
             
              <p class="candidate-details">This esteemed award recognizes excellence in filmmaking, celebrating the art of storytelling through the medium of cinema. It honors films that leave a lasting impact on audiences, whether through their compelling narratives, exceptional performances, innovative direction, or technical achievements. The Best Film category showcases the power of cinema to inspire, entertain, and provoke thought, honoring the visionary filmmakers and talented teams behind these outstanding cinematic achievements.</p>
              <a href="candidate detailed list 3.html"><button class="vote-button">View</button></a>
          </div>
        
          <div class="candidate-box">
            <img src="../supportive actress.jpeg" alt="Candidate 4" class="candidate-image">
            <h3 class="candidate-name">Best supporting actress</h3>
            
            <p class="candidate-details"> This prestigious award acknowledges outstanding achievements in the realm of dramatic storytelling. It celebrates the compelling narratives, impactful performances, and thought-provoking themes that resonate deeply with audiences. The Best Drama category showcases the power of storytelling to evoke emotions, explore the complexities of the human experience, and shed light on important social issues. It recognizes the exceptional talents and creative contributions of actors, directors, writers, and the entire production team involved in crafting these gripping and unforgettable dramatic works.</p>
            <a href="candidate detailed list 4.html"><button class="vote-button">View</button></a>
        </div>
    </div>
    <div class="slide">
      <div class="candidate-box">
          <img src="../best director award.jpeg" alt="Candidate 3" class="candidate-image">
          <h3 class="candidate-name">Best film director</h3>
         
          <p class="candidate-details">This esteemed award recognizes excellence in filmmaking, celebrating the art of storytelling through the medium of cinema. It honors films that leave a lasting impact on audiences, whether through their compelling narratives, exceptional performances, innovative direction, or technical achievements. The Best Film category showcases the power of cinema to inspire, entertain, and provoke thought, honoring the visionary filmmakers and talented teams behind these outstanding cinematic achievements.</p>
          <a href="candidate detailed list 5.html"><button class="vote-button">View</button></a>
      </div>
    
      <div class="candidate-box">
        <img src="../music award....avif" alt="Candidate 4" class="candidate-image">
        <h3 class="candidate-name">Best film music</h3>
        
        <p class="candidate-details"> This prestigious award acknowledges outstanding achievements in the realm of dramatic storytelling. It celebrates the compelling narratives, impactful performances, and thought-provoking themes that resonate deeply with audiences. The Best Drama category showcases the power of storytelling to evoke emotions, explore the complexities of the human experience, and shed light on important social issues. It recognizes the exceptional talents and creative contributions of actors, directors, writers, and the entire production team involved in crafting these gripping and unforgettable dramatic works.</p>
        <a href="candidate detailed list 6.html"><button class="vote-button">View</button></a>
    </div>
</div>
</div>

  <!------------------------------------------------------------------------------------------------------------------->
  <br>

  <hr style="background-color: black;height:1px;">
  <footer>
    <div class="footer-container">
     
        <div class="footerhead1">
          <img src="../Images/Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
          <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
          <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
        </div>
        <div class="footerhead" id="fhd2">
          <h2>Categories</h2>
          <a href="#">Awards</a>
              <a href="#">Candidates</a>
              <a href="#">About Award Ceremony</a>
              <a href="#">Nomination Result</a>
              <a href="#">Sponsors</a>
        </div>
        <div class="footerhead" id="fhd3">
          <h2>We are</h2>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">What is an Online Voting System?</a>
        </div>
        <div class="footerhead" id="fhd4">
          <h2>Voter</h2>
            <a href="#">Log in</a>
            <a href="#">FAQs</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Privacry & Policy</a>
        </div>
      
      
      <div class="footer-email">
          <h2>Connect with Us</h2>
          <input type="email" placeholder="Enter your email address" id="footermail"> <input type="submit" Value="Subscribe" id="footermail-btn">
      </div>
    </div>
   </footer>        
<!-------------------------------------------------------------------------------------------------------------------->
  <script>
      let currentSlide = 0;
      const slides = document.getElementsByClassName('slide');

      function showSlide(n) {
          if (n >= slides.length) {
              currentSlide = 0;
          } else if (n < 0) {
              currentSlide = slides.length - 1;
          }

          for (let i = 0; i < slides.length; i++) {
              slides[i].style.display = 'none';
          }

          slides[currentSlide].style.display = 'flex';
      }

      showSlide(currentSlide);

      setInterval(function() {
          currentSlide++;
          showSlide(currentSlide);
      }, 5000);
  </script>
</body>
</html>