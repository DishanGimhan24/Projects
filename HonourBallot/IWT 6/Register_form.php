<?php
session_start(); // Start the session

// Check if the session is already started and the user is logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, redirect to a different page
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>

#submitBtn {
  font-family: "Roboto", sans-serif;
  color: aliceblue;
  font-size: 18px;
  font-weight: bold;
  background: rgb(7, 6, 6);
  width: 160px;
  text-align: center;
  margin-right: 0px;
  margin-left: 100px;
  /* Add this property to push the button to the right */
  display: block;
  /* Add this property to make the button a block element */
  padding: auto;
  border-radius: 10px;
  margin-left: 100px;
  height: 40px;
  margin-top: 30px;
}

#submitBtn:hover {
  background-color: darkgrey;
  color: black;
}

.input-container {
  /* display: -ms-flexbox;*/
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  border-radius: 10px;

}

.icon {
  padding: 10px;
  background: black;
  color: rgb(255, 255, 255);
  min-width: 50px;
  text-align: center;
  position: relative;
  border-radius: 10px;
  margin-left: 100px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;

}

.input-container input {
  padding-left: 40px;
  border-radius: 10px;
  width: 100%;
}

.sec1 {
  height: 100vh;
  width: 100%;
  padding: 20px;
  display: flex;
  flex-direction: row;
  align-items: center;
}

.rgform {
  width: 50%;
  height: 100%;
  padding-top: 30px;
}




/*body {
  background-image: 1;
  /* background-color: #cccccc;*/
/*margin: 50px 0px;*/
/* margin: auto;
  padding: 0px;
  
  

}*/

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  height: 40px;
  padding: 5px;
  font-size: 16px;

}

#userName,
#fullName,
#NIC,
#email,
#pwd,
#repwd {
  border-radius: 10px;
  background: white;
  background-position: left top;
  background-repeat: repeat;
  padding: 5px;
  width: 70%;
  height: 40px;
  box-sizing: border-box;
  margin-left: 0px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;


  /* Add this property to include padding and border in the width and height */


}

/*.secImage {
  float: right;
  width: auto;
  height: auto;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
  margin-block-end: auto;

}*/

.signuplabel {
  text-align: left;
  margin-top: 30px;
  margin-bottom: 20px;
  margin-left: 40px;
  font-size: 2rem;
  font-weight: 900;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

  /* Add this property to create space between the heading and the form */
}

.rgimg {
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.rgimg img {
  width: 80%;
  height: auto;
  border-radius: 15px;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
}

.rgquote {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-weight: 700;
  font-size: 1.5rem;
  margin-top: 20px;
  width: 80%;
  text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
}

.haveacc {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  font-size: 1rem;
  font-weight: 500;

  margin-top: 20px;
}

.info-icon {
  position: absolute;
  right: 1200px;
  transform: translateY(-50%);
  cursor: pointer;
  font-size: 25px;
}

.info-text {
  visibility: hidden;
  width: 400px;
  background-color: #333;
  color: #fff;
  text-align: right;
  border-radius: 5px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  transform: translateX(-50%);
  font-size: 13px;
  left: 900%;
}

.info-icon:hover .info-text {
  visibility: visible;
}
</style>
    <script>
        function validateForm() {
            var password = document.getElementById("pwd").value;
            var confirmPassword = document.getElementById("repwd").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false; // Prevent form submission
            }
        }
    </script>
</head>

<body>
    <!-- header-->
    
    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="Home.html"><img src="logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
        <div class="brand">
            <h2 id="logo" style="line-height: 10px;font-family:Lucida Handwriting,cursive;"><b>HonourBallot</b></h2><br>
            <h6 id="slogan" style="line-height: 2px;">We Value Your Vote</h6>
        </div>
        </div>

        <div class="navbar" id="Topnav">
          <a href="Home.html"><button class="active" type="button" id="bttn1"><b>Home</b></button></a>
          <div class="dropdown">
            <button class="dropbtn">Category</button>
            <div class="dropdown-content">
              <a href="#">Awards</a>
              <a href="#">Candidates</a>
              <a href="About Award Ceremony.html">About Award Ceremony</a>
              <a href="#">Nomination Result</a>
              <a href="#">Sponsors</a>
            </div>
          </div>
          <a href="#contact"><button  type="button" id="bttn1">Vote Now</button></a>
          <a href="#contact"><button  type="button" id="bttn1">Contact Us</button></a>
          <a href="#about"><button  type="button" id="bttn1">About Us</button></a>
          <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
        </div>
        <!--User button with photo-->
        <div class="userbtn">
          <div class="userbtntext">Hello!<br><a href="login.html" class="userlink">Login/SignUp</a></div>
          <img src="uuser.png" class="userbtnimg" height="40px" width="40px">
        </div>
        
      </header>
      <section class="sec1">
        <div class="rgform">
            <form action='submitregistration.php' method="POST" onsubmit="return validateForm()">

                <h2 class="signuplabel">Sign Up</h2>
                <br>
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="userName" id="userName" placeholder="UserName" required>
                </div>
        
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" required>
                    <br><br>
                </div>
        
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="nic" id="NIC" placeholder="NIC" pattern="[0-9]{12}+[V-v]" required>
                    <br><br>
                </div>
        
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}"
                        placeholder="Email" required>
                    <br><br>
                </div>
        
                <div class="input-container">
                    <i class="fa fa-lock icon"></i>
                    <input type="password" name="pwd" id="pwd" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{5,10}$" placeholder="Password" required>
                </div>
        
                <div class="input-container">
            <i class="fa fa-lock icon"></i>
            <input type="password" name="repwd" id="repwd"
                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{5,10}$"
                placeholder="Re-type Password" required>
                </div>
            <div class="info-icon">
                <i class="fas fa-info-circle"></i>
                <span class="info-text">Password must contain at least one alphabetical character, one digit, one
                    special character, and be 5-10 characters long.</span>
            </div>
        
        
                <input type="submit" id="submitBtn" value="Sign Up">
            </form>
            <p class="haveacc">Already have an account?<a href="login.html">Log in</a></p>
        
        <div class="rgimg">
            <img src="Jackie.jpg">
        <div class="rgquote">
            <h3>Awards are an encouragement. An award is not something we aim at while making a film.</h3>
            <h3>Vetrimaaran</h3>
        </div>
        </div>
        
      </section>

    

      <hr style="background-color: black;height:1px;">
    <footer>
      <div class="footer-container">
       
          <div class="footerhead1">
            <img src="Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
            <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
            <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
            <div>
              <a href="#"><img src="fb.png" class="fimg"></a>
                <a href="#"><img src="instagram.png" class="fimg"></a>
                <a href="#"><img src="twitter.png" class="fimg"></a>
                
            </div>
          </div>
          <div class="footerhead" id="fhd2">
            <h2>Categories</h2>
            <a href="#">Awards</a>
                <a href="#">Candidates</a>
                <a href="About Award Ceremony.html">About Award Ceremony</a>
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
              <a href="login.html">Log in</a>
              <a href="#default">FAQs</a>
              <a href="#">Terms & Condition</a>
              <a href="#">Privacry & Policy</a>
          </div>
        
        
        <div class="footer-email">
            <h2>Connect with Us</h2>
            <input type="email" placeholder="Enter your email address" id="footermail"> <input type="submit" Value="Subscribe" id="footermail-btn">
        </div>
      </div>
      <center>
        <div class="copyright"><h4>© 2023 HonourBallot. All rights reserved.</h4></div>
      </center>
      
     </footer>


</body>
<!--pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{5,10}$"-->

</html>