<?php
include("login/login-cre.php");

if ($num2!=0) {
  

?>  


<!------

$s=mysql_query("UPDATE tbl_staffs SET username='$username', password='$password' WHERE username='$VALID_USER");



$username = $_POST['username'];

$password = $_POST['password'];

 $query = "update login set profile_photo='".$name."'
         where email='".$_POST['usernames'];
         if () {
echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); </script>";
        }else{
          echo "<script type='text/javascript'>alert('successful'); </script>";


        }
----->
       
  <?php
        if(isset($_POST['but_upload']))
        {
              $fullname = $_POST['fullname'];
            
              $mobile = $_POST['mobile'];
              $gender = $_POST['gender'];

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
                                    
                                    $qu2="UPDATE  login SET Fullname='$fullname',  mobile_number='$mobile', profile_photo='$path'
                                        where email='$usernames'";
                                    //echo" $qu2<br>";

                                    $re2=mysqli_query($link, "$qu2") or die("error");
                                    //echo"<div class='alert alert-success'>NEWS Added Successfully </div>";
                                   //redirectMsg();

            }
            else
            {
                echo "<script> alert('Invalid file type') </script>";
            }


          if ($role=='Student') {
              $student="UPDATE student SET  Fullname='$fullname',  mobile_number='$mobile', profile_photo='$name', gender='$gender' WHERE email='$usernames' ";

              $result=mysqli_query($link, "$student") OR die("error occured");

              //echo"<script type='text/javascript'>alert('successful');</script>";
          }
        }

       

        ?>


<?php

 $sql = "SELECT * from login where  email='$usernames'";
 // echo "$sql";
 $re12=mysqli_query($link, "$sql") or die("error33");
 $num12 = $re12->num_rows;
 $row3=mysqli_fetch_array($re12);

$image = $row3['profile_photo'];
$image_src = "$image";

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

    <link rel="stylesheet" type="text/css" href="profile.css">

    <style type="text/css">
      .favourate {
  display: none;

 
        }
 

@media only screen and (max-device-width: 1000px) {

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
      <div class="total">
       
 <form method="POST" action="" enctype='multipart/form-data'>
                <div class="card mb-3 mt-3">
                  <div class="card-body d-lg-flex justify-content-around">
                   

                   


                        <div class="d-flex flex-column align-items-center text-center">
                          <img src="<?php echo $image_src ?>" alt="Admin" class="rounded-circle" width="150">
                          <div class="form-group mt-5 ml-1">
                              <input type='file' id="file" name='file' hidden />
                              <label for="file" class="btn-sm btn-primary">Upload profile photo</label>

                               
                          </div>
                        </div>
                      

                      <div class="col mt-3">
                       <div class="card mb-3">
                        <div class="card-body ">
                        

                            <div class="row">
                              
                                <h6 class="mb-0">Full Name</h6>
                              <br>
                               <input type="text" name="fullname" class="form-control" value="<?php echo $row3['fullname'] ?>">

                              
                            </div>
                            <hr>


                            <div class="row">
                            
                                <h6 class="mb-0">Mobile</h6>
                                <br>
                                <input type="text" name="mobile" class="form-control"  pattern="[7-9]{1}[0-9]{9}" 
                                 title="Phone number with 7-9 and remaing 9 digit with 0-9" class="form-control input_pass" placeholder="Mobile numbe"
                                value="<?php echo $row3['mobile_number'] ?>" >
                              
                            </div>
                            <hr>
                          
                          
                          <div class="d-lg-flex align-center " >
                            <div class="row ml-1 mb-2">
                              <div class="col-sm-12">
                               <input type='submit' name='but_upload' class="btn btn-primary"  value='Savechanges'>
                              </div>
                              
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
    </div>


         
                  
 
 



  </body>






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
