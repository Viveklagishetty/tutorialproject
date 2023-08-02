

<?php
include("../login/login-cre.php");

if ($num2!=0) {
	

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

</head>

<body style="background-color: #e2e8f0;">

 	<div class="container">
   <div class="card mt-2">
      


 <?php    


   



 $demo_class = mysqli_real_escape_string($link, $_GET['demo_class']);
        

 $qu12="SELECT * from demo_classes where  id ='$demo_class'";

//echo"$qu12";
$re12=mysqli_query($link, "$qu12") or die("error33");
$num12 = $re12->num_rows;



$row3=mysqli_fetch_array($re12);


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
                <h5>Tutor</h5>
                 <p>Name : &nbsp;&nbsp;".$row3['tutor_name']."<br>
                   Email : ".$row3['tutor']."<br>
                   Mobile number : ".$row3['tutor_mobile']."<br>
                </p>
              </div>
            </div>
              <hr>
              
            </div>
          </div>
            
        </div>

       ";

  
   
 

       ?>

     </div>
    </div>

    

</body>

</html>



<?php
}

	else{
		echo "

		<link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>

			<link rel='stylesheet' type='text/css' href='login/signup.css'>


		<div class='container'>
			<div class='row'>
				<div class='col-md-4 offset-md-4 form-div'>
		
						<div class='form-group' style='display:flex; width:100%; justify-content:center;'>
							ur not an authorised user 
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
























