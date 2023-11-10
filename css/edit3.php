<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
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
                        <form action="updatePatientAd.php" method="post">
                            <div class="mb-3">
                                <label for="Update_name_ad" class="form-label">Name</label>
                                <input type="text" name="Update_name_ad" class="form-control" id="Update_name_ad" value="<?php echo $row['patient_name']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Update_email_ad" class="form-label">Email</label>
                                <input type="email" name="Update_email_ad" class="form-control" id="Update_email_ad" value="<?php echo $row['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Update_age_ad" class="form-label">Age</label>
                                <input type="text" name="Update_age_ad" class="form-control" id="Update_age_ad" value="<?php echo $row['age']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Update_phone_ad" class="form-label">Phone</label>
                                <input type="text" name="Update_phone_ad" class="form-control" id="Update_phone_ad" value="<?php echo $row['phone']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Update_address_ad" class="form-label">Address</label>
                                <input type="text" name="Update_address_ad" class="form-control" id="Update_address_ad" value="<?php echo $row['address']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Update_gender_ad" class="form-label">Gender</label>
                                <input type="text" name="Update_gender_ad" class="form-control" id="Update_gender_ad" value="<?php echo $row['gender']; ?>">
                            </div>
                            <button type="submit" name="Update_button_ad" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>