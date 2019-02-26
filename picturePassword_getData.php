<?php
include_once ("conection.php");

$picPwX_value=$_POST['x'];
$picPwY_value=$_POST['y'];
echo "x is {$picPwX_value} <br>";
echo "y is {$picPwY_value}";
$query="UPDATE user SET picPwX_value='$picPwX_value',picPwY_value='$picPwY_value' WHERE userid=1 ;";
mysqli_query($conection,$query);
?>