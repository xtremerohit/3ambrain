<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">

<style>
  .nav-item {
    font-family: "Madimi One", sans-serif;
    font-weight: 300;
    font-style: normal;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">3AM-thoughts</a> -->
    <img style="width: 50px;" src="/3ambrain/loginsystem/imgfile/ideaicon.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        if ($loggedin) {
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain/index.php">Home</a>
        </li>';
        }
        ?>
        <?php
        if (!$loggedin) {
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain/loginsystem/login.php">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain/loginsystem/signup.php">Signup</a>
          </li>';
        }
        ?>
        <?php
        if ($loggedin) {
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain/loginsystem/about.php">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain//loginsystem/contact.php">Contact</a>
          </li>';
        }
        ?>
        <?php
        if ($loggedin) {

          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain/loginsystem/profile.php">Profile</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/3ambrain//loginsystem/logout.php">logout</a>
          </li>';
        }
        ?>
    </div>
  </div>
</nav>