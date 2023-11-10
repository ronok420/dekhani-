<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Doctors</title>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div class="container">
        <h1 class="text-center mb-5 mt-3">Our Doctors</h1>

        <div class="dropdown text-center ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Find by speciality
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="#" onclick="getDoctorsBySpecialization('Surgery')">Surgery</a></li>
<li><a class="dropdown-item" href="#" onclick="getDoctorsBySpecialization('Otolaryngology')">Otolaryngology</a></li>
<li><a class="dropdown-item" href="#" onclick="getDoctorsBySpecialization('Pediatrics')">Pediatrics</a></li>
<li><a class="dropdown-item" href="#" onclick="getDoctorsBySpecialization('Dermatology')">Dermatology</a></li>
<li><a class="dropdown-item" href="#" onclick="getDoctorsBySpecialization('Psychiatry')">Psychiatry</a></li>

  </ul>
</div>


<br><br><br><br>

        <div class="row">

        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="docto.js"></script>
</body>

</html>