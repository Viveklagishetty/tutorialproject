
<?php
include("login/login-cre.php");

if ($num2!=0) {
  

?>  



  <?php
        if(isset($_POST['but_upload']))
        {
               $fullname = $_POST['fullname'];
                $mobile = $_POST['mobile'];
                $locality = $_POST['locality'];
                $city = $_POST['city'];
                $course = $_POST['course'];
                $subject = $_POST['subject'];
                $fee = $_POST['fee'];
                $where_teach = $_POST['where_teach'];
                $when_teach = $_POST['when_teach'];


            // Getting file name
            $filename = $_FILES['file']['name'];
           // echo "$filename<br>";
            // Valid extension
            $valid_ext = array('png','jpeg','jpg','jfif');

            // Location
            $location = "profileimages/".$filename;
            //echo "$location<br>";
            // file extension
            $file_extension = pathinfo($location, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);
            //echo "$file_extension<br>";
            // Check extension
            if(in_array($file_extension,$valid_ext))
            {  
                
                 
                $date1=date("l jS \of F Y h:i:s A");
                
                                   
                     
                $path = "$location";

                // Compress Image
                //compressImage($_FILES['file']['tmp_name'],$path,60);
                 //echo "$path<br>"; 
                                    
                     $query="UPDATE  login SET Fullname='$fullname',  mobile_number='$mobile', profile_photo='$path'
                                      where email='$usernames' ";
                                    //echo" $qu2<br>";

                     $re = mysqli_query($link, "$query") or die("<script type='text/javascript'>alert('Unsuccessful - ERROR!'); </script>");

                      // echo"<div class='alert alert-success'>NEWS Added Successfully </div>";
                                  // redirectMsg();

            }
            else
            {
                echo "Invalid file type.";
            }

            if ( $role=='Tutor' ) {

              $tutor="UPDATE tutor SET  Fullname='$fullname', 
               mobile_number='$mobile', 
               profile_photo='$name' , 
               city='$city' 
                locality='$locality',  
               course_teach='$course',
               subject_teach='$subject',
               fee='$fee',
               where_teach='$where_teach',
               whenteach='$when_teach'

              WHERE email='$usernames' ";


              $tutor2=mysqli_query($link, "$tutor") or die("error");
              //echo"<div style='width:100%; background:; text-align:center;  font-size: 17px;'>
              // successfully added your details
                 //</div>";

           }

        }

       

        ?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>driver account</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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

	

 .total{
       <input type=" >dia screen and (max-width:500px){

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

            <nav class="navbar shadow-sm bg-white">



		            <div class="logo ">

		                Auto Hire

		            </div>

                <?php

                 $sql = "SELECT * from login where  email='$usernames'";
                 // echo "$sql";
                 $re12=mysqli_query($link, "$sql") or die("error33");
                 $num12 = $re12->num_rows;
                 $row3=mysqli_fetch_array($re12);

                $image = $row3['profile_photo'];
                $image_src = "$image";

                ?>

	            <div class="menu-container">
                <a href="index.php" style="color: black; text-decoration: none;"><h6 class="mr-3 mt-2">Home</h6></a>
	            	<a href="account.php">
	            		<img src="<?php echo $image_src ?>" alt="Admin" class="rounded-circle " >
	            	</a>

	            </div>

          </nav>
</div>


<div class="container">
	
	<div class="total">

        <?php

          include('login/db_connect.php');
       
         $sql = "SELECT * FROM `tutor` WHERE  email='$usernames' ";

      
           //echo "$sql";

          $re12=mysqli_query($link, "$sql") or die("error33");
          $num12 = $re12->num_rows;
          $row23=mysqli_fetch_array($re12);




         ?>

             
<form method="POST" action="" enctype='multipart/form-data'>     
        <div class="col-sm-12 mt-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-sm-3">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php echo $image_src ?>" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <input type='file' id="file" name='file' hidden />
                              <label for="file" class="btn btn-primary">Upload profile photo</label>
                          
                        </div>
                     </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" name="fullname" class="form-control" value="<?php echo $row23['fullname'] ?>">

                    </div>
                  </div>
                  <hr>
                  
                  
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                       <input type="text" name="mobile" class="form-control"  pattern="[7-9]{1}[0-9]{9}" 
                                 title="Phone number with 7-9 and remaing 9 digit with 0-9" class="form-control input_pass" placeholder="Mobile numbe"
                                  value="<?php echo $row23['mobile'] ?>" >
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">city</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="city" class="form-control"  value="<?php echo $row23['city'] ?>" >
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Locality</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="locality" class="form-control"  value="<?php echo $row23['locality'] ?>" >
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Course teach</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                      <input type="text" name="course" class="form-control"  value="<?php echo $row23['course_teach'] ?>" >
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Subject teach</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                     <input type="text" name="subject" class="form-control"  value="<?php echo $row23['subject_teach'] ?>" >
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Fee</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                      <input type="text" name="fee" class="form-control"
                       value="<?php echo $row23['fee'] ?>" >
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Where you teach:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" name="where_teach" class="form-control"  value="<?php echo $row23['where_teach'] ?>" >
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">When you teach:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    
                      <input placeholder="like evening 6:00pm to 7:00pm" type="text" id="input_starttime" name="when_teach" class="form-control timepicker"  value="<?php echo $row23['whenteach'] ?>" >
                     
                    </div>
                  </div>
                  <hr>

                   <div class="d-flex align-center " >
                    <div class="row">
                      <div class="col-sm-12">
                        <input type='submit' value='Savechanges' name='but_upload' class="btn btn-primary" >
                      </div>
                      <div class="row ml-1 mb-2">
                        <div class="col-sm-12">
                           <a class="btn btn-primary  "  href="change-pass.php">Change Password</a>
                        </div>
                      </div>
                                
                    </div>
                   </div>
                </div>

              </div>
       </div>


      
    </div>

</form>
       
        
  
</div>

 
        
       


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
