<!----------<?php
 include('db_connect.php');
 include('login-cre.php');
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "../profileimages/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "update login setprofile_photo='".$name."' where email='".$_POST['username'];
        mysqli_query($link,$query);
     }

  }
 
}
?>

<?php

$sql = "select name from images where id=4";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "../profileimages/".$image;

?>
<img src='<?php echo $image_src;  ?>' >------------>

<?php
  include('db_connect.php');
 include('login-cre.php');
  $email = $_POST['usernames'];
  echo " $email vfgbf";
  $sql = "select *  where (email='".$_POST['usernames']."')"
?>

<form method="post" action="" enctype='multipart/form-data'>
  <input type='input' name='username' value="<?php echo $usernames ?>"  />

  <input type='file' name='file' />

  <input type="text" name="fullname" value="<?php echo $usernames ?>"  >
  <input type="text" name="mobile" value="<?php echo $mobile ?>">
  <input type='submit' value='Save name' name='but_upload'>
</form>