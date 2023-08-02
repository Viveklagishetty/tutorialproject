 <?php
include("login/login-cre.php");

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

			  <?php

			  include 'login/login-cre.php';
			  $sql = "SELECT * FROM `reviews` WHERE  tutor='$usernames'  ";

					      
			//echo "$sql";

			$re12=mysqli_query($link, "$sql") or die("error33");
			$num12 = $re12->num_rows;
			$row4=mysqli_fetch_array($re12);
			


			
			if ($num12 > 0) {
				# code...
			
			 for ($i=2;$i<=$num12;$i++) {		          
			$row4=mysqli_fetch_array($re12);


			echo "
				<div class='container-fluid px-0 py-3 mx-auto'>
				    <div class='row justify-content-center mx-0 mx-md-auto'>
				        <div class='col-lg-10 col-md-11 px-1 px-sm-2'>
				            <div class='card border px-3'>
				                <!-- top row -->
				              
				                <div class='review p-2'>
				                    <div class='row d-flex'>
				                       

				                        <div class='d-flex flex-column pl-1'>
				                          
				                            <h6>".$row4['student']."</h6>
				                            <p class='grey-text'>".$row4['date']."</p>
				                        </div>
				                    </div>
				                    <div class='row pb-3'>
				                        <h5>".$row4['stars']." star rating given</h5>
				                        
				                    </div>
				                    <div class='row pb-3'>
				                        <p>".$row4['review_para']."</p>
				                    </div>
				                   
				                </div>
				            </div>
				        </div>
				    </div>
				</div>";

			}


			}else{

				echo "no reviews found";
			}

			?>








			

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
