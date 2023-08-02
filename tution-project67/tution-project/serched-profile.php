<style type="text/css">
	


</style>




<?php
include("login/login-cre.php");

if ($num2!=0) {
  include("header.php");
}else{
  include("headerlogout.php");
}

?>  



          <?php

          include('login/db_connect.php');
         $email1 = mysqli_real_escape_string($link, $_GET['email']);
         $fullname = mysqli_real_escape_string($link, $_GET['fullname']);
         $date = mysqli_real_escape_string($link, $_GET['date']);


         $sql = "SELECT * FROM `tutor` WHERE email='$email1' AND fullname='$fullname'  ";

      
           //echo "$sql";

          $re12=mysqli_query($link, "$sql") or die("error33");
          $num12 = $re12->num_rows;
	      $row3=mysqli_fetch_array($re12);




         ?>

 <div class="container mt-3">
 	
 	<div class="card border">
 	  <div class="card-body">
 		
 		<div class="">
 		 <div class=" d-lg-flex align-items-center justify-content-between">
 		 	<div  class=" d-lg-flex align-items-center">
				<div class=" mb-3">
	 		  	<img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img " alt="..." style="width: 110px; height: 130px;">

	 		  	<div class='mx-2'>
                  <h4 class='mt-2'><?php
                   echo "<h6>".$row3['fullname']."</h6>";  
                   ?></h4>
                  
                </div>

	 		  	</div>
	 		  	<?php
	 		  	echo "
	 		  	 <div class='mx-2 mb-0 mt-0'>
	 		    	<p>Gender : &nbsp;&nbsp;".$row3['gender']."<br>
	 		    	Age :&nbsp;&nbsp;".$row3['age']."<br>
	 		    	Experience : &nbsp;&nbsp;".$row3['experience']."<br>
	 		    	Qualification : &nbsp;&nbsp;".$row3['qualification']."<br>
	 		    	Prefered : timing &nbsp;&nbsp;".$row3['whenteach']."<br>
	 		    	locality :&nbsp;&nbsp;".$row3['city'].",".$row3['locality']."</p>
	 		     </div>
	 		     ";
	 		     ?>	
 		    </div>

 		    
 		    
<?php
if ($num2!=0) {
  

?> 				<?php
	 		  	echo "
 		      <div class='border px-3'>
 		    	<h5>Contact info</h5>
 		    	<p>Email : ".$row3['email']."<br>
	 		 	Mobile number : ".$row3['mobile']."<br>
	 		    
 		     </div>
 		      ";
	 		     ?>	

<?php
}

  else{
    echo "

    <link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>



    		<div class='d-flex text-center flex-column border px-3'>
              please login to open webpage
                
                <a href='login/login.php'>
                  <button type='button' class='btn btn-primary btn-lg mt-3 mb-2' >
                    login
                  </button>
                </a>
            </div>
       


    
    ";
  }
 	?>	


 		 </div>
 		 <div class="form-group">

 		 	<!---request for a demo class ---->
 		 				
						      <?php


 		 					if (isset($_POST['demo'])) {
 		 						$fee=mysqli_real_escape_string($link, $row3['fee']);
 		 						$where_teach=mysqli_real_escape_string($link, $row3['where_teach']);
 		 						$tutor=mysqli_real_escape_string($link, $row3['email']);
 		 						$fullname_tut=mysqli_real_escape_string($link, $row3['fullname']);
 		 						$mobile_tut=mysqli_real_escape_string($link, $row3['mobile']);

 		 						include("login/login-cre.php");

 		 						$subject=$_POST['subject'];

 		 	$sql = "SELECT count(*) dd from demo_classes where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);
              $noclasses=$row['dd'];
              $sql="UPDATE tutor SET demo_class='$noclasses' where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);


            


 		 						$sql12="INSERT INTO demo_classes
 		 						(student,
 		 						student_name,
 		 						student_mobile,
 		 						tutor,
 		 						tutor_name,
 		 						tutor_mobile,
 		 						subject,
 		 						where_tution,	
 		 						status,	
 		 						fee) 

 		 						values('$usernames',
 		 						'$fullname',
 		 						'$mobile',
 		 						'$tutor',
 		 						'$fullname_tut',
 		 						'$mobile_tut',
 		 						'$subject',
 		 						'$where_teach',
 		 						'requested_to_demo',
 		 						'$fee') ";

 		 						$result12=mysqli_query($link, "$sql12") or die('error');
 		 						echo "<script type='text/javascript'>alert('Demo class request succes fully added please wait for tutor call');</script>";

 		 							
 		 if ($result12) {
 		 							  
 		 	$sql = "SELECT count(*) dd from demo_classes where student='$usernames' ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);
              $noclasses=$row['dd'];
              $sql="UPDATE student SET demo_class_booked='$noclasses' where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);
 		 }  
     
 		 					}

 		 					 ?>
 		 			<!----allowing for only on demo class----->


 		 					  <?php
 		 					 

                           if ($num2!=0) {
                            

 		 				  		 				 	//echo "$tutor";
					         $sql = "SELECT * FROM `demo_classes` WHERE student='$usernames' AND tutor='$email1'  ";

					      
					           //echo "$sql";

					          $re12=mysqli_query($link, "$sql") or die("error33");
					          $num12 = $re12->num_rows;
					          //echo "$num12";
						      $row3=mysqli_fetch_array($re12);

						      	if ($num12!=0) {
						      		echo "your demo classes request is done";
						      	}else {
						      		echo "<div class=''>
                              <form method='POST'>
                                <div class='search'>

                                  <input type='text' class='form-control' placeholder='Enter subject for demo' name='subject'>

                                <input type='submit' class='button btn-sm btn-primary' 
                                value='Free demo' name='demo'>
                                   

                                </div>
                              </form>
                    		</div>";
						      	}

						      }else{
						      		echo " <h5><div>please login to get demo</div></h5>";
                            
						      	}

						      
						      ?>
 		 	   				
 		 	    
 		 </div>
 		 
 		</div>

 		<div class="card border mt-3">
 		  <div class="card-body">
 		  	<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">About </button>
			    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Review</button>
			 
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

			  	 <?php

          include('login/db_connect.php');
         $email1 = mysqli_real_escape_string($link, $_GET['email']);
         $fullname = mysqli_real_escape_string($link, $_GET['fullname']);
         $date = mysqli_real_escape_string($link, $_GET['date']);


         $sql = "SELECT * FROM `tutor` WHERE email='$email1' AND fullname='$fullname'  ";

      
           //echo "$sql";

          $re12=mysqli_query($link, "$sql") or die("error33");
          $num12 = $re12->num_rows;
	      $row3=mysqli_fetch_array($re12);




         ?>
         
			  	<?php
	 		  	echo "
				  <div class='mt-4'>
				  <h5>About Me</h5>	
				  <p>
				  	".$row3['about']."
				  </p>
				  <hr>

				  <h5>Subjects</h5>	
				  <p>
				  ".$row3['subject_teach']."
				  </p>
				  <hr>

				   <h5>course</h5>	
				  <p>
					".$row3['course_teach']."
				  </p>
				  <hr>


				  <h5>Tution fee</h5>	
				  <p>
				  	".$row3['fee']."
				  </p>
				  <hr>

				  <h5>Tute at</h5>	
				  <p>
				  	".$row3['where_teach']."
				  </p>
				  <hr>

				  </div>
				   ";
	 		     ?>	
			  </div>


			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  <!-------star rating out put------>


			  <?php

			  $tutor=$row3['email'];
			  $sql = "SELECT * FROM `reviews` WHERE  tutor='$tutor'  ";

					      
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
	<!-----------end of rating---------->

			  </div>
			</div>
 		  </div>
 		</div>
 	</div>

 </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>