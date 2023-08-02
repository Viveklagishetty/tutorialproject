<?php
include("login/db_connect.php");
include("login/login-cre.php");


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

  if ($role=='Student') {
   
 

 $qu12="SELECT * from demo_classes where  student ='$usernames' ";

//echo"$qu12";
$re12=mysqli_query($link, "$qu12") or die("error33");
$num12 = $re12->num_rows;

if ($num12 > 1) {
 

for ($i=1;$i<=$num12;$i++) { 
  

$row3=mysqli_fetch_array($re12);




                echo "
        <div class='card-body'>

           <div class='row'>
              <div class='col d-flex flex-row justify-content-between'>

                
                <div class='mb-0 ml-4 d-flex flex-column'>
                  

                  <h6 name='tutor' value='{$row3['tutor']}'>
                  Tutor : {$row3['tutor']}
                   </h6>
                  <h6 name='status' value='{$row3['status']}'>

                  Status : {$row3['status']} 

                  </h6> 
                  <h6 name='tution_place' value='{$row3['where_tution']}'>

                  Where : {$row3['where_tution']}

                  </h6>

                </div>
                <div class='mb-0 mr-4 d-flex align-items-center'>
                  <h5>$date</h5>
                  <hs class='d-none' name='id' value='{$row3['id']}'>{$row3['id']}</h5>
                </div>
               
              </div>

            </div>
             <div class='container mt-2'>
 
             <a href='booking_jion.php?demo_class={$row3['id']}'>
              <input type='submit' name='join' value='view' class='btn btn-primary'>
             </a>
  
            </div>
            <hr>

       
      </div>

       ";

    
 }  

 }else{
   echo "<div><h5> No Data Found </h5> </div>";
 }    

}else if ($role=='Tutor') {

  
   $qu17="SELECT * from demo_classes where  tutor ='$usernames'";

  //echo"$qu12";
$re17=mysqli_query($link, "$qu17") or die("error33");

$num17 = $re17->num_rows;

if ($num12 > 1) {

for ($i=1;$i<=$num17;$i++) { 
  

$row3=mysqli_fetch_array($re17);




                echo "
        <div class='card-body'>

           <div class='row'>
              <div class='col d-flex flex-row justify-content-between'>

                
                <div class='mb-0 ml-4 d-flex flex-column'>
                  

                  <h6 >
                  Student : {$row3['student']}
                   </h6>
                  <h6>

                  Status : {$row3['status']} 

                  </h6> 
                 

                </div>
                <div class='mb-0 mr-4 d-flex align-items-center'>
                  <h5>$date</h5>
                </div>
               
              </div>

            </div>
             <div class='container mt-2'>
 
             <a href='booking_jion.php?demo_class={$row3['id']}'>
              <input type='submit' name='join' value='view' class='btn btn-primary'>
             </a>
  
            </div>
            <hr>

       
      </div>

       ";
 }

}else{
   echo "<div class='mx-2 text-center'><h5> No Data Found </h5> </div>";
 }

}

 

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




















		<!-------------------------------



		