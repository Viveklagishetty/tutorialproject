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

    <style type="text/css">
    	@import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    background-color: #D32F2F;
    font-family: 'Calibri', sans-serif !important
}

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
    margin-top: 100px
}

.card {
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
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.card .card-body {
    padding: 1rem 1rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

p {
    font-size: 14px
}

h4 {
    margin-top: 18px
}

.btn:focus {
    outline: none
}

.btn {
    border-radius: 22px;
    text-transform: capitalize;
    font-size: 13px;
    padding: 8px 19px;
    cursor: pointer;
    color: #fff;
    background-color: #D50000
}

.btn:hover {
    background-color: #D32F2F !important
}

    </style>
    
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



<div class="container d-flex justify-content-center mt-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
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

			$rate=$_POST['rate'];
            $review=$_POST['review'];
            


           $check="insert into  reviews(student,tutor,demo_class,stars,review_para)


	           values('$usernames', '$email', '$password', 

	           '$passcode','$role','$mobile','$file','$gender')";
	           
	          

	          $re=mysqli_query($link, "$check") or die("error");
	          echo"<script type='text/javascript'>  window.location='login.php'; </script>";



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