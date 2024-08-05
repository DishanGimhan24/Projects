<?php
include_once "config.php";

// Check if a file was uploaded
if (isset($_FILES['image'])) {
    $image = file_get_contents($_FILES['image']['tmp_name']);
    
    // Insert the image into the database
    $query = "INSERT INTO voter_image (image) VALUES (?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "b", $image);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Image uploaded successfully!";
    } else {
        echo "Failed to upload image.";
    }
    
    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>

