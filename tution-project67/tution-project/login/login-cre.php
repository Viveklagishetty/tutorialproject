<?php 
error_reporting(0);

ob_start();
session_start();
include("db_connect.php");
date_default_timezone_set('Asia/Calcutta');
$date=date('d/m/Y');
$time=date('G:i');
$qu2="select * from login  where (email='".$_SESSION['login']."') and passcode='".$_SESSION['password']."'";
//echo"$qu2";
$re2=mysqli_query($link, "$qu2") or die("error33");
$num2 = $re2->num_rows;
$row3=mysqli_fetch_array($re2);
$role=$row3['role'];
$usernames=$row3['email'];
$fullname=$row3['fullname'];
$mobile=$row3['mobile_number'];
$profiledp=$row3['profile_photo'];



