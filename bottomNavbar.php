<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}

?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<style>
    /* Place the navbar at the bottom of the page, and make it stick */
    #bottomNav {
        background-color: white;
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    /* Style the links inside the navigation bar */
    #bottomNav i {
        float: left;
        display: block;
        margin-left: 30px;
        margin-right: 30px;
        text-align: center;
        /* padding: 30px 30px; */
        text-decoration: none;
        font-size: 1.5em;
    }

    #Navbtn {
        border: none;
        float: left;
        display: block;
        margin-left: 30px;
        margin-right: 30px;
        border-radius: 34px;
        padding: auto;
        background-color: rgb(255, 244, 35);
    }
</style>
<div class="navbar" id="bottomNav">
    <a href="/3ambrain/index.php"><button id="Navbtn"><i><img style="width: 28px;" src="/3ambrain/loginsystem/imgfile/rocket.png" alt=""></i></button></i></a>
    <a href="/3ambrain/dashboard.php"><button id="Navbtn"><i class="fi fi-sr-add mt-1"></i></button></i></a>
    <a href="/3ambrain/profile.php"><button id="Navbtn"><i class="fi fi-sr-user mt-1"></i></button></i></a>
</div>