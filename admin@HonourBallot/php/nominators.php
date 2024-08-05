<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compitble" content="IE=edge">
  <meta name="Viewport" content="width=device-width, initial-scale=1.0">
  <title>Award List</title>
  <link rel="stylesheet" href="../css/nominators.css">
  <link rel="stylesheet" href="../css/headerfooter.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/adminlog.js"></script>
</head>

<body>
  <!-- header-->

  <header class="header">

    <!-- Brand and Slogan-->
    <div class="header-left" style="margin-right: 25px;">
      <!-- Logo-->
      <a href="#default"><img src="../images/logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo"
          height="100px" width="100px"></a>
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
          <a href="../html/award list.html">Awards</a>
          <a href="#">Candidates</a>
          <a href="#">About Award Ceremony</a>
          <a href="#">Nomination Result</a>
          <a href="#">Sponsors</a>
        </div>
      </div>
      <a href="#contact"><button type="button" id="bttn1">Vote Now</button></a>
      <a href="#contact"><button type="button" id="bttn1">Contact Us</button></a>
      <a href="#about"><button type="button" id="bttn1">About Us</button></a>
      <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
    </div>
    <!--User button with photo-->
    <div class="userbtn">
      <div class="userbtntext">Hello!<br><a href="#login" class="userlink">Login/SignUp</a></div>
      <img src="../images/myuser.png" class="userbtnimg" height="50px" width="50px">
    </div>

  </header>
  <br>
  <!----------------------------------------------------------------------------------------->



  <div class="tab">
    <table>
      <tr>
        <th>Full Name</th>
        <th>NIC</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Action</th>
      </tr>
      <?php

      $sql = "SELECT * FROM nominator";
      $result = mysqli_query($con, $sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td>
          <?php echo $row['name']; ?>
        </td>
        <td>
          <?php echo $row['nic']; ?>
        </td>
        <td>
          <?php echo $row['email']; ?>
        </td>
        <td>
          <?php echo $row['contactno']; ?>
        </td>
        <td><a href="../php/updatenominator.php?id=<?php echo $row['id']; ?>"><img src="../images/pen.png" height="40"
              width="30"></a></td>
      </tr>
      <?php }
      } ?>
    </table>
    <div class="center">
      <button name="update" class="btn" onclick="window.location='../html/addnominator.html'">Add Nominator</button>
    </div>
  </div>
  <br>
  <!---------------------------------------------------------------------------------------->
  <hr style="background-color: black;height:1px;">
  <footer>
    <div class="footer-container">

      <div class="footerhead1">
        <img src="../images/Logo.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px">
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
        <input type="email" placeholder="Enter your email address" id="footermail"> <input type="submit"
          Value="Subscribe" id="footermail-btn">
      </div>
    </div>
  </footer>
</body>

</html>