<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compitble" content="IE=edge">
  <meta name="Viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy and policies</title>
  <link rel="stylesheet" href="privacypolicy.css">
  <link rel="stylesheet" href="headerfooter.css">
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
<?php
include_once 'config.php';
?>

<!--=====================================================================-->
<?php
$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'ba'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColor[] = getRandomColor(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head
        <link rel="stylesheet" href="gotDetails.css">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Actor</h1>

    
    <div class="box">
    
   
    <canvas id="myChart"></canvas>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor); ?>
                }]
            };

            var myChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
<!--==========================3434343434=======================================================================-->

<?php
// Replace with your desired award name

$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'bas'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor1 = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColor1[] = getRandomColor1(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor1() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="gotDetails.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Actress</h1>
<div class="box">
    <canvas id="myChart1"></canvas>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart1').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor1); ?>
                }]
            };

            var myChart1 = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 50,
                                right: 50,
                                top: 50,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>


<!--====================================3434343434343=======================================================-->


<!--===============================444444444444444444444==============================================----->
<?php
// Replace with your desired award name

$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'bfd'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor2 = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColor2[] = getRandomColor2(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor2() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="gotDetails.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Film Director</h1>
<div class="box">
    <canvas id="myChart2"></canvas>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart2').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor); ?>
                }]
            };

            var myChart2 = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 50,
                                right: 50,
                                top: 50,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>

<!--===============================444444444444444444444==============================================----->

<!--==================================================55555555555555============================================--->
<?php
// Replace with your desired award name

$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'bfm'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor3 = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColor3[] = getRandomColor3(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor3() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="gotDetails.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Film Music</h1>
<div class="box">
    <canvas id="myChart3"></canvas>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart3').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor); ?>
                }]
            };

            var myChart3 = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 50,
                                right: 50,
                                top: 50,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>

<!--==================================================55555555555555============================================--->


<!--======================================================66666666666======================================================--->
<?php
// Replace with your desired award name

$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'bsa'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor4 = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColo4r[] = getRandomColor4(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor4() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="gotDetails.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Supportive Actor</h1>
<div class="box">
    <canvas id="myChart4"></canvas>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart4').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor); ?>
                }]
            };

            var myChart4 = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 50,
                                right: 50,
                                top: 50,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>



<!--======================================================6666666666666666666========================================================================-->

<!--======================================================777777777777777777777========================================================================-->
<?php
// Replace with your desired award name

$sql = "SELECT candidateName, COUNT(*) AS voteCount 
        FROM vote
        WHERE awardName = 'bsas'
        GROUP BY candidateName
        ORDER BY voteCount DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $labels = [];
    $data = [];
    $backgroundColor5 = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['candidateName'];
        $data[] = $row['voteCount'];
        // You can customize the background colors based on your preferences
        $backgroundColor5[] = getRandomColor5(); // Function to generate random colors
    }
} else {
    echo "No data found";
}


// Function to generate a random color
function getRandomColor5() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="gotDetails.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Best Supportive Actress</h1>
<div class="box">
    <canvas id="myChart5"></canvas>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart5').getContext('2d');

            var data = {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($backgroundColor); ?>
                }]
            };

            var myChart5 = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            position: 'left',
                            labels:{
                                color:'black'
                            },
                            padding: {
                                left: 50,
                                right: 50,
                                top: 50,
                                bottom: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>

<!--======================================================77777777777777777========================================================================-->

<!DOCTYPE html>
<html>
<body>
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