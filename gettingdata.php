<?php
include_once ("conection.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$picPwX_value=$_POST['X_value'];
$picPwY_value=$_POST['Y_value'];

$hashed_pasword=sha1($password);
// $query="INSERT INTO user (userid,firstname,lastname,email,password) VALUES ('','{$fname}','{$lname}','{$email}','{$password}');";
// $res = mysqli_query($conection,$query);
include_once("errorHandaling.php");
$query="INSERT INTO user (userid,firstname,lastname,email,password,picPwX_value,picPwY_value) VALUES ('',?,?,?,?,?,?);";
$stmt=mysqli_stmt_init($conection);
if(!mysqli_stmt_prepare($stmt,$query)){
  echo "Error";
}else{
  mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lname,$email,$hashed_pasword,$picPwX_value,$picPwY_value);
  mysqli_stmt_execute($stmt);
}

header("Location:loginsystem.php?");
?>
