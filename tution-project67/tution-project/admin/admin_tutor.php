<?php
 include("../login/login-cre.php");

if ($num2!=0) {
  

?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>driver account</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style type="text/css">
     body{
        background-color: #e2e8f0;
      }

    body::-webkit-scrollbar{
     width: 8px;
     background: #c6c6c6;

    }



    body::-webkit-scrollbar-thumb {
     background: #474747;
    }

        
.total-container{
  display: flex;
}

 .total{
        display: flex;
        flex-direction: row;
      }

@media screen and (max-width:500px){

.total{
  display: flex;
  flex-direction: column;
}

}



.navbar{
  width: 100%;
  display: flex;
  align-items: center;
}

.logo{
  margin: 10px;
  font-size: 20px;
}

.menu-container{
  display: flex;
}


.menu-container img{
  width: 40px;
  height: 40px;
  margin-right: 10px;
  border:0.3px solid black;
} 


.favourate{
  display: none;
  cursor: pointer;
}
   
.show{
   display: block;
}

.show2{

transform: rotate(180deg);

 transition-duration: 0.1s ease-in-all;
}
    </style>
  </style>
</head>
<body>
<div class="total-container">

</div>


  

         <?php
         $tutor = mysqli_real_escape_string($link, $_GET['tutor']);

           $sql = "SELECT profile_photo from login where  email='$tutor'";
           // echo "$sql";
           $re12=mysqli_query($link, "$sql") or die("error33");
           $num12 = $re12->num_rows;
           $row3=mysqli_fetch_array($re12);

          $image = $row3['profile_photo'];
          $image_src = "$image";

          ?>

 <div class="container mt-3">
  
  <div class="card border">
    <div class="card-body">
    
    <div class="card border">
     <div class="card-body d-lg-flex align-items-center justify-content-between">
      <div  class=" d-lg-flex align-items-center">
        <div class=" mb-3">
          <img src="<?php echo $image_src ?>" class="card-img " alt="..." style="width: 110px; height: 130px;">
            

          <?php

          include('login/db_connect.php');
            $tutor = mysqli_real_escape_string($link, $_GET['tutor']);
       
         $sql = "SELECT * FROM `tutor` WHERE  email='$tutor' ";

      
           //echo "$sql";

          $re12=mysqli_query($link, "$sql") or die("error33");
          $num12 = $re12->num_rows;
          $row3=mysqli_fetch_array($re12);




         ?>
          <div class='mx-2'>
                  <h4 class='mt-2'><?php
                   echo "<h6>".$row3['fullname']."</h6>";  
                   ?></h4>
                  
                </div>

          </div>
          <?php
          echo "
           <div class='mx-2 mb-0 mt-0'>
            <p>Gender : &nbsp;&nbsp;".$row3['gender']."<br>
            Age :&nbsp;&nbsp;".$row3['age']."<br>
            Experience : &nbsp;&nbsp;".$row3['experience']."<br>
            Qualification : &nbsp;&nbsp;".$row3['qualification']."<br>
            Prefered : timing &nbsp;&nbsp;".$row3['whenteach']."<br>
            locality :&nbsp;&nbsp;".$row3['city'].",".$row3['locality']."</p>
           </div>
           ";
           ?> 
        </div>

        
        
<?php
if ($num2!=0) {
  

?>        <?php
          echo "
          <div class='border px-3'>
          <h5>Contact info</h5>
          <p>Email : ".$row3['email']."<br>
        Mobile number : ".$row3['mobile']."<br>
          
         </div>
          ";
           ?> 

<?php
}

  else{
    echo "

    <link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>



        <div class='d-flex text-center flex-column border px-3'>
              please login to open webpage
                
                <a href='login/login.php'>
                  <button type='button' class='btn btn-primary btn-lg mt-3 mb-2' >
                    login
                  </button>
                </a>
            </div>
       


    
    ";
  }
  ?>  


     </div>
    
        
    </div>

    <div class="card border">
      <div class="card-body">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">About </button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Review</button>
       
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <?php
          echo "
          <div class='mt-4'>
          <h5>About Me</h5> 
          <p>
            ".$row3['about']."
          </p>
          <hr>

          <h5>Subjects</h5> 
          <p>
          ".$row3['subject_teach']."
          </p>
          <hr>

           <h5>course</h5>  
          <p>
          ".$row3['course_teach']."
          </p>
          <hr>


          <h5>Tution fee</h5> 
          <p>
            ".$row3['fee']."
          </p>
          <hr>

          <h5>Tute at</h5>  
          <p>
            ".$row3['whenteach']."
          </p>
          <hr>

          </div>
           ";
           ?> 
        </div>


        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          rev
        </div>

      </div>
      </div>
    </div>
  </div>

 </div>



</div>




     <div class="container">
        <div class="card bg-white">
          <div class="card-body">

            <div class="row">
              <a href="Demo.php" style="color: black; text-decoration: none; width:100%; ">
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
                        $tutor = mysqli_real_escape_string($link, $_GET['tutor']);

                       $qu22="SELECT * from students_joined where   tutor='$tutor' ";

                    //echo"$qu22";
                    $re22=mysqli_query($link, "$qu22") or die("error33");
                    $num22 = $re22->num_rows;

                  
for ($i=1;$i<=$num22;$i++) { 
  

$row3=mysqli_fetch_array($re22);




                echo "
        <div class='container'>
          <div class='card mt-3' >
            
            <div class='card-body '>
            
            <div class='d-lg-flex justify-content-between align-items-center'>
              <div class=' mx-3 '>
              
                 <p>
                  Name : &nbsp;&nbsp;".$row3['tutor_name']."<br>

                  Subject : &nbsp;&nbsp;".$row3['subject']."<br>

                  tute at : &nbsp;&nbsp;".$row3['where_tution']."<br>

                  status :  &nbsp;&nbsp;".$row3['status']."<br>

                  fee :&nbsp;&nbsp;".$row3['fee']."</p>



              </div>
            
              <div class='border px-3'>
                <h5>Contact info</h5>
                <p>Email : ".$row3['tutor']."<br>
                 Mobile number : ".$row3['tutor_mobile']."<br>
                </p>
              </div>
            </div>
              <hr>
              
            </div>
          </div>
            
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>





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
