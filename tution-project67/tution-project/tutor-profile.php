

<!DOCTYPE html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fontawesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Acharya</title>

    <style type="text/css">
      
      .account-container-1{
        display: flex;
      }


      /*------------------modification for mobile----*/

      @media only screen and (max-device-width: 1000px) {
      .account-container-1{
        display: flex;
      }

      
  

      }

      @media only screen and (max-device-width: 893px) {
      .account-container-1{
       flex-direction: column;
      }


      }


      @media only screen and (max-device-width: 400px) {
       .account-container-1{
        display: flex;
      }

      }
    </style>

  </head>
  <body>








       
<?php
 include('login/db_connect.php');
  include('login/login-cre.php');

if(isset($_POST['submit'])){

  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $city = $_POST['city'];
  $experience = $_POST['experience'];
  $qualification = $_POST['qualification'];
  $Locality = $_POST['Locality'];
  $Fee = $_POST['Fee'];
  $course = $_POST['course'];
  $subjcet = $_POST['subjcet'];
  $about = $_POST['about'];
  $Whereteach = $_POST['Whereteach'];

       
  


 



    
        // Insert record

        $query="UPDATE  tutor SET 

        gender='$gender',
        age='$age', 
        experience='$experience',
        qualification='$qualification',  
        city='$city', 
        locality='$Locality',
        about='$about',
        course_teach='$course',
        subject_teach='$subjcet',
        fee='$Fee',    
        where_teach='$Whereteach',
        status_form='filled'

         where email='$usernames' ";


        //echo " $query";
         $re = mysqli_query($link,$query) or die("<script type='text/javascript'>alert('Unsuccessful - ERROR!'); </script>");

          echo"<script type='text/javascript'>  window.location='home-page.php'; </script>";

       
 
}



?>






<form method="POST">

<div class="container">
    <div class="card mt-2" style="width: 100%; ">
      <div class="card-body">
        <h5 class="card-title ">Please fill up this form to upload your profile</h5>

        <div class="account-container-1 mt-4 ">

        
          <div class="first-container  mx-5">
            <label for="age"> Age </label>
            <br>
                  <input type="text" name="age" placeholder="Enter Age" class="form-control" required><br>

                  

                   <label for="city" class="mt-3"> City </label>
                  <br>
                  <input type="text" name="city" placeholder=" Enter your city" class="form-control " required>

                  
              </div>
              <div class="first-sub-container mx-5">

                  <label for="experience">  Experience</label>
                  <br>
                  <input type="number" name="experience" class="mx-2 form-control" placeholder="Experience" class="form-control" required><br>

                  <label for="qualification"> Qualification</label>
                  <br>
                  <input type="age" name="qualification" class="mx-2 form-control" placeholder="Qualification" class="form-control" required>

                   <label for="loacality">Locality</label>
                  <br>
                  <input type="text" name="Locality" class="mx-2 form-control" placeholder="Locality and pinncode" class="form-control" required>

              </div>
        </div>
          
        <div class="mx-5" >
          <div class="form-group">
            

             <label for="Fee"> Fee</label>
                <br>
                  <input type="text" name="Fee" class="mx-2 form-control" placeholder="Price" class="form-control price" >


             <label for="course">Courses teach</label>
                <br>
                <textarea class="form-control" name="course" id="exampleFormControlTextarea1" rows="3" style="height:60px; margin-left: 6px;"></textarea>

             <label for="subjcet">Subjects teach</label>
                <br>
                <textarea class="form-control" name="subjcet" id="exampleFormControlTextarea1" rows="3" style="height:60px; margin-left: 6px;"></textarea>

              <label for="about">About me</label>
                <br>
                <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3" style="height:80px; margin-left: 6px;"></textarea>

              <label for="about">Where you teach</label>
                <br>
                <div>
                   <input class="form-control" name="Whereteach" rows="3" >
                </div>


          </div>
        </div>

        <div class="text-center mt-4">
          <input type="submit" name="submit" class="btn btn-primary " value="Upload profile">
        </div>

      </div>
    </div>
</div>

</form> 

      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

 </body>
</html>