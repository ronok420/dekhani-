<?php 
$con = mysqli_connect("localhost", "root", "", "patient_database");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

if (isset($_GET['patient_ID'])) {
    $id = $_GET['patient_ID'];
    $sql = "SELECT * FROM patient WHERE patient_ID = '$id'";
   

    $result = $con->query($sql);

    if (!$result) {
        die("Query Error: " . $con->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Patient not found";
        exit;
    }
} else {
    echo "Invalid request";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
       
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Patient</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="update.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="patient_name" placeholder="Patient Name" value="<?php echo $row["patient_name"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row["phone"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $row["address"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $row["age"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="gender" placeholder="Gender" value="<?php echo $row["gender"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row["password"]; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="patient_ID">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Patient" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
