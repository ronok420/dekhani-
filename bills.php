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

$package_ID =  $_SESSION['package_ID'];
$patient_ID =  $_SESSION['patient_ID'];
$query = " SELECT * from bill where package_ID = '$package_ID' and patient_ID = '$patient_ID'";
$res = mysqli_query($con, $query);

if ($res) {
  //echo "query successful <br>";
} else {
  echo "Erorr: $query <br> $con->error <br>";
}

$query2 = "SELECT SUM(cost),COUNT(bill_ID)
FROM bill
WHERE package_ID = '$package_ID' AND patient_ID = '$patient_ID';";
$res2 = mysqli_query($con, $query2);

$rows2 = mysqli_fetch_array($res2);
// print_r($rows2);

// echo $rows2['1'];


$con->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>bills</title>
  <style>
    .container {
      margin-top: 100px;
    }
  </style>
</head>

<body>
  <?php require('navbar.php') ?>
  <div class="container">
    <h3 class="text-center">Your Reciept</h3>
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Patient ID</th>
          <th scope="col">Patient name</th>
          <th scope="col">Package ID</th>
          <th scope="col">Bill ID</th>
          <th scope="col">Bill name</th>
          <th scope="col">Cost</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>

        <?php

        while ($rows = mysqli_fetch_array($res)) {
          $package_ID = $rows[0];
          $bill_ID = $rows[1];
          $bill_name = $rows[2];
          $patient_ID = $rows[3];
          $patient_name = $rows[4];
          $date = $rows[6];
          $cost = $rows[7];
          echo "<tr>";

          echo "<td> {$patient_ID}  </td>";
          echo "<td>  {$patient_name}  </td>";
          echo "<td> {$package_ID}  </td>";
          echo "<td> {$bill_ID}  </td>";
          echo "<td> {$bill_name}  </td>";
          echo "<td> {$cost} </td>";
          echo "<td> {$date} </td>";
          echo "</tr>";

            //  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";


        }

        ?>

      </tbody>
    </table>
    <div class="mt-5">
      <div class="alert alert-primary" role="alert">
        <h3 class="text-center">Your total number of bills are <?php echo $rows2['1']; ?></h3>
      </div>
      <div class="alert alert-success" role="alert">
        <h3 class="text-center">Total cost <?php echo $rows2['0'] . 'tk'; ?></h3>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>