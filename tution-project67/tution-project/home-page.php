<!DOCTYPE html>
<html lang="en">
<head>

    <title>Acharya</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="homepage.css">

    
</head>
<body >


<?php
include("login/login-cre.php");

if ($num2!=0) {
  include("header.php");
}else{
  include("headerlogout.php");
}

?>  


			<div class="container-for-total">
        		<div class="header">
                
            

                <div class="body-header"  >
                    
                    <div class="body1 mx-3  " >
                      <div class="body">
                        <h5 class="card-title mt-1">Acharya</h5>
                        <h6 class="card-subtitle mt-4 ">We Help Students and Tutors Find Each Other</h6>
                        <p class="card-text  mt-3">We offer a seamless learning experience by integrating the latest academic practices from expert teachers with user-friendly advanced technology tools. Your child gets a transparent, high-quality education, regardless of the situation and location.</p>

                        <?php
                            include("login/login-cre.php");

                            if ($num2!=0) {
                             
                            }else{
                                echo "
                                <p>so if you are a student and looking for tutor please signup</p>
                        <a href='login/signup.php'>
                            <button type='button' class='btn btn-danger ' >
                                Signup as teacher
                            </button>
                        </a> 

                        <p class='mt-3'>so if you are a tutor and looking for students please signup</p>
                        <a href='login/signup.php'>
                            <button type='button' class='btn btn-danger ' >
                               Signup as student
                            </button>
                        </a>";

                            }

                            ?>  
 
                                              
                                                
                      </div>
                    </div>
                </div>
            </div>


          <div class="container-total  mt-5">

                    <div class="container">

                             <?php
                            include("login/login-cre.php");

                            if ($role=='Tutor') {
                             
                            }else if ($role=='Student'){
                                echo "
                                  <form action='searchfield.php' method='GET'>
                                <div class='search'>
                                 <i class='fa fa-search'></i>

                                  <input type='text' class='form-control' placeholder='Enter your course or subject ' name='subject'>

                                <input type='submit' class='button' 
                                value='Search' name='search'>
                                   

                                </div>
                              </form>";

                            }else{
                                  echo "
                                  <form action='searchfield.php' method='GET'>
                                <div class='search'>
                                 <i class='fa fa-search'></i>

                                  <input type='text' class='form-control' placeholder='Enter your course or subject ' name='subject'>

                                <input type='submit' class='button' 
                                value='Search' name='search'>
                                   

                                </div>
                              </form>";
                            }

                            ?>  
 
                        
                            
                    </div>

                <div class="body2 mt-3">
                    <div class="body">
                        <h2 class="card-title mt-3 mx-2 fw-bold">Why Student Join</h2>
                        <div class="sub-body ">
                            
                            <img src="https://mytutorhub.com/blog/wp-content/uploads/2021/01/How-to-Stay-Focused-during-online-tuition-classes-840x430.jpg" alt="..." class="mt-3 mx-2" style="width:400px; height: 400px;">

                            <div class="content mx-4 mt-3 d-flex flex-column justify-content-around">
                                <p>Home Tuition is <b> #1 Secret of Success</b>. Its a well known fact that home tuition helps students to succeed. Home tutors provide personalized attention.
                                </p>

                                <p>Expert one-to-one guidance from home tutors helps students. Here student gets 100% attention and can ask doubts without any hesitation.</p>

                                <p>Guided students learn & achieve <b> Better Grades! </b>Numerous students have benefitted from expert guidance from home tutors.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body2 mt-4">
                    <div class="body">
                        <h2 class="card-title mt-3 mx-2 fw-bold">Why Tutor Join</h2>
                        <div class="sub-body">
                            <div class="content mx-4 mt-3 d-flex flex-column justify-content-around">
                                <p>
                                <b> Be your own Boss!!!</b> You concentrate on teaching students as home tutor and we help you find home tuition needs (part time teaching jobs) posted by students.</p>

                                <p>Home Tutor Site testimonial
                                Home Tuition is <b> Flexible</b> and <b> Rewarding</b>. Teach as home tutor at your convenient timings. Few hours of home tutoring a day can help you earn decent income.</p>

                                <p>Home Tutor Site testimonial
                                Home tutoring is the best part time job option. Thousands of parents are offering part time teaching jobs for home tutors. Work part time and earn <b>additional income!</b></p>
                            </div>

                            <img src="images/teachersub.jpg" alt="..." class="mt-3 mx-2" >

                        </div>
                    </div>
                </div>


        </div>

            <div class="container">
             <div class="card">
               <div class="card-body">
                 <h2 class="card-title mt-3  fw-bold">Why Acharya.com</h2>
                        
                      
                        <p>
                        <b>Fast & Reliable:</b> We have over 4 lakh tutors. So we can arrange a tutor super quick. 100% of the tuition fee goes to tutor. So they continue for long time.</p>

                        <p>
                        <b>Best Customer Service:</b> Our customer service team of over 10 members serve our customers through phone/email/whatsapp/livechat support daily 9am to 8pm.</p>

                        <p>
                        <b>Refund Policy:</b> We have best in class 30 day 100% money back refund policy. For details click here.</p>
               </div>
             </div>
            </div>





			

            <div class="container">
                  <div class="row row-cols-1 row-cols-md-3 g-2 mt-3 mb-3">
                    <div class="col">
                      <div class="card border h-100">
                        
                        <div class="card-body">

                          <?php

                          $sql = "SELECT*from student ";
                          $result = mysqli_query($link,$sql);
                          $row = mysqli_num_rows($result);

                          echo " <h5 class='card-title '>$row</h5>";
                          ?>
                          <h5 class="card-title">Students</h5>
                          
                        </div>
                        
                      </div>
                    </div>
                    <div class="col">
                      <div class="card border h-100">
                       
                        <div class="card-body">

                           <?php

                          $sql = "SELECT*from tutor ";
                          $result = mysqli_query($link,$sql);
                          $row = mysqli_num_rows($result);

                          echo " <h5 class='card-title '>$row</h5>";
                          ?>
                          <h5 class="card-title">Tutors</h5>
                          
                        </div>
                        
                      </div>
                    </div>
                
                    <div class="col">
                      <div class="card border h-100">
                        <div class="card-body">

                           <h3>All india</h3>
                           <p>Coverage</p>
                         
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </div>


</div>


<?php
include("footer.php");

?>
<!------------------------------scripts links--------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>