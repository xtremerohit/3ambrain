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
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
.imgtop{
  margin-top: 12px;
  margin-bottom: 12px;
  margin-left: 10px;
  width: 45px;
}
</style>
<div class="topnav">
  <img class="imgtop" src="/3ambrain/loginsystem/imgfile/ideaicon.png" alt="">
  <!-- <a href="#home">Home</a> -->
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="#about">About</a>
  </div>
  <!-- <p id="nav1"><b>brainstorm</b></p>  -->
</div>