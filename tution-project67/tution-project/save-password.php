<<?php 


include("login/login-cre.php");

if ($num2!=0) {
  



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
				<h4 class="text-center">Change password</h4>
				<p class="text-muted text-center">please enter new password</p>
		
				<div class="d-flex justify-content-center form_container">
				    
					<form action='' method='POST'>
					   
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" id="password" placeholder="password" required>


						</div>
						<div class="input">
							<input type="checkbox" name="Showpass" onclick="myFunction()">
							<label for="Showpass">Show Password</label>
						</div>

							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input  type="submit" name="change-pass" class="btn btn-primary btn-block btn-lg" value='Enter'>
				   </div>
					</form>
				</div>
		
				
			</div>
		</div>
	</div>


	<?php
		//password change page

			include("login/db_connect.php");
    		include("login/login-cre.php");

    		$change_pass=$_POST['change-pass'];

            if(isset($change_pass))
			{

			$password=$_POST['password'];
			$passcode=md5($password);

	        $qu2="  update login set password='$password', passcode='$passcode' where email='$usernames' ";

			//echo"$qu2";
			$re2=mysqli_query($link, "$qu2") or die("error");
			//echo "string";
			if ($re2) {

				session_destroy();
				header("location:../home-page.php");
				exit;
			}
			if ($re2) {
				echo "<script type='text/javascript'>  window.location='home-page.php'; </script>";
			}

		}
		

                  	  
?>


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
