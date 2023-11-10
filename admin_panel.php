<?php 

$con = mysqli_connect('localhost','root','','patient_database');

if(!$con)
{
    die("connection failed due to " . mysqli_connect_error());
}
else
{
    //echo "connection to database is successful";
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>admin panel</title>
    <style>
    hr.style5 {
	background-color: #fff;
	border-top: 2px dashed #8c8b8b;
}
    body{
        background: url(https://img.freepik.com/free-photo/smooth-gray-background_53876-108462.jpg?size=626&ext=jpg&ga=GA1.1.1518270500.1698537600&semt=ais);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        }
    
    </style>
</head>
<body>
    <?php require('navbar_admin_panel.php') ?>;
    <div class="container">
        <h2 class="text-center text-info mt-5">Admin Panel</h2>
        <div class="container w-50 mt-5">
        <div><button onclick="location.href='http://localhost/HMS/doctor_reg.php'" type="button" class="btn btn-primary btn-lg w-100 mt-3">Add Doctor Informaion</button></div>
        <hr class="style5">
        <div><button onclick="location.href='http://localhost/HMS/patient_reg_ad.php'" type="button" class="btn btn-primary btn-lg w-100">Register New User</button></div>
        <hr class="style5">
         <div><button onclick="location.href='http://localhost/HMS/css/index.php'" type="button" class="btn btn-primary btn-lg w-100 mb-3">Edit Patient Database</button></div>

        </div>   
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>