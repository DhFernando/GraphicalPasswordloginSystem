<?php
include_once ("conection.php");

$email=$_POST['e_mail'];
$pw=$_POST['pw'];
$value_X=$_POST['value_X'];
$value_Y=$_POST['value_Y'];
$query="SELECT * FROM user where email='$email';";
$res=mysqli_query($conection,$query);

$hash=sha1($pw);


$resCheck=mysqli_num_rows($res);
if($resCheck>0){
  while ($row=mysqli_fetch_assoc($res)) {
    if($row['password']==$hash){
      if($row['picPwX_value']-50<$value_X && $row['picPwX_value']+50>$value_X){
        
        if($row['picPwY_value']-50<$value_Y && $row['picPwY_value']+50>$value_Y){
          header("Location:../personalTables/personalTable.php?signIn=Sucsess");
        }
      }
        
    }
  }
}

?>
