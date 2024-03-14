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
  <!-- <link rel="stylesheet" href="style.css"> -->

  <style>
    body {
      background-image: url("moon.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;
      background-size: cover;
    }


    .card {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: auto;
      margin-left: auto;
      margin-right: auto;
      max-width: fit-content;
      padding-left: auto;
      padding-right: auto;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      border-radius: 40px;
    }

    .form-group {
      border-radius: 23px;
      padding: auto;
      width: auto;
      height: auto;
      font-weight: bold;
      margin-left: 30px;
      margin-right: 30px;
    }

    .form.control {
      border-radius: 25px;
    }

    .btn {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: auto;
      margin-right: auto;
      padding-left: 40px;
      padding-right: 40px;
      font-weight: bold;
    }
  </style>
  <title>Contact Us</title>
</head>

<body>
  <?php include 'loginSystemNavbar.php' ?>
  <div class="astroimg">
    <div class="card mt-5">
      <h3 class="text-center mt-3" id="lsbletext">Contact us</h3>
      <form>
        <div class="form-group mt-4 mb-4">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group mt-4 mb-4">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
        <div class="form-group mb-4 mb-4">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" rows="4" cols="50" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">submit</button>
      </form>
    </div>
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