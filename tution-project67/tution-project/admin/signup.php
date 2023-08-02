
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="signup.css">

	<style type="text/css">
		body{
			font-size: 14px;
			overflow-x: hidden;
		}
	</style>
</head>
<body>

		
		<div class="container ">
		  <div class="col d-flex justify-content-center">
			<div class="card mt-4" style="width: 23rem;">
				<div class="card-body">

					<form class="signup.php" method="post">
						<h3 class="text-center">Register</h3>
						

						<div class="form-group">
							
							<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="Fullname" class="form-control input_user" placeholder="Fullname" required>
						</div>
						</div>

						<div class="form-group">
							
							<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-envelope"></i></span>
									</div>
									<input type="email" name="email" class="form-control input_pass" placeholder="Email" >
							</div>
						</div>

						<div class="form-group">
							
							<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-envelope"></i></span>
									</div>
									
									<input type="tel" name="mobile" pattern="[7-9]{1}[0-9]{9}" 
       								title="Phone number with 7-9 and remaing 9 digit with 0-9" class="form-control input_pass" placeholder="Mobile number">
							</div>
						</div>


						<div class="form-group">
							
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-lock"></i></span>
									</div>
									<input type="password" name="password" id="password" class="form-control input_pass"  
									placeholder="password">
								</div>
							
							<input type="checkbox" name="Showpass" onclick="myFunction()">
							<label for="Showpass">Show Password</label>

						</div>
					
						<div class="form-group">
						<label for="gender">Gender</label>
		                  <br>
		                  <div>
		                  <input type="radio" name="gender" class="mx-2 form-check-input" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Male
		                  </div>
		                  <div>
		                  <input type="radio" name="gender" class="mx-2 form-check-input" value="female">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female
		                  </div>
		                  <div>
		                  <input type="radio" name="gender" class="mx-2 form-check-input" value="others">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others<br>
		                  </div>
		                 </div>
		             


						

						

						<div class="form-group">
							<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
						</div>
						<p class="text-center">Already a member?<a href="login.php"> Sign In</a></p>
					</form>
					
				</div>
			</div>
		  </div>
		</div>



 <?php
          include('../login/db_connect.php');

    
          
        if(isset($_POST["signup-btn"]))

          {
              
            $Fullname=$_POST['Fullname'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $gender=$_POST['gender'];
            $password=$_POST['password'];
            $passcode=md5($password);


           $file = 'profileimages/default-image.png';

           $check="SELECT * FROM login WHERE email='$email' AND mobile_number='$mobile' ";
           
           $result=mysqli_query($link, "$check") or die('error');

           $num22 = $result->num_rows;

           //echo "$check";

           if ($num22 > 0) {
           	echo "
           	 	<div class='text-center mt-2'>
	        	 This email has been already exist please 
           			<a href='login.php'>login</a>
	          </div>
           	";

           }else{


	          $login="insert into login(Fullname,email,password,passcode,role,mobile_number,profile_photo,gender	)




	           values('$Fullname', '$email', '$password', 

	           '$passcode','admin','$mobile','$file','$gender')";
	           
	          

	          $re=mysqli_query($link, "$login") or die("error");
	          echo"<script type='text/javascript'>  window.location='../login/login.php'; </script>";

	          

	          if ( $role=='Tutor' ) {

	        	  $tutor="insert into tutor(Fullname,email,mobile,gender)
	          				 values('$Fullname','$email', '$mobile','$gender')";

	        	  $tutor2=mysqli_query($link, "$tutor") or die("error");
	        	  echo"<div style='width:100%; background:; text-align:center;  font-size: 17px;'>
	         		 successfully added your details
	          		 </div>";

	          }elseif ($role=='Student') {
	          		$student="INSERT INTO  student(fullname,email,mobile_number,gender)
	          				 values('$Fullname','$email','$mobile',
	          				 '$gender')";
	          		$result=mysqli_query($link, "$student") OR die("error occured");
					 
	          }

           }
                       
    
  

            
          }

          
 ?>

  		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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

