<?php
session_start();


// Establish database connection (similar to your other PHP files)
$con = mysqli_connect("localhost", "root", "", "patient_database");

if (!$con) {
    echo json_encode(['error' => 'Connection Error']);
    die();
}



// Get the patient ID from the session
$patientID = $_SESSION['patient_ID'];

// Perform database query to fetch patient data based on the logged-in patient's ID
$query = "SELECT patient_ID, patient_name FROM patient WHERE patient_ID = '$patientID'";

$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $patientData = mysqli_fetch_assoc($result);
    header('Content-Type: application/json');
    echo json_encode($patientData);
} else {
    echo json_encode(['error' => 'Failed to fetch patient data']);
}

// Close the database connection
mysqli_close($con);
?>
