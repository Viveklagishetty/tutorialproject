<?PHP
session_start();
session_destroy();
echo "<script type='text/javascript'>  window.location='login.php'; </script>";
header("location:../home-page.php");
exit;
?>
