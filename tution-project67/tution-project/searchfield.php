<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Acharya</title>

    <style type="text/css">
 

     
      

     

/*------------------modification for mobile----*/


      .mx0 ul{
         list-style: none; 
         line-height: 25px; 
         
      }
      .mx0 {
        margin-left: -25px;
      }

      .mx0 ul li{
        
         border-bottom: 0.3px dotted black;
      }
    </style>
  </head>
  <body>
            <?php
              include("login/login-cre.php");

              if ($num2!=0) {
                include("header.php");
              }else{
                include("headerlogout.php");
              }

              ?>  

          <?php

          include('login/db_connect.php');

         

         $search = mysqli_real_escape_string($link, $_GET['subject']);
         


       $sql = "SELECT * FROM `tutor` WHERE CONCAT( `city`,`locality`,`course_teach`, `subject_teach`) LIKE '%$search%' 
       ";


           
           //echo "$sql";

          $re12=mysqli_query($link, "$sql") or die("error33");
          $num12 = $re12->num_rows;
          
        
          if (isset($_POST['filter'])) {

             $course = mysqli_real_escape_string($link, $_POST ['course']);
             $subject = mysqli_real_escape_string($link, $_POST ['subject']);
             $locality = mysqli_real_escape_string($link, $_POST ['locality']);


            $sql3 = "SELECT * FROM `tutor` WHERE CONCAT( `city`,`locality`,`course_teach`, `subject_teach`) LIKE '%$search%' 
              AND CONCAT(`course_teach`) LIKE '%$course%'

              AND CONCAT(`subject_teach`) LIKE '%$subject%'

              AND CONCAT( `city`,`locality`) LIKE '%$locality%'

              ";     
              //echo "$sql3";

              $re123=mysqli_query($link, "$sql3") or die("error33");
              $num12 = $re123->num_rows;

            }


         ?>




    <div class="search-details mx-5 mt-4 mb-0">
      <p class="mb-0"><b>Searched for </b> <?php  echo "$search"; ?> </p>
      <?php  echo "There are ".$num12."results found!  "; ?>
    </div>
   <div class="container mt-2">

     <div class="search-field ">



      <div class="card bg-light mx-1 shadow-sm mb-4" >
        <div class="card-body" id="filter" >

           <h6 class="card-title">Filter Result</h6>
       
           <hr>    
                <div class="d-lg-flex justify-content-around">
                  <div>
              <form method="POST">

                <label for="course">Course</label>
                <input type="text" name="course" class="form-control" placeholder="enter course" style="height: 30px;">
                
                </div>
                <div>
                  <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="enter subject" style="height: 30px;">
                
                </div>
                <div>
                <label for="locality">Locality/Pincode</label>
                <input type="text" name="locality" class="form-control" placeholder="Locality/Pin" style="height: 30px;">
                </div>

                <input type="submit" name="filter" class="btn btn-primary" value="filter">
              </form>
                <!-- < -->
                </div>
        </div>
      </div>

  
     


       <div class="card bg-light mx-2 shadow-sm search-card" >
        <div class="card-body">
          <h5 class="card-title text-center">Tutors in  </h5>
            <hr>
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
          <?php

          if ($num12 > 1) {

          for ($i=1;$i<=$num12;$i++) { 
            

          $row3=mysqli_fetch_array($re12);


        

                  echo "
                      

                 

                      <div class='card border bg-lite'>
                       <div class='card-body'>
                          <div class='d-flex'>
                            <img src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' class='card-img ' alt='...' style='width: 50px; height: 50px;'>

                             <div class='mx-2'>
                              <h6 class='mt-2'>".$row3['fullname']."</h6>
                              <p>age: ".$row3['age'].",&nbsp;Gender: 
                              ".$row3['gender']."</p>
                             </div>

                          </div>


                             <div class='mx0 mb-3' >
                             <ul>
                              <li><i class='fa fa-map-marker' aria-hidden='true'></i> &nbsp;&nbsp;".$row3['city'].",".$row3['locality']."</li>

                              <li><i class='fas fa-chalkboard-teacher'></i> ".$row3['experience']."</li>

                              <li><i class='fa fa-graduation-cap' aria-hidden='true'></i> ".$row3['qualification']."</li>

                              <li><i class='fas fa-file'></i>&nbsp;&nbsp; ".$row3['subject_teach']."</li>

                              <li><i class='fa fa-book' aria-hidden='true'></i> &nbsp;&nbsp;".$row3['course_teach']."</li>

                              <li><i class='fas fa-rupee-sign'></i> &nbsp;&nbsp;&nbsp;".$row3['fee']."</li>
                            </ul>
                             </div>
                          
                        </div>
                        <a href='serched-profile.php?email=".$row3['email']."&fullname=".$row3['fullname']."&date=".$row3['date']."'>
                        <input type='submit' name='view' value='view profile' class='btn-sm btn-primary' style='width: 200px;' >
                        </a>
                       </div>
                      </div>

                    

                 ";
      
       }

        }else{
              echo "<div class='mx-2 text-center'><h5> No Data Found </h5> </div>";
            } 

       
       ?>

                </div>
               
        </div>
       </div>

     </div>
   </div>






    <script>
      6
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>















  




