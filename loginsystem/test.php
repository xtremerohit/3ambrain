<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: loginsystem/login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .card {
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 7em;
      margin-left: 0%;
      border-radius: 2em;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

    }

    .card-img-top {
      min-width: 10%;
      max-width: 13%;
      border-radius: 50%;
      /* margin: 0 auto; */
      margin-left: 12px;
      margin-top: 12px;
      margin-bottom: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
  </style>
  <title>Hello, world!</title>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="row">
    <div class="card mt-4">
      <img src="astronaut.jpg" class="card-img-top" alt="">
        <h3>2443</h3>
        <img src="rocket.jpg" alt="">
    </div>
  </div>
  <div class="card mt-4">

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>