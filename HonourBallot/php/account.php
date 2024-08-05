
<?php
include_once 'config.php';
//this code is to prevent user going login page when logged in
session_start(); // Start the session

// Check if the session is already started and the user is logged in
if (!isset($_SESSION['username'])) {
    // User is already logged in, redirect to a different page
    header("Location: home.php");
    exit();
}
else{
  $username = $_SESSION['username'];
  $userid = $_SESSION['userid'];
}

global $id;



$currentScriptPath = $_SERVER['SCRIPT_NAME'];
$subdirectory = rtrim(dirname(dirname($currentScriptPath)), '/\\');
$fileName = isset($_FILES["file"]["name"]) ? basename($_FILES["file"]["name"]) : "";
$targetDir = $_SERVER['DOCUMENT_ROOT'] . $subdirectory . "/images/";
$targetFilePath = $targetDir . $fileName;

$sql = mysqli_query($con,"SELECT * FROM voter WHERE userName='$username'");
$row  = mysqli_fetch_array($sql);
if(is_array($row)) {

  $id = $row["userId"];
  $username = $row["userName"];
  $fullname = $row["fullName"];
  $nic = $row["nic"];
  $email = $row["email"];
} 

$sql = mysqli_query($con,"SELECT * FROM voter_image WHERE userID='$userid'");
$row  = mysqli_fetch_array($sql);
if(is_array($row)) {
  $image = $row["image"];
}
else {
  $image = NULL;
}

if(isset($_POST['save'])) {

  $sql = "UPDATE voter SET userName='" . $_POST['username'] . "', fullName='" . $_POST['fullname'] . "', nic='" . $_POST['nic'] . "' , email='" . $_POST['email'] . "' WHERE userId='$id'";
    
  if ($con->query($sql) === TRUE) 
  {
    echo "<script>alert('Profile edited successfully')</script>";
    echo "<script>setTimeout(\"location.href = '../php/account.php';\",400);</script>";
    exit();
  }
  else
  {
      echo "SQL Error";
  }
}

if(isset($_POST['pass'])) {

  $sql = mysqli_query($con,"SELECT password FROM voter WHERE userId='$id'");
  $row  = mysqli_fetch_array($sql);
  if(is_array($row)) {
  
    $password = $row["password"];

    if($password == $_POST['currentPassword']) {

      $newpassword = $_POST['newPassword'];

      $sql = "UPDATE voter SET password='$newpassword' WHERE userId='$id'";
    
      if ($con->query($sql) === TRUE) 
      {
        echo "<script>alert('Password changed')</script>";
        echo "<script>setTimeout(\"location.href = '../php/account.php';\",400);</script>";
        exit();
      }
      else
      {
        echo "SQL Error";
      }
    }
    else {
      echo "<script>alert('Current password invalid')</script>";
      echo "<script>setTimeout(\"location.href = '../php/account.php';\",400);</script>";
    }
  }
  else {
    echo "<script>alert('Voter not found')</script>";
  }
}

if(isset($_POST['deleteVoter'])) {

  $sql = mysqli_query($con, "DELETE FROM voter WHERE userId='$id'");
  if ($sql) {
      echo "success";
      exit();
  } else {
      echo "error";
      exit();
  }
}


if(isset($_POST['image'])) {

  //$firstname = $_POST["firstname"];
  //$lastname = $_POST["lastname"];
  //$email = $_POST["email"];
  //$phone = $_POST["phone"];
  $fileName=$_POST['image'];

  if(!empty($fileName) && move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

    if($image == NULL) {
      $sql = "INSERT INTO voter_image (userId, image) VALUES ('".$userid."', '".$fileName."')";
  
      if ($con->query($sql) === TRUE) 
      {
        echo "<script>alert('Image uploaded')</script>";
        //echo "<script>setTimeout(\"location.href = '../php/account.php';\",400);</script>";
        exit();
      }
      else
      {
        echo "<script>alert('SQL Error')</script>";
      }
    }
    else {
      $sql = "UPDATE voter_image SET image='".$fileName."' WHERE userId='1'";
  
      if ($con->query($sql) === TRUE) 
      {
        echo "<script>alert('Image uploaded')</script>";
        echo "<script>setTimeout(\"location.href = '../php/account.php';\",400);</script>";
        exit();
      }
      else
      {
        echo "<script>alert('SQL Error')</script>";
      }
    }

      
  }else{
    echo "Error uploading image";
  }
  
}


?>

<html>
<head>
    <title>User Account - Online Voting System</title>
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../css/header&footer.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>

    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="#default"><img src="../Images/logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
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
              <a href="#">Sponsors</a>
            </div>
          </div>
          <a href="#contact"><button  type="button" id="bttn1">Vote Now</button></a>
          <a href="#contact"><button  type="button" id="bttn1">Contact Us</button></a>
          <a href="#about"><button  type="button" id="bttn1">About Us</button></a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <!--User button with photo-->
        <div class="userbtn">
          <div class="userbtntext">Hello!<br><a href="#login" class="userlink">Login/SignUp</a></div>
          <img src="myuser.png" class="userbtnimg" height="50px" width="50px">
        </div>
        
      </header>
      <!----------------------------------------------------------------------------------------------------------------------->
      <hr>
      <div class="container">
        <div class="card">
          <div class="personal-details">
              <h2>Personal Details</h2>
              <form method="POST">
                  <label for="username">Username:&nbsp; &nbsp; &nbsp; </label>
                  <input type="text" id="username" name="username" value="<?php echo $username ?>" required></br></br>
  
                  <label for="fullname">Full Name:&nbsp; &nbsp; &nbsp; </label>
                  <input type="text" id="fullname" name="fullname" value="<?php echo $fullname ?>" required></br></br>
  
                  <label for="nic">NIC Number:&nbsp; </label>
                  <input type="text" id="nic" name="nic" value="<?php echo $nic ?>" required></br></br>
  
                  <label for="email">Email:&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; </label>
                  <input type="email" id="email" name="email" value="<?php echo $email ?>" required></br></br>
  
                  <button type="submit1" name="save">Save</button>
              </form>
          </div>
          <form method="POST" enctype="multipart/form-data">
            <div class="photo-upload">
                <h2>Upload Photo</h2><br>
                <input type="file" name="file" accept="image/*">
                <?php
                  if($image == NULL) {
                    echo "<img src='../images/msn-people-person-profile-user-icon--icon-search-engine-11.png'>";
                  }
                  else {
                    echo "<img src='../php/image.php'>";
                  }
                ?>
                <br>
                <button type="submit" name="image">Edit Photo</button>
            </div>
          </form>
      </div>
      <div class="password-change">
          <h2>Change Password</h2>
          <br>
          <form method="POST">
              <label for="currentPassword">Current Password: &nbsp;</label>
              <input type="password" id="currentPassword" name="currentPassword" required></br></br>
  
              <label for="newPassword">New Password:  &nbsp;  &nbsp; &nbsp; </label>
              <input type="password" id="newPassword" name="newPassword" required></br></br>
  
              <label for="confirmPassword">Confirm Password: ; </label>
              <input type="password" id="confirmPassword" name="confirmPassword" required></br></br>
  
              <button name="pass" style="background-color:red;" onclick="event.preventDefault();openConfirmationDialog()">Delete Account</button>
              <button type="submit" name="pass" onclick="return validatepass()">Change</button>
          </form>

          <div id="confirmationDialog" class="modal">
          <div class="modal-content">
              <h3>Confirm Deletion</h3>
              <p>Are you sure you want to delete?</p>
              <div class="button-container">
              <button id="confirmDeleteButton" onclick="deleteVoter()">Delete</button>
              <button onclick="closeConfirmationDialog()">Cancel</button>
              </div>
          </div>
          </div>
      </div>
      </div>
    <!----------------------------------------------------------------------------------------------------------->

    <br>

<hr>
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


</body>
</html>