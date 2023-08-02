<?php
include("../login/db_connect.php");
include("../login/login-cre.php");


if ($num2!=0) {
  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<?php  

include 'header-admin.php';


?>





<div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-4 mt-3 mb-3">
        <div class="col">
          <div class="card h-100">
            
            <div class="card-body">

              <?php

              $sql = "SELECT*from student ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);

              echo " <h5 class='card-title '>$row</h5>";
              ?>
              <h5 class="card-title">Students</h5>
              
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
           
            <div class="card-body">

               <?php

              $sql = "SELECT*from tutor ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);

              echo " <h5 class='card-title '>$row</h5>";
              ?>
              <h5 class="card-title">Tutors</h5>
              
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
           
            <div class="card-body">

                <?php

              $sql = "SELECT*from tutor ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);

              echo " <h5 class='card-title '>$row</h5>";
              ?>
              <h5 class="card-title">Income</h5>
              
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">

                <?php

              $sql = "SELECT*from  demo_classes ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);

              echo " <h5 class='card-title '>$row</h5>";
              ?>
              <h5 class="card-title">Demo Classes</h5>
             
            </div>
            
          </div>
        </div>
      </div>
</div>     
          <div class="mt-3">
           
            <div class="">

              <h5 class="card-title">Recent Earnings</h5>
             
              <hr>
                         <?php

              $sql = "SELECT * FROM payment ORDER BY 1 DESC LIMIT 10";
              $result = mysqli_query($link, $sql);
                //echo "$sql";
            
             
             $num12 = $result->num_rows;

             echo "<table class='table'>";
             echo "<tr>
                  <th scope='col'>Tutors</th>
                  <th scope='col'>Student</th>
                  <th scope='col'>Money</th>
                  <th scope='col'>Demo class</th>
                </tr>";

              for ($i=1;$i<=$num12;$i++) { 
                 
                  $row3=mysqli_fetch_array($result);
               
                  echo "
                  
                 <tr>
                  <td>".$row3['tutor']."</td>
                  <td>".$row3['student']."</td>
                  <td>".$row3['payment']."</td>
                  <td>".$row3['demo_class_id']."</td>
                  
                </tr>
                 
                  
                
                ";

                 }
               
              echo "</table>";
              ?>

<hr>
          <div class="mt-3">
           
            <div class="">
              <h5 class="card-title">New Students</h5>
            
              <hr>
                 <?php

              $sql = "SELECT * FROM student ORDER BY 1 DESC LIMIT 10";
              $result = mysqli_query($link, $sql);
                //echo "$sql";
            
             
             $num12 = $result->num_rows;

             echo "<table class='table'>";
             echo "<tr>
                
                  <th scope='col'>Student</th>

                  <th scope='col'>viewprofile</th>
                </tr>";

              for ($i=1;$i<=$num12;$i++) { 
                 
                  $row3=mysqli_fetch_array($result);
               
                  echo "
                  
                 <tr>
                  <td>".$row3['fullname']."</td>
                  <td>
                   <a href='admin_student.php?student={$row3['email']}'>
                   <input type='submit' name='join' value='view' class='btn btn-primary'>
                   </a>
                  </td>
                  
                </tr>
                 
                  
                
                ";

                 }
               
              echo " </table>";
              ?>

            </div>
          </div>
      

</div>      
</head>
</html>



  

<?php
}

  else{
    echo "

    <link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>

      <link rel='stylesheet' type='text/css' href='login/signup.css'>


    <div class='container'>
      <div class='row'>
        <div class='col-md-4 offset-md-4 form-div'>
    
            <div class='form-group' style='display:flex; width:100%; justify-content:center;'>
              ur not an authorised user 
            </div>

                <div class='form-group' style='display:flex; width:100%; justify-content:center;'>
                
                <a href='../login/login.php'>
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

