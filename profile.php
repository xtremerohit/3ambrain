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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;

        }
        .card {
            display: flex;
            align-items: center;
        }

        /* .card {
            border-radius: 2em;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        } */

        .shareCount {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-left: auto;
            margin-right: auto;

        }

        .liksCount {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 12px;
            margin-right: 12px;
        }

        .card-img-top {
            border-radius: 50%;
            /* margin: 0 auto; */
            align-items: center;
            margin-left: 12px;
            margin-right: 12px;
            margin-top: 12px;
            margin-bottom: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .col{
            align-items: center;
            margin-left: 12px;
            margin-right: 12px;
        }
    

        @media screen and (min-width: 400px) {
            .card-img-top {
                min-width: 70px;
            }

            
        }

        @media screen and (min-width: 500px) {
            .card-img-top {
                max-width: 90px;
            }
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
  <?php include 'loginsystem/navbar.php' ?>

    <div class="row">
        <div class="card mt-4" >
            <img src="/3ambrain/loginsystem/imgfile/astronaut.jpg" style="border-radius: 50%;" class="card-img-top" alt="">
            <p style="text-align: center"><b>@Username</b></p>
            <div class="row">

                <div class="col">
                <div class="shareCount">
                        <div class="col card-body ">
                            <img style="width: 35px; align-items: center;" src="/3ambrain/loginsystem/imgfile/brainstorm.png" alt="">
                            <p><b>134</b></p>
                        </div>
                        <div class="liksCount card-body">
                            <img style="width: 35px;" src="/3ambrain/loginsystem/imgfile/like.png" alt="">
                            <p><b>23k</b></p>
                        </div>
                    </div>
                    
            </div>
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
    <?php include 'bottomNavbar.php' ?>
</body>

</html>