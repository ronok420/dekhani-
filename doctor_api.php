<?php 

$con = mysqli_connect('localhost', 'root', '', 'patient_database');
if (!$con) {
  die("connection failed due to " . mysqli_connect_error());
}
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] = false) {
  header("Location: http://localhost/hms/login.php ");
  exit;
}
$specialization = $_GET['specialization'];
$query = "SELECT * FROM doctor WHERE specialization = '$specialization'";
$res = mysqli_query($con,$query);
$count = mysqli_num_rows($res);
header('Content-Type:application/json');
$specialization = $_GET['specialization'];
if($count>0)
{
    while($rows = mysqli_fetch_assoc($res))
    {
        $arr[] = $rows;
    }
    // echo "<pre>";
    // print_r($arr);
    echo  json_encode(['status' => true, 'data'=>$arr, 'result' => 'found']);
}
else
{
    echo json_encode(['status' => true, 'data' =>'no data found', 'result'=> 'not found']);
}


?>