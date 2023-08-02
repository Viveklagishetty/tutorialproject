
<?php
error_reporting(0);
session_start();
include("db_connect.php");
extract($_POST);
if(isset($submit))
{
$pass1=md5($passcode);
$qu2="select * from login where (email='".$email."' )  and passcode='".$pass1."'";
//echo"$qu2";
$re2=mysqli_query($link, "$qu2") or die("error");
$num = $re2->num_rows;
$row3=mysqli_fetch_array($re2);
$role=$row3['role'];
  if($num < 1)
  {
    $found="Invalid!";
    $found1="Username or Password";
  }
  else
  {
    $_SESSION[login]=$email;
    $_SESSION[password]=$pass1;
      if($_POST["remember_me"]=='1')
                        {
                     $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $loginid, $hour);
                        setcookie('password', $pass1, $hour);
                        }

      
  }
}

  

if (isset($_SESSION[login]))
{	
	if ( $role=='Tutor' ) {
		
	  $email=$_POST['email'];
      
      include 'login/db_connect.php';

      $qu22="select * from tutor  where email='$email' and status_form='filled' ";

      echo"$qu22";
      $re22=mysqli_query($link, "$qu22") or die("error33");
      $num22 = $re22->num_rows;
      $row3=mysqli_fetch_array($re22);
        
      if ($num22!=0) {
       echo "<script type='text/javascript'>  window.location='../home-page.php'; </script>";
      }else{

       echo"<script type='text/javascript'>  window.location='../tutor-profile.php'; </script>";
      }


 
}else{
   echo "<script type='text/javascript'>  window.location='../home-page.php'; </script>";
}
}
/*
include('header.php');


$qu14="select * from admin_details where id=1";
$re14=mysqli_query($mysqli_conn, "$qu14") or die("error");
$num14 = $re14->num_rows;
$row14=mysqli_fetch_array($re14);
echo"<title>{$row14['title']}</title>";











<?php

                if($found!='')
                {
                ?>  
                
                <div class='alert alert-danger'><?php echo"$found $found1"; ?></div>
                <?php
              }
              ?>

*/

?> 









			
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: 60a3bc !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			border:1px solid #80ced7;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
		
			border-radius: 5px;

		}
		
		
		.form_container {
			margin-top: 20px;
		}
		.login_btn {
			width: 100%;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #03A9F4!important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}    </style>

	<div class="container h-100">

		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<h3 class="text-center">LOGIN</h3>
				<?php
				echo"<div class='input-group mt-3 mr-4' style=' width:100%;  text-align: center; display: flex;
				justify-content: center; color:orangered;'> $found $found1 </div>";

				?>
				<div class="d-flex justify-content-center form_container">
				    
					<form action='' method='post'>
					    	
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" required placeholder="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="passcode" class="form-control input_pass" id="password" placeholder="password" required>


						</div>
						<div class="input">
							<input type="checkbox" name="Showpass" onclick="myFunction()">
							<label for="Showpass">Show Password</label>
						</div>

							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input  type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value='Login'>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="signup.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="forgot_password.php">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	<script type="text/javascript">
          	function myFunction() {
				  var showpass = document.getElementById("password");
				  if (showpass.type === "password") {
				    showpass.type = "text";
				  } else {
				    showpass.type = "password";
				  }
				}
         
	</script>
</body>
</html>
