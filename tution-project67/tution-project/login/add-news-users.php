<title>Add News - Siddipet.co - PixelAtom</title>
  <meta name="description" content="Siddipet Information, Siddipet District in Telangana State">
  <meta name="keywords" content="Siddipet Information, Siddipet Information Siddipet, siddipet District, Telangana, Harish rao, Pixelatom, About Siddipet">
<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorial</title>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

              

<?php
include('header1.php');

    function redirectMsg() 
    {
        ?>
      <script type="text/javascript">
            function Redirect()
            {
               window.location="add-news-users.php";
            }
            document.write("");
            setTimeout('Redirect()', 1000);
      </script>
 <?php
  }  
  date_default_timezone_set('Asia/Kolkata');
$date=date("d/m/Y");
?>

<div class="content_wrapper">
	<div class="banner-img d-flex align-items-center">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12"><h2>Add News<br><small><a href='dashboard.php'><font color='red'>Go to Dashboard</font></small></a></h2></div>
			</div>
		</div>
	</div>
    <div class="content-wrapper">
		<div class="content">
            <div class="row">
				<div class="col-md-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
							<div class="header-elements">
                				<div class="list-icons">
                			        <a class="list-icons-item" data-action="collapse"></a><a class="list-icons-item" data-action="reload"></a><a class="list-icons-item" data-action="remove"></a>
                			     </div>
			                </div>
			            </div>
		<?php
        if(isset($_POST['submit']))
        {
              $fullname = $_POST['fullname'];
              // echo "string";
              $mobile = $_POST['mobile'];
              $gender = $_POST['gender'];

            // Getting file name
            $filename = $_FILES['file']['name'];
         
            // Valid extension
            $valid_ext = array('png','jpeg','jpg','jfif');

            // Location
            $location = "profileimages/".$filename;

            // file extension
            $file_extension = pathinfo($location, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Check extension
            if(in_array($file_extension,$valid_ext))
            {  
                
                
                $date1=date("l jS \of F Y h:i:s A");
                
                                   
                    
                $path = "profileimages/".$result2.'.'.$file_extension;

                // Compress Image
                compressImage($_FILES['file']['tmp_name'],$path,60);
                                    
                                    $qu2="UPDATE  login SET Fullname='$fullname',  mobile_number='$mobile', profile_photo='$name'
                                        where email='$usernames'";
                                   // echo" $qu2<br>";

                                    $re2=mysqli_query($link, "$qu2") or die("error");
                                    echo"<div class='alert alert-success'>NEWS Added Successfully </div>";
                                   redirectMsg();

            }
            else
            {
                echo "Invalid file type.";
            }


          if ($role=='Student') {
              $student="UPDATE student SET  Fullname='$fullname',  mobile_number='$mobile', profile_photo='$name', gender='$gender' WHERE email='$usernames' ";

              $result=mysqli_query($link, "$student") OR die("error occured");

              echo"<script type='text/javascript'>alert('successful');</script>";
          }
        }

        // Compress image
        function compressImage($source, $destination, $quality) {

            $info = getimagesize($source);

            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);
                
            elseif ($info['mime'] == 'image/jpg') 
                $image = imagecreatefromjpg($source);    

            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);

            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);
                
            elseif ($info['mime'] == 'image/jfif') 
                $image = imagecreatefromjfif($source);    
           
           
            imagejpeg($image, $destination, $quality);

        }

        ?>

        <!-- Upload form -->
        <div class="card-body">
        <form method='post' action='' enctype='multipart/form-data'>
                                        <div class="form-group">
                                <label for="Name"><b>Telugu Headlines</b></label>
                                <div ><input type='text' name="telugu_eventname" placeholder='Telugu Headlines' class='form-control'   required='required'></div>
        					</div>
        					<div class="form-group">
                                <label for="Name"><b>English Headlines</b></label>
                                <div ><input type='text' name="english_eventname" placeholder='English Headlines' class='form-control'    required='required'></div>
        					</div>
        					<div class="form-group">
                                <label for="Name"><b>Urdu Headlines</b></label>
                                <div ><input type='text' name="urdu_eventname" placeholder='Urdu Headlines' class='form-control'   required='required'></div>
        					</div>					
        					
        					<div class="form-group">
                                <label for="Name"><b>What type of News?</b></label>
                                <div >
                                <?php 
                                	$qu5="select * from menu order by id";
                                	//echo"$qu5";
                                	$re5=mysqli_query($mysqli_conn, "$qu5") or die("error5");
                                   	$num5 = $re5->num_rows;	
                                	echo"<select name='activity' class='form-control select2'  required='required'><option value=''></option>";
                                	for($i=1;$i<=$num5;$i++)
                                	{
                                	$row5=mysqli_fetch_array($re5);
                                	$menu=$row5['telugu_menu'];
                                	$id=$row5['id'];
                                	 echo"<option value='$id'>$menu</option>";
                                	}
                                	echo"</select>";
                                	?>
                                </div>
                            </div>
        
        				    <div class="form-group">
                                <label for="Name"><b>Mandal/Village of Siddipet</b></label>
                                <div ><select name='city' class='form-control'><option> </option>
                                    <?php
                                    $qu2="select * from area order by id ";
                                    $re2=mysqli_query($mysqli_conn, "$qu2") or die("error3");
                                    $num2= $re2->num_rows;	
                                    for($i=1;$i<=$num2;$i++)
                                    {			
                                    $row2=mysqli_fetch_array($re2);
                                    $code=$row2['id'];
                                    $name=$row2['menu'];
                                    echo"<option>$name</option>";
                                     }
                                   echo"</select>";
                                   ?>
                                </div>
        					</div>
                            <div class="form-group">
                                <label for="Name"><b> Telugu Description</b></label>
                                <div >  <textarea name="telugu_des"   id="editor1" placeholder="Start Typin..."></textarea></div>
        					</div>
                            <div class="form-group">
                                <label for="Name"><b> English Description</b><a href='https://translate.google.co.in' target='aside'>(Translater)</a></label>
                                <div >  <textarea name="english_des"  id="editor2" placeholder="Start Typin..."></textarea></div>
        					</div>
                            <div class="form-group">
                                <label for="Name"> <b>Urdu Description</b></label>
                                <div >  <textarea name="urdu_des"  id="editor3" placeholder="Start Typin..."></textarea></div>
        					</div>					
                                <script>
                                  CKEDITOR.replace( 'editor1' );
                                  CKEDITOR.replace( 'editor2' );
                                  CKEDITOR.replace( 'editor3' );
                                </script>	
        				        <?php 
                                date_default_timezone_set('Asia/Kolkata');
                                $start_date = date('Y-m-d H:i:s');	
                                ?>		
        					<div class="form-group">
                                <label for="Name"><b>NEWS Date</b></label>
                                <div ><input name="date" placeholder='Date of news ' value='<?php echo $start_date ?>' class="form-control"></div>
        					</div> 
        						<div class="form-group">
                                <label for="Name"><b>Add a Related Pic</b></label>
                                <div ><input name="imagefile"  type="file"  class="form-input-styled">
            					<span class="form-text text-muted">Accepted formats: jpg, png(Max file size 1Mb) mp4, avi(Max file size 50Mb)</div>
            			    </div>
            			    <div class="form-group">
                                <label for="Name"><b>Keywords</b></label>
                                <div ><input name="keywords" placeholder='Keywords '  class="form-control"></div>
        					</div>	
           
                            <div class="form-group">
                                <label for="Name"><b>Flash News</b></label>
                                <div ><select name='flash' required='required'><option value=''></option><option>No</option><option>Yes</option></select></div>
        					</div>	
        					<div class="form-group">
                                <label for="Name"><b>NEWS Date</b></label>
                                <div ><input name="date" placeholder='Date of news ' value='<?php echo $start_date ?>' class="form-control"></div>
        					</div>
        					<div class="form-group">
                                <label for="Name"><b>Url/Link</b></label>
                                <div ><input name="link" placeholder='Link If any' class="form-control"></div>
        					</div>
            <input type='submit'  name='submit'>    
        </form>
	 </div>              
        </div>

