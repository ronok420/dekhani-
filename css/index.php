<?php 
$con = mysqli_connect("localhost", "root", "", "patient_database");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

$sql = "SELECT patient_ID, patient_name, phone, email, address, age, gender, password FROM patient";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data from Database and PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/HMS/home.php">U Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/HMS/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/HMS/profile.php">My Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="http://localhost/HMS/doctor.php">Doctors</a></li>
            <li><a class="dropdown-item" href="http://localhost/HMS/bill_landing.php">Bills</a></li>
            <li><a class="dropdown-item" href="http://localhost/HMS/ap_specialisation.php">Appointment</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/HMS/logout.php">Log Out</a>
        </li>
      </ul>
    </div>
    <a class="nav-link" href="http://localhost/HMS/admin login.php">Log in as admin</a>
  </div>
</nav>






    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch Data From Database in PHP</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th> Patient_ID </th> 
                                <th> Name </th> 
                                <th> Phone </th> 
                                <th> Email </th> 
                                <th> Address </th> 
                                <th> Age </th> 
                                <th> Gender </th> 
                                <th> Password </th> 
                                <th> Edit </th>         
                                <th> Delete </th> 
                            </tr>
                            <?php 
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <tr> 
                                <td><?php echo $row['patient_ID']; ?></td> 
                                <td><?php echo $row['patient_name']; ?></td> 
                                <td><?php echo $row['phone']; ?></td> 
                                <td><?php echo $row['email']; ?></td> 
                                <td><?php echo $row['address']; ?></td> 
                                <td><?php echo $row['age']; ?></td> 
                                <td><?php echo $row['gender']; ?></td> 
                                <td><?php echo $row['password']; ?></td> 
                                <td><a href="edit2.php?patient_ID=<?php echo $row['patient_ID']; ?>" class="btn btn-primary">Edit</a></td> 
                        

                                <td><a href="delete.php?patient_ID=<?php echo $row['patient_ID']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php    
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
