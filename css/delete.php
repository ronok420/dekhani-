<?php
  $con = mysqli_connect("localhost","root","","patient_database");
    session_start();
    // include("db.php");
if (isset($_GET['patient_ID'])) {
$user_id = $_GET['patient_ID'];
$sql = "DELETE FROM patient WHERE patient_ID='$user_id'";
if(mysqli_query($con,$sql)){
    $_SESSION["delete"] = "Patient Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "User does not exist";
}
?>

