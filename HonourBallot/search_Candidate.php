<?php
// Assuming you have already established a database connection
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search query from the form input field
$searchQuery = $_GET['search data'];

// Prepare the SQL statement to select data from the table based on the search query
$sql = "SELECT * FROM your_table WHERE column_name = '$searchQuery'";

// Execute the SQL query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row and output the data
    while ($row = $result->fetch_assoc()) {
        // Output the data as per your requirement
        echo "ID: " . $row["id"] . ", Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>





<?php
// Assuming you have already established a database connection
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search query from the form input field
$searchQuery = $_GET['query'];

// Prepare the SQL statement to select data from the table based on the search query
$sql = "SELECT * FROM your_table WHERE column_name = '$searchQuery'";

// Execute the SQL query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Redirect the user to another page
    header("Location: another_page.php");
    exit(); // Ensure the code stops executing after the redirection
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>
