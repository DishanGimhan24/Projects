<?php
    include_once 'config.php';
?>

<?php
    $U_id = $_GET['id'];
    $U_name = $_GET['name'];
    $des = $_GET['des'];
    
?>
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
        justify-content: space-between;
        width: 60%;
    }
    .heropart .quote h3{
        font-size: 1.2rem;
        font-family: Brush Script MT,cursive;
        font-weight: 800;
    }
    .questions table{
        border-collapse: collapse;
        border: 1px;
        font-family:Brush Script MT,cursive;
        /*border-collapse: collapse;*/
        width: 100%;
        font-size:1.5rem;
        padding:10px;
    }
    table, th, td {
    border: 1px solid black;
  }
  
  th, td {
    padding: 8px;
    text-align: center;
    /*border: none; /* Remove borders from table cells */
  }
  td input,textarea{
    width:100%;
    height:100%;
    font-size:1.2rem
  }
  #submit{
    margin:20px;
    color:white;
    background-color:black;
    font-size:1.2rem;
    border:none;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    cursor:pointer;
    padding:10px;
    border-radius:10px;
  }
  #submit:hover{
    
    color:black;
    background-color:darkgray;
    
  }
  .addform input{
      padding:5px;
      width:500px;
      height:40px;
      font-size:1.5rem;
      border:none;
      outline:none;
      
    }
    .addform textarea{
      padding:5px;
      width:500px;
      height:150px;
      font-size:1.2rem;
      border:none;
      outline:none;
      
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
  <h2 class="title">Upadate Award Details</h2>
  <div class="heropart">
    <div class="quote">
      <h3>Make Award Value Beyond The Limits</h3>
    </div>
    
  </div>
</section>

<section class="section-1" id="sec1">
  


<center>
<div class="questions tbl" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);width:80%;padding:10px;">
<form action="submitUpdateAward.php" method="GET" name="form2" class="addform">
        <table border="0" width="25%">
            <tr>
                <td>Award ID</td>
                <td><input type="text" value="<?php echo $U_id ?>" name="field0" readonly></td>
            </tr>
           
            <tr>
                <td>Award Name</td>
                <td><input type="text" value="<?php echo $U_name ?>" name="field1"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="field2" rows="20" colums="100"><?php echo $des ?></textarea></td>
                
            </tr>
            
        </table>
        <input type="submit" value="Update" name="submit" id="submit">
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