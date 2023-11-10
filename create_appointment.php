<?php
session_start();

// Retrieve the randomPackageID from the session
 $packageID = $_SESSION['randomPackageID'];


$con = mysqli_connect('localhost', 'root', '', 'patient_database');
if (!$con) {
    die("Connection failed due to " . mysqli_connect_error());
}

// Assuming you receive the appointment data in JSON format
$data = json_decode(file_get_contents("php://input"));

$packageID = $data->package_ID;
// $packageID = $randomPackageID; // Use the randomPackageID from the session
$billID = $data->bill_ID;
$billName = $data->bill_name;
$patientID = $data->patient_ID;
$patientName = $data->patient_name;
$hospitalName = $data->hospital_name;
$date = $data->date;
$cost = $data->cost;

// SQL query to insert appointment data into the "bill" table
$sql = "INSERT INTO bill (package_ID, bill_ID, bill_name, patient_ID, patient_name, hospital_name, date, cost)
        VALUES ('$packageID', '$billID', '$billName', '$patientID', '$patientName', '$hospitalName', '$date', '$cost')";

if (mysqli_query($con, $sql)) {
    echo json_encode(['status' => true, 'message' => 'Appointment created successfully']);
} else {
    echo json_encode(['status' => false, 'message' => 'Error: ' . mysqli_error($con)]);
}

// Close the database connection
mysqli_close($con);
?>
