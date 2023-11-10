<?php
include('db.php');
if (isset($_POST["edit"])) {
    $patient_ID = mysqli_real_escape_string($con, $_POST["patient_ID"]);
    $patient_name = mysqli_real_escape_string($con, $_POST["patient_name"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    $age = mysqli_real_escape_string($con, $_POST["age"]);
    $gender = mysqli_real_escape_string($con, $_POST["gender"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $sqlUpdate = "UPDATE patient SET  = '$title', type = '$type', author = '$author', description = '$description' WHERE patient_ID='$patient_ID'";
    if(mysqli_query($con,$sqlUpdate)){
                die("Something went right");
        session_start();
        $_SESSION["update"] = "Patient Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>