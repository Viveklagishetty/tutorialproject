<?php
include("login/db_connect.php");
include("login/login-cre.php");


?>

<?php
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
                <h5>Contact info</h5>
                <p>Email : ".$row3['tutor']."<br>
                 Mobile number : ".$row3['tutor_mobile']."<br>
                </p>
              </div>
            </div>
              <hr>
              
            </div>
          </div>
            
        </div>

       ";

//buttons for jion or declaine
if ($role=='admin') {
       
}else{



       if ($row3['status']=='requested_to_demo') {

         echo "<div class='container mx-4 mb-4'> <h6>your requested to demo class</h6> </div>";

       }else if ($row3['status']=='demo_rejected') {
        
        echo "tutor rejected your requested to demo";

       }else if ($row3['status']=='demo_accepted') {
        
        echo "tutor accepted your request to demo. wait for call of tutor";

       }else if ($row3['status']=='demo_ended') {
        
        echo "<div class='container mt-2'>
              <form method='POST'>
              <input type='submit' name='requested_jion' value='request jion' class='btn btn-primary'>

              <input type='submit' name='student_rejected' value='decline' class='btn btn-danger'>

          

              </form>
              </div>";

       }else if ($row3['status']=='requested_jion') {
        
        echo "<div class='d-flex'>
                <div class='container mx-4 mb-4'> 
                <h6>your requested to jion class</h6>
                </div> 
             
              </div>

              

          ";

       }else if ($row3['status']=='student_rejected') {
        
        echo "

              <div class='d-flex'>
              student rejected  
            
              </div>
";

       }else if ($row3['status']=='tutor_rejected') {
        
        echo "<div class='d-flex'>
              tutor rejected  
            
              </div>
";

       }
       else if ($row3['status']=='jioned') {
        
        echo "
        <div class='d-flex'>
            <div class='container mx-4 mb-4'> 
              <h6>your jioned in this tution</h6> 
             </div>
          
        </div>
";

       }


}
       
       
   
         
//to update democlasses status to jion

     if (isset($_POST['requested_jion']) ) {

        $tutor=$row3['tutor'];  
        $tution_place=$row3['where_tution'];
       
      $query_jion="UPDATE demo_classes SET status='requested_jion' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('successfully joined'); </script>";

      

      
    }

    //to update democlasses status to decline
     if (isset($_POST['student_rejected'])) {

     $query_jion="UPDATE demo_classes SET status='student_rejected' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('declined'); </script>";
      if ($result_jion) {
       
      }
      
    }


    ?>

      
    <style type="text/css">
      @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);


fieldset,
label {
    margin: 0;
    padding: 0
}

body {
    margin: 20px
}

h1 {
    font-size: 1.5em;
    margin: 10px
}

.rating {
    border: none;
    margin-right: 49px
}

.myratings {
    font-size: 85px;
    color: green
}

.rating>[id^="star"] {
    display: none
}

.rating>label:before {
    margin: 5px;
    font-size: 2.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005"
}

.rating>.half:before {
    content: "\f089";
    position: absolute
}

.rating>label {
    color: #ddd;
    float: right
}

.rating>[id^="star"]:checked~label,
.rating:not(:checked)>label:hover,
.rating:not(:checked)>label:hover~label {
    color: #FFD700
}

.rating>[id^="star"]:checked+label:hover,
.rating>[id^="star"]:checked~label:hover,
.rating>label:hover~[id^="star"]:checked~label,
.rating>[id^="star"]:checked~label:hover~label {
    color: #FFED85
}

.reset-option {
    display: none
}

.reset-button {
    margin: 6px 12px;
    background-color: rgb(255, 255, 255);
    text-transform: uppercase
}

.mt-100 {
    margin-top: 00px
}

.mxi {
    position: relative;
    display: flex;
    width: 350px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
   
}







    </style>
    











<div class="container d-flex justify-content-center mt-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card mxi">
                <div class="card-body text-center">
                  <form method="POST">  
                 <span class="myratings" name='rate'>4.5</span>

                    <h4 class="mt-1">Rate</h4>
                    <fieldset class="rating"> 

                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class="full" for="star5" title="Awesome - 5 stars"></label> 
                      <input type="radio" id="star4half" name="rating" value="4.5" />
                      <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> 
                      <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars">
                        
                      </label> <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>

                      <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                      <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                      <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                      <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> 

                      <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> 

                      <input type="radio" class="reset-option" name="rating" value="reset" /> 

                    </fieldset>

                    <label for="review">write review text</label>
                   <textarea type="text"  class="form-control rounded-0" name="review" /></textarea>
                   
                   <input type="submit" name="submit" class="btn btn-primary mt-2">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

if (isset($_POST['submit'])) {

            $rating=$_POST['rating'];
            $review=$_POST['review'];
            $tutor=$row3['tutor'];


           $check="insert into  reviews(student,tutor,demo_class,stars,review_para)

             values('$usernames','$tutor','$demo_class', 

             '$rating','$review')";
             
            

            $re=mysqli_query($link, "$check") or die("error");
            echo"  <script type='text/javascript'> alert('review has been succes fully added') </script>";

            if ($re) {
                $sql = "SELECT count(*) dd from reviews where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);
              $noclasses=$row['dd'];
              $sql="UPDATE tutor SET rating='$noclasses' where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);
            }


}


?>

  <script type="text/javascript">
    
  $(document).ready(function(){

$("input[type='radio']").click(function(){
var sim = $("input[type='radio']:checked").val();
//alert(sim);
if (sim<3) { $('.myratings').css('color','red'); $(".myratings").text(sim); }else{ $('.myratings').css('color','green'); $(".myratings").text(sim); } }); });
  </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php

        
     //tutors bookings page

 }else if ($role=='Tutor') {
   



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
                  Student name : &nbsp;&nbsp;".$row3['student_name']."<br>

                  Subject : &nbsp;&nbsp;".$row3['subject']."<br>

                  status :  &nbsp;&nbsp;".$row3['status']."<br>

              </div>
            
              <div class='border px-3'>
                <h5>Contact info</h5>
                <p>Email : ".$row3['student']."<br>
                 Mobile number : ".$row3['student_mobile']."<br>
                </p>
              </div>
            </div>
              <hr>
              
            </div>
          </div>
            
        </div>

       ";

//buttons for jion or declaine


       if ($row3['status']=='requested_to_demo') {

         echo "<div class='container mt-2'>
              <form method='POST'>
              <input type='submit' name='accept_demo' value='accept demo' class='btn btn-primary'>

              <input type='submit' name='decline_demo' value='decline' class='btn btn-danger'>
              </form>

              </div>";

       }else if ($row3['status']=='demo_rejected') {
        
        echo "tutor rejected your requested to demo";

       }else if ($row3['status']=='demo_accepted') {
        
        echo "<div class='container mt-2'>
              <form method='POST'>
              <input type='submit' name='demo_ended' value='demo_ended' class='btn btn-primary'>
              </form>
              </div>";

       }else if ($row3['status']=='demo_ended') {
        
        echo "demo class was ended";

       }else if ($row3['status']=='requested_jion') {
          
        echo "<div class='container mt-2'>
              <form method='POST'>
              <input type='submit' name='accept_jion' value='accept jion' class='btn btn-primary'>

              <input type='submit' name='decline_jion' value='decline' class='btn btn-danger'>
              </form>
  
              </div>";

       }else if ($row3['status']=='student_rejected') {
        
        echo "student rejected ";

       }else if ($row3['status']=='tutor_rejected') {
        
        echo "tutor rejected ";

       }
       else if ($row3['status']=='jioned') {
        
        echo "<div class='container mx-4 mb-4'> <h6>your jioned in this tution</h6> </div>";

       }



  
//if student jioned in tution details is uploaded into students data base
      
    if (isset($_POST['accept_jion'])) {
      
      $student_email=$row3['student'];
      $tutor=$row3['tutor'];  
      $tution_place=$row3['where_tution'];
      $tutor_name=$row3['tutor_name'];
      $tutor_mobile=$row3['tutor_mobile'];
      $student_name=$row3['student_name'];
      $student_mobile=$row3['student_mobile'];
      $subject=$row3['subject'];
      $fee=$row3['fee'];

     $query2="INSERT INTO  students_joined(student,student_name,student_mobile,tutor,tutor_name,tutor_mobile,subject,where_tution,demo_class_id,fee) 

      VALUES('$student_email','$student_name','$student_mobile','$tutor','$tutor_name','$tutor_mobile','$subject','$tution_place','$demo_class','$fee')
      ";

      $result=mysqli_query($link, "$query2") or die("error33");
      echo"";

      
    }      
       
         
//to update democlasses status to accept

     if (isset($_POST['accept_demo']) ) {

        $tutor=$row3['tutor'];  
        $tution_place=$row3['where_tution'];
       
      $query_jion="UPDATE demo_classes SET status='demo_accepted' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('accepted demo'); </script>";

      

      
    }

    //to update democlasses status to decline
     if (isset($_POST['decline_demo'])) {

     $query_jion="UPDATE demo_classes SET status='demo_rejected' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('declined'); </script>";
      if ($result_jion) {
       
      }
      
    }   
  
   //to update democlasses status to decline
     if (isset($_POST['demo_ended'])) {

     $query_jion="UPDATE demo_classes SET status='demo_ended' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('ended'); </script>";
      if ($result_jion) {
       
      }
      
    }   
         

//to update democlasses status to jion

     if (isset($_POST['accept_jion']) ) {

        $tutor=$row3['tutor'];  
        $tution_place=$row3['where_tution'];

        //to insert data into students_joined
        $sql = "SELECT count(*) dd from students_joined where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);
              $row = mysqli_num_rows($result);
              $noclasses=$row['dd'];
              $sql="UPDATE tutor SET students_joined='$noclasses' where tutor='$tutor' ";
              $result = mysqli_query($link,$sql);

       
      $query_jion="UPDATE demo_classes SET status='jioned' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('successfully joined'); </script>";
      $num22 = $result_jion->$num_rows;

      
      if ($result_jion) {
       $qu22="UPDATE tutor SET students_joined='$num22' where tutor='$usernames' ";

                    //echo"$qu22";
       $re22=mysqli_query($link, "$qu22") or die("error33");
      }
     
                    
      
    }

    //to update democlasses status to decline
     if (isset($_POST['decline_jion'])) {

     $query_jion="UPDATE demo_classes SET status='tutor_rejected' WHERE id='$demo_class' ";

      $result_jion=mysqli_query($link, "$query_jion") or die("error33");
      echo"<script type='text/javascript'>alert('declined'); </script>";
      if ($result_jion) {
       
      }
      
    }


        
       
 }


       ?>

     </div>
    </div>

    






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
























