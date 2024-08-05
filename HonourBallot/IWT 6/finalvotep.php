<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="stylesvotep.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scriptvote.js"></script> 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <!-- header-->
    
    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="#default"><img src="logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
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
              <a href="#">Awards</a>
              <a href="#">Candidates</a>
              <a href="#">About Award Ceremony</a>
              <a href="#">Nomination Result</a>
              <a href="finalspon.html">Sponsors</a>
            </div>
          </div>
          <a href="#contact"><button  type="button" id="bttn1">Vote Now</button></a>
          <a href="finalcontus.html"><button  type="button" id="bttn1">Contact Us</button></a>
          <a href="#about"><button  type="button" id="bttn1">About Us</button></a>
          <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
        </div>
        <!--User button with photo-->
        <div class="userbtn">
          <div class="userbtntext">Hello!<br><a href="#login" class="userlink">Login/SignUp</a></div>
          <img src="myuser.png" class="userbtnimg" height="50px" width="50px">
        </div>
        
      </header>
    
       


    <!--code here-->
    <!--<section class="section-1" id="sec1">
      <div class="u-shape-1"></div>
      <img class="u-image-1" src="manaward.jpg" data-image-width="739" data-image-height="1080">
      <div class="u-group-1">
        <div class="u-container-layout-1">
          <h2 class="u-text-1"> Vote Now</h2>
          <h3 class="u-text-2">Make Your favourite candidate<br> A Nominee & A Winner
          </h3><br>
          <a href="#" class="u-btn-1">Register Now</a>
        </div>
      </div>
    </section>-->
    <hr style="background-color: black;height:1px;">
<div class="back">

  <form action="post_vote1.php" method="POST">

    <section class="section-1" id="sec1">
      <div class="vote-info">
        <h1 class="u-text-1">Vote Here</h1>
      </div>
  
      

  <div class="category-container">
    <lable for="category"></lable>

      <select id="category" name="category" onchange="loadCandidates()">
<option value="">Select the award category</option>
      
    <option value="ba">Best Actor</option>
    <option value="bas">Best Actress</option>
    <option value="bfd">Best film director</option>
    <option value="bfm">Best film music</option>
    <option value="bsa">Best supportive actor</option>
    <option value="bsas">Best supportive actress</option>

    </select>
    </div>
    
 <!-- <div id="candidates" name="candidates"></div>-->
  <div id="candidate-details">
    <!--<input type="submit" value="submit" class="submit-button">-->
  </div>
  

<!--<div class="cand-container">
  <div class="form">
    <div class=form-input>
      <input type="radio" name="plan" id="plan-free" value="free">
<label for="plan-free">
  <div>
  
</div>
</label>
      

    </div>
  </div>-->




<div class="g-recaptcha" data-sitekey="6LeRjXkmAAAAAIkWLy4OzAJoupJs6Csg9NIdj0XX"></div>

  <input type="submit" value="submit" class="submit-button">
</section>
</form>

  <script src="scriptvote.js"></script>
  

    <section class="sec2">
      <div class="u-text-2">
        <h2>Deadline: 01.08.2024 </h2>
      </div>
    </section>

    

    <section class="sec3">
    
<div class="u-text">
<h2 class="u-text-1">How to Vote</h2>
<p class="description1">First select the category.</p>
<p class="description2"> Then choose candidate.</p>
<p class="description2"> Support with human recaptcha</p>
<p class="description2">Then submit</p>

</div>

</section>
</div>

  
    <!--code here-->




    <hr style="background-color: black;height:1px;">
    <footer>
      <div class="footer-container">
       
          <div class="footerhead1">
            <img src="Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
            <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
            <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
          </div>
          <div class="footerhead" id="fhd2">
            <h2>Categories</h2>
            <a href="#">Awards</a>
                <a href="#">Candidates</a>
                <a href="#">About Award Ceremony</a>
                <a href="#">Nomination Result</a>
                <a href="finalspon.html">Sponsors</a>
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
</body>

</html>