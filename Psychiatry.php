<?php 
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] = false)
{
  header("Location: http://localhost/dbms_project/login.php ");
  exit;
}

if(isset($_GET['id'])){
$con = mysqli_connect('localhost','root','','patient_database');

if(!$con)
{
    die("connection failed due to " . mysqli_connect_error());
}
else
{
    //echo "connection to database is successful";
}
  $id = $_GET['id'];

  $_SESSION['doctor_id'] = $id;
 
  header("Location: http://localhost/dbms_project/Dermatology.php "); 

$con->close();

 }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Psychiatry</title>
    <style>
        .container{
            margin-top: 100px;
        }
    </style>
</head>

<body>
   <?php require('navbar.php')?>;
    <div class="container">
        <h2 class="text-center mb-5">Our Psychiatry Doctors</h2>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?w=2000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Leo</a></h5>
                        <p class="card-text">FCPS Psychiatry,<br>Dhaka Medical College</p>
                        <a href="http://localhost/HMS/Otolaryngology.php?id=leo123" id="leo123" class="btn btn-primary">Make Appointment</a>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?w=2000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Sajid</a></h5>
                        <p class="card-text">FCPS Psychiatry,<br>Rangpur Medical College</p>
                        <a href="http://localhost/HMS/Otolaryngology.php?id=sajid123" id="sajid123" class="btn btn-primary">Make Appointment</a>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?w=2000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Shipon</a></h5>
                        <p class="card-text">FCPS Psychiatry,<br>Khagrachori Medical College</p>
                        <a href="http://localhost/HMS/Otolaryngology.php?id=shipon123" id="shipon123" class="btn btn-primary">Make Appointment</a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>