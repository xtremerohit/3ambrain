<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'db.php';
  $username = $_POST["username"];
  $password = $_POST["password"];


  // $sql = "Select * from users where username='$username' AND password='$password'";
  $sql = "Select * from user_login where username='$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['user_password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:/3ambrain/profile.php");
      } else {
        $showError = "Invalid Credentials";
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
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

  <link rel="stylesheet" href="/3ambrain/css/style.css">
  <link rel="stylesheet" href="/3ambrain/css/styleforgooglesignbtn.css">
  <link rel="stylesheet" href="test.css">


  <title>LogIn</title>
</head>

<body>
  <?php include 'loginsystem/loginSystemNavbar.php' ?> 
  <div class="flex-container">

    
    <div class="flex-child green">
      <div class="main-section mt-3">
        <p class="text-center" style="font-size: 25px; font-weight: bold;">Login to Your Account</p>
        <div class="card">
          <p class="text-center mt-3" style="font-size: 25px; font-weight: bold;">Login</p>
          <form action="login.php" method="post">
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Username" maxlength="12" name="username" maxlength="12" id="username" aria-describedby="">
            </div>
            <div class="form-group mt-3">
              <input type="password" placeholder="Password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary mt-4 ">Login</button>
          </form>
          
        </div>
      </div>
      <p class="text-center mt-3" style="font-size: 15px; font-weight: bold;">Don't have an account? <a href="/3ambrain/loginsystem/signup.php">Sign up</a></p>
      <div class="btn1">
        <button class="btn primery">
          <img style="width: 20px;" src="/3ambrain/loginsystem/imgfile/googleimg.png" alt="">
          Login With Google
        </button>
      </div>
    </div>
    <div class="flex-child magenta">
   <div class="card-body ">
    <img style="width: 550px;" src="homepageimg.jpg" alt="">
   </div>
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