<!DOCTYPE html> 
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/line-awesome.css" rel="stylesheet" type="text/css">
	<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
	<link href="assets/css/weather-icons.min.css" rel="stylesheet">
	<!--Morris Chart -->
	<link rel="stylesheet" href="assets/js/index/morris-chart/morris.css">
	<!-- owl_carousel -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
<?php 
error_reporting(0);
//set cookie lifetime for 100 days (60sec * 60mins * 24hours * 100days)
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);
//then start the session
ob_start();
session_start();
include("config.inc.php");
date_default_timezone_set('Asia/Calcutta');
$date=date('d/m/Y');
$time=date('G:i');
$qu2="select * from new_users  where (email='".$_SESSION['login']."' or mobile='".$_SESSION['login']."') and passcode='".$_SESSION[password]."'";
//echo"$qu2";
$re2=mysqli_query($mysqli_conn, "$qu2") or die("error33");
$num2 = $re2->num_rows;
$row3=mysqli_fetch_array($re2);
$usernames=$row3['username'];
$name=$row3['name'];
$imagename=$row3['image_name'];
$department=$row3['dept'];
$mobile=$row3['mobile'];
$email=$row3['email'];
$year=$row3['year_desig'];
$years=$row3['year'];
$section=$row3['section'];
$semester=$row3['semester'];
$brasec="$department $section";
$roless=$row3['role'];
$qu14="select * from admin_details where id=1";
$re14=mysqli_query($mysqli_conn, "$qu14") or die("error");
$num14 = $re14->num_rows;
$row14=mysqli_fetch_array($re14);
echo"<title>{$row14['title']}</title>"; 
?>