<?php
$con = mysqli_connect("localhost", "root", "", "patient_database");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

if (isset($_POST['edit'])) {
    $id = $_POST['patient_ID'];
    $patient_name = $_POST['patient_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // Update query
    $sql = "UPDATE patient SET 
            patient_name = '$patient_name', 
            phone = '$phone', 
            email = '$email', 
            address = '$address', 
            age = '$age', 
            gender = '$gender', 
            password = '$password' 
            WHERE patient_ID = '$id'";

    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
        header("Location: index.php"); // Redirect back to the main page after successful update
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request";
}

mysqli_close($con);
?>
