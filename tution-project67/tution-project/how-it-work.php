<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>How it work</title>
	

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">	

	<link rel="stylesheet" type="text/css" href=".css">
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


	<button class="tablink btn btn-light mt-3 mx-1 btn-lg"  onclick="openPage('Student', this, )">Student</button>
	<button class="tablink btn btn-light mt-3  mx-1 btn-lg" onclick="openPage('Tutors', this, )" id="defaultOpen">Tutors</button><hr>


<div id="Student" class="tabcontent">
  <h2 class="text-center">How it works for Student</h2>

	<div class="card">
		  	<div class="img-container2">
		  		<img src="tution.jpg" class="card-img-top d-none d-lg-block">
			</div>
			<div class="text-center">
		  		<input type="submit" name="" class=" btn btn-primary" value="Get Free Demo Class!">
		  	</div>

		  <div class="card-body">

		  <ul>
		  	<h4 class="card-title">1 Register</h4>
		  	<li class="card-text">Please register on our site Join as a Tutor - Free</li>
		  	<li class="card-text">You can register as a free member or a premium members. Premium members can see the details of tutors immediately on the site where as free members can only see the tuition details. For contacting student/parent they need to upgrade to our premium membership if they want to take up that tuition.</li>
		  </ul>
		  <ul>
		  	<h4 class="card-title">2
				Search for Tutor</h4>
		  	<li class="card-text">After registering and confirming your email and phone number then you can search for tutors available in our site and can select the tutor you like.</li>
		  	<li class="card-text">If you are a premium member then you can contact the tutor immediately and then ask for a demo session.</li>
		  	<li class="card-text">If you like the demo session and the tutor then you can negotiate the price with the tutor and can arrange the tuition.</li>
		  	<li class="card-text">It is your responsibility to validate the credentials of the tutor before you agree for the tuition.</li>
		  </ul>
		  <ul>
		  	<h4  class="card-title">3
				Excel in Studies</h4>
				<li class="card-text">You can monitor the tuition at your home regularly and can give us the feedback on the tutor so that you can help other students/parents in selecting the best tutors for their tuition.</li>
				<li class="card-text">Having a private tutor mentor the student is known to give very good results and you can check the performance yourself.</li>
		  </ul>
		</div>
			<div class="text-center">
		  		<input type="submit" name="" class="btn btn-primary" value="Find Best Tutors Now!">
		  	</div>
	</div>

</div>





<div id="Tutors" class="tabcontent">

  <h2 class="text-center">How it works for Tutors</h2>
  	
	<div class="card">
		  	<div class="img-container2">
		  		<img src="tution.jpg" class="card-img-top d-none d-lg-block">
			</div>
			<div class="text-center">
		  		<input type="submit" name="" class=" btn btn-primary" value="Join As A Tutor-Free!">
		  	</div>

		  <div class="card-body">
		  	
		  	<ul>
		  		<h4 class="card-title">1 Register</h4>
		  		<li class="card-text">Please register on our site Join as a Tutor - Free</li>
		  		<li class="card-text">You can register as a free member or a premium members. Premium members can see the details of tuition needs posted by our students immediately on the site where as free members need to send a message to the student who posted the tuition through our site and wait for the response.</li>
		  	</ul>
		  	<ul>
		  		<h4 class="card-title">2 search for Tuition</h4>
		  		<li  class="card-text">After registering and confirming your email and phone number then you can search for tuitions available in our site and can select the tuition you like.</li>
		  		<li class="card-text">If you are a premium member then you can contact the student/parent who posted the tuition immediately and then give a demo session.</li>
		  		<li class="card-text">If the parent/student likes the demo and is willing join the tuition then you can ask the parent/student to deposit the first month tuition fee with us to ensure you get paid without any issues at the end of the month.</li>
		  	</ul>
		  	<ul>
		  		<h4 class="card-title">3 Earn Money</h4>
		  		<li class="card-text">You can earn money for your work and need not depend on your parents/guardians for financial support.</li>
		  	</ul>
		  </div>
		  <div class="text-center">
		  <input type="submit" name="" class="btn-lg btn-primary mb-3" value="Find Home Tuitions/Online Tuitions">
		  </div>
	</div>
</div>

<?php
include("footer.php");

?>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>						

</body>
</html>













