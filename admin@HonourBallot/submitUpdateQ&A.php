<?php
include_once 'config.php';
?>

<?php
if (isset($_GET['submit'])) {
    $qID = $_GET['field0'];
    $user_name = $_GET['field1'];
    $question = $_GET['field2'];
    $answer = $_GET['field3'];

    $query = "UPDATE userquestion SET
                answer = '$answer' 
                WHERE qID = '$qID' AND userName = '$user_name' AND question = '$question'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Updated!');window.location.href = 'adminUserQuestion.php';</script>";
        
        exit();
    } else {
        echo "<script>alert('Error in Updating');window.location.href = 'admin@edituserq.php';</script>";
    }
}
mysqli_close($conn);
?>
