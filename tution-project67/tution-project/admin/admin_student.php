
<?php
include("../login/login-cre.php");

if ($num2!=0) {
  

?>  




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  


    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <style type="text/css">
      body{
        background-color: #e2e8f0;
      }
      .favourate {
  display: none;

 
        }
        .total{
  display: flex;
  flex-direction: row;
}

@media screen and (max-width:900px){

.total{
  display: flex;
  flex-direction: column;
}

}


.show {display: block;}

.show2{

transform: rotate(180deg);

 transition-duration: 0.1s ease-in-all;
}
    </style>
  </head>
  <body>
    
    <div class="container"> 
      <div class="total" >



<?php

$student = mysqli_real_escape_string($link, $_GET['student']);

 $sql = "SELECT profile_photo from login where  email='$student'";
 // echo "$sql";
 $re12=mysqli_query($link, "$sql") or die("error33");
 $num12 = $re12->num_rows;
 $row3=mysqli_fetch_array($re12);

$image = $row3['profile_photo'];
$image_src = "../$image";

?>


        <div class="col-md-4 mb-3 mt-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $image_src ?>" alt="Admin" class="rounded-circle" width="150">
<?php 

$student = mysqli_real_escape_string($link, $_GET['student']);

 $qu12="SELECT * FROM student where email='$student' ";

//  echo"$qu12";
$re2=mysqli_query($link, "$qu12") or die("error33");
$num2 = $re2->num_rows;
$row3=mysqli_fetch_array($re2);


?>
                    <div class="mt-3">
                      <h4><?php   echo $row3['fullname']  ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div class="col-sm-8 mt-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row3['fullname'] ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row3['email'] ?>
                    </div>
                  </div>
                  <hr>
                  
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row3['mobile_number'] ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row3['gender'] ?>
                    </div>
                  </div>
                  <hr>
                  
                
                </div>
              </div>
        </div>


      
    </div>


       <div class="container">
        <div class="card bg-white">
          <div class="card-body">

            <div class="row">
              <a href="demo.php" style="color: black; text-decoration: none; width:100%; ">
                <div class="col d-flex justify-content-between">
                
                    <h6 class="mb-0">Demo class</h6>
                 
                </div>
              </a> 
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-between" onclick="myFunction()">
                <h6  class="dropbtn">
                  Classes Joined
                </h6>  
                <i class="fa fa-caret-down" aria-hidden="true" id="icon-f"></i>
              </div>
            </div>
            <hr>



            <div class="row favourate card" id="favourate">
                <div class='card-body'>
                   <div class='row'>
                     <?php    
                     $student = mysqli_real_escape_string($link, $_GET['student']);
                       $qu12="SELECT * from students_joined where  student ='$student'";
                     // echo"$qu12";
                      $re12=mysqli_query($link, "$qu12") or die("error33");
                      $num12 = $re12->num_rows;
                      //echo "$num12";
                      for ($i=1;$i<=$num12;$i++) { 
                        

                      $row3=mysqli_fetch_array($re12);


                      $date=$row3['date'];

                      ?> 
                              <?php
                                      echo "
                              <div class='card-body'>

                                 <div class='row'>
                                    <div class='col d-flex flex-row justify-content-between'>

                                      
                                      <div class='mb-0 ml-4 d-flex flex-column'>
                                        

                                        <h6>Tutor : {$row3['tutor_name']} </h6>
                                        <h6>Tute at  : {$row3['where_tution']} </h6> 

                                        <h6>Subject : {$row3['subject']} </h6> 
                                        <h6>fee : {$row3['fee']} </h6>
                                        <h6>When joined : {$row3['date']} </h6>

                                      </div>
                                       <div class='border px-3'>
                                        <h5>Contact info</h5>
                                        <p>Email : ".$row3['tutor']."<br>
                                         Mobile number : ".$row3['tutor_mobile']."<br>
                                        </p>
                                      </div>
                                     
                                    </div>
                                  </div>
                                  <hr>

                             
                            </div>
                             ";
                       }        
                             ?>
                    </div>
                    <hr>
                </div>
              </div>
            </div>



          </div>
        </div>     
      </div>
 
        
          <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("favourate").classList.toggle("show");
          document.getElementById("icon-f").classList.toggle("show2");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
    </script>

  </body>


<!-------------
 




------->


<?php
}

  else{
    echo "

    <link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>

      <link rel='stylesheet' type='text/css' href='../login/signup.css'>


    <div class='container'>
      <div class='row'>
        <div class='col-md-4 offset-md-4 form-div'>
    
            <div class='form-group' style='display:flex; width:100%; justify-content:center;'>
              please login to open webpage


            </div>

                <div class='form-group' style='display:flex; width:100%; justify-content:center;'>
                
                <a href='login/login.php'>
                  <button type='button' class='btn btn-primary btn-lg' >
                    login
                  </button>
                </a>
              </div>

        </div>
      </div>
    </div>


    
    ";
  }
?>
