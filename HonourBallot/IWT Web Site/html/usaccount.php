<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process personal details form
    if (isset($_POST["username"]) && isset($_POST["fullname"]) && isset($_POST["nic"]) && isset($_POST["email"])) {
        $username = $_POST["username"];
        $fullname = $_POST["fullname"];
        $nic = $_POST["nic"];
        $email = $_POST["email"];

        //connect
        $host='localhost';
        $dbusername='root';
        $dbpassword='';
        $dbName='account';

        $connn - new mysqli($host , $dbusername , $dbName)
        if ($conn->connect_error){
            die('Connection failed:' . $conn->connect_error)
        }

        $sql = 'INSERT INTO form (, email, phone, customID, additional'
        // Save the personal details to the database or perform necessary actions
        // ...

        // Redirect the user to a success page or any other desired location
        echo "success";
        exit;
    }

    // Process password change form
    if (isset($_POST["currentPassword"]) && isset($_POST["newPassword"]) && isset($_POST["confirmPassword"])) {
        $currentPassword = $_POST["currentPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        // Perform password change validation and update the password in the database
        // ...

        // Redirect the user to a success page or any other desired location
        header("Location: success.php");
        exit;
    }

    // Process file upload
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];
        $filename = $file["name"];
        $tempFilePath = $file["tmp_name"];

        // Define the destination folder to save the uploaded file
        $uploadDir = "uploads/";
        // Generate a unique filename for the uploaded file
        $uploadFilePath = $uploadDir . uniqid() . "_" . $filename;

        // Move the temporary file to the destination folder
        if (move_uploaded_file($tempFilePath, $uploadFilePath)) {
            // File uploaded successfully, you can save the file path to the database or perform necessary actions
            // ...

            // Redirect the user to a success page or any other desired location
            header("Location: success.php");
            exit;
        } else {
            // Error occurred while uploading the file
            // Handle the error accordingly
            echo "File upload failed.";
        }
    }
}
?>