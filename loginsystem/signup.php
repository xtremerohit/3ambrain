<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'db.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];

  // $exists=false;

  // Check whether this username exists
  $existSql = "SELECT * FROM `user_login` WHERE username = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if ($numExistRows > 0) {
    // $exists = true;
    $showError = "Username Already Exists";
  } else {
    // $exists = false; 
    if (($password == $cpassword)) {
      $hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `user_login` (`username`, `user_password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    } else {
      $showError = "Passwords do not match";
    }
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" class="css">
  <link rel="stylesheet" href="styleforgooglesignbtn.css">
  <title>Home</title>
</head>

<body>
  <?php include("navbar.php") ?>
  <?php
  if ($showAlert) {
    echo '<div class="alert alert-success" role="alert">
    Your Account Is Created! Login Now 
  </div>';
  }
  ?>
  <div class="main-section mt-3">
    <p class="text-center" style="font-size: 25px; font-weight: bold;">Create Your Account</p>
    <p class="text-center" style="font-size: 15px; font-weight: bold;" >Share Your imagination at 3Am Anonymously </p>
    <div class="card">
    <p class="text-center mt-3" style="font-size: 25px; font-weight: bold;">SignUp</p>
      <form  action="signup.php" method="post">
        <div class="form-group">
          <!-- <label for="">Username</label> -->
          <input type="text" class="validate"  placeholder="Username" maxlength="12" name="username" maxlength="12" id="username" aria-describedby="" required>
        </div>
        <div class="form-group">
          <!-- <label for="">Password</label> -->
          <input type="password" placeholder="Password" class="validate" name="password" id="password" required>
        </div>
        <div class="form-group">
          <!-- <label for="">Password</label> -->
          <input type="password" placeholder="Password" class="validate" name="cpassword" id="cpassword" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">SignUp</button>
      </form>
        <div class="gimg btn mb-3">
          <img style="width: 30px;" src="/3ambrain/loginsystem/imgfile/googleimg.png" alt="">
        </div>
      </div>
    </div>
 


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>