<?php
include("login/login-cre.php");
include("login/ldb_connect.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Profile</title>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="homepage.css">

    
</head>
<body >


<?php

 $sql = "SELECT profile_photo from login where  email='$usernames'";
 // echo "$sql";
 $re12=mysqli_query($link, "$sql") or die("error33");
 $num12 = $re12->num_rows;
 $row3=mysqli_fetch_array($re12);

$image = $row3['profile_photo'];
$image_src = "$image";

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="" class="rounded" width="40" height="30">
    Acharya
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
                    <li>
                      <a class="nav-link " aria-current="page" href="home-page.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="how-it-work.php">How it works</a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="contactus.php">Help&conatct</a>
                    </li>
                  </ul>
              <div class="navbar-nav ms-auto">
                    
                   <?php 
                if ($role=='Tutor') {
                  echo "<a href='account2.php' class='nav-item nav-link'><img src=' $image_src ' style='width: 40px; height: 40px; border-radius: 50%;'> </a>
                  ";
                    
                }else if ($role=='admin'){
                   echo "<a href='admin/homeadmin.php' class='nav-item nav-link'><img src=' $image_src ' style='width: 40px; height: 40px; border-radius: 50%;'> </a>
                  ";
                }
                else if ($role=='Student'){
                   echo "<a href='profile.php' class='nav-item nav-link'><img src=' $image_src ' style='width: 40px; height: 40px; border-radius: 50%;'> </a>
                  ";
                }

                ?>
              </div>
        
       
     
      </ul>
    </div>
  </div>
</nav>
       



<!------boootstrap 4 links------>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>