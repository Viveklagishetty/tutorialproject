<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acharya</title>

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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




	<div class="container mt-5 mb-5 d-lg-flex justify-content-center align">
		<div class="contact-info mx-5">
			<div><i class="fa fa-map-marker"></i><h3>Address</h3>
				<p>India, Telangana, Siddipet</p></div>
			<div><i class="fa fa-envelope"></i><h3>@email</h3>
				<p>Acharya@gmail.com</p></div>
			<div><i class="fa fa-phone"></i><h3>phone</h3>
				<p>9000675857</p></div>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://www.google.co.in/"><i class="fa fa-google" aria-hidden="true"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>

		</div>


		<div class="card mx-1" style="width: 25rem;">
			<div class="card-body">
			<h2 class="card-title">Contact Us</h2>

				<form title="contact" action="" method="post">

					<label for="exampleFormControlInput1" class="form-label">Full Name</label>
				  	<input type="text" class="form-control" name="fullname">

					<label for="exampleFormControlInput1" class="form-label">Email address</label>
				  	<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

					 <label for="exampleFormControlTextarea1" class="form-label">Enter your problem</label>
				  	<textarea class="form-control" id="exampleFormControlTextarea1" name="review" rows="3"></textarea>
					<div class="text-center">	
						<input type="submit" name="submit" class="btn btn-primary mt-3 text-center" value="send" style="width: 7rem;">
					</div>		
				</form>
			</div>
		</div>
	</div>


<?php

if (isset($_POST['submit'])) {

            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $review=$row3['review'];


           $check="insert into  web_review(fullname,email,review_para)

             values('$fullname','$email','$review')";
             
            

            $re=mysqli_query($link, "$check") or die("error");
            echo"  <script type='text/javascript'> alert('problem has been succesfully added') </script>";

       


}


?>


<?php
include("footer.php");

?>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>	
</body>




 