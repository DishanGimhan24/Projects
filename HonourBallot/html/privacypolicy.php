<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compitble" content="IE=edge">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <title>Privacy and policies</title>
        <link rel="stylesheet" href="../css/privacypolicy.css">
        <link rel="stylesheet" href="../css/headerfooter.css">
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



<br>


<!-------------------------------------------------------------------->
 <div class="wrapper">
 
  <div class="terms-text"> 
  <h2>Privacy & Policy</h2>
  <br>
  <p> Effective Date: [04/06/2023]</p>
<br>
<p>Thank you for using our online voting system for award nominations. 
This Privacy Policy outlines how we collect, use, store, and disclose 
information in relation to your use of our website. By accessing or using our website,
 you acknowledge and agree to the terms of this Privacy Policy.</p>
 <br>

<h4>Information Collection and Use</h4>
<p>We may collect certain personal information, such as your name, email address, and contact details, 
when you participate in the award nomination process. This information is necessary for the purpose of 
authenticating your identity, preventing fraudulent activities, and facilitating the voting process.
 We may also collect non-personal information, such as your IP address, browser type, and operating system,
  for statistical analysis and to improve our services.</p>
  <br>

<h4>Data Storage and Security</h4>
<p>We store your personal information on secure servers or databases operated by reputable third-party
 service providers. We take reasonable measures to protect your information from unauthorized access,
  alteration, disclosure, or destruction. However, please be aware that no method of transmission 
  over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
<br>
<h4>Information Sharing and Disclosure</h4>
<p>We may share your personal information with trusted third-party service providers who assist us
 in operating our website and providing services to you. These providers are obligated to maintain 
 the confidentiality and security of your information and are only allowed to use it for the purposes 
 specified by us. We may also disclose your personal information if required by law, regulation,
  or legal process, or to protect our rights or the rights of others.</p>
<br>
<h4>Cookies and Tracking Technologies</h4>
<p>We use cookies and similar tracking technologies to enhance your user experience and collect information
about how you use our website. Cookies are small files stored on your device that help improve website 
functionality. You may choose to disable cookies through your browser settings, but please note that
certain features of our website may not function properly without cookies.</p>
<br>
<h4>Third-Party Links</h4>
<p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or
 content of those websites. We encourage you to review the privacy policies of those websites before providing
any personal information.</p>
<br>
<h4>Children's Privacy</h4>
<p>Our website is not intended for children under the age of 13. We do not knowingly collect personal 
information from children. If we become aware that we have collected personal information from a 
child under the age of 13, we will take steps to remove that information from our servers.</p>
<br>
<h4>Changes to this Privacy Policy</h4>
<p>We reserve the right to modify or update this Privacy Policy at any time. We will notify you of any
 material changes by posting the updated Privacy Policy on our website. Your continued use of our
website after the changes are implemented will signify your acceptance of the modified Privacy Policy.</p>
  </div>
 </div>

<!---------------------------------------------------------------------------------------->

<br>
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