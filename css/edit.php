<?php
$con = mysqli_connect("localhost", "root", "", "patient_database");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

if (isset($_GET['patient_ID'])) {
    $id = $_GET['patient_ID'];
    $sql = "SELECT patient_ID, patient_name, phone, email, address, age, gender, password FROM patient WHERE patient_ID = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
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
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Edit Patient</h2>
                    </div>
                    <div class="card-body">
                        <form action="/updatePatientAd.php" method="post">
                            <input type="hidden" name="patient_ID" value="<?php echo $row['patient_ID']; ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="patient_name" class="form-control" id="name" value="<?php echo $row['patient_name']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $row['phone']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address" value="<?php echo $row['address']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" id="age" value="<?php echo $row['age']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $row['gender']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" value="<?php echo $row['password']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
