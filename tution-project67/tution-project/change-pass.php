    	



			
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







		 <?php
    			 	include("login/db_connect.php");
    			 	include("login/login-cre.php");

    		$submit=$_POST['submit'];
            if(isset($submit))
			{

			$pass1=md5($_POST['passcode']);
			$qu2="select * from login where (email='$usernames') and passcode='".$pass1."'";
			//echo"$qu2";
			$re2=mysqli_query($link, "$qu2") or die("error");
			$num2 = $re2->num_rows;
			$row3=mysqli_fetch_array($re2);
			$role=$row3['role'];

			 if($num2 < 1)
			  {
			    $found="Invalid!";
			    $found1="Password";
			  }else{
			  	echo "<script type='text/javascript'>  window.location='save-password.php'; </script>";
			  }
			


			}

                    ?>





	<div class="container h-100">

		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<h4 class="text-center">Change pass word</h4>
				<p class="text-muted text-center">please enter previous password</p>
				<?php
					if($num2 == 0)
					  {
					    echo "<div class='input-group mt-3 mr-4' style=' width:100%;  text-align: center; display: flex;justify-content: center; color:orangered;'> 

							Invalid! Password
						   </div>";
					  }

				//echo"<div class='input-group mt-3 mr-4' style=' width:100%;  text-align: center; display: flex;
				//justify-content: center; color:orangered;'> $found $found1 </div>";

				?>
				<div class="d-flex justify-content-center form_container">
				    
					<form action='' method='POST'>
					   
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
				 	<input  type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value='Enter'>
				   </div>
					</form>
				</div>
		
				
			</div>
		</div>
	</div>
