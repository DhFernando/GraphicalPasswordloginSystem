<?php
include_once ("conection.php");

if(empty($fname)||empty($lname)||empty($email)||empty($password)||empty($picPwX_value)){
    header("Location:loginSystem.php?field=emty");
    exit();
}

else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location:loginSystem.php?email=invalid-Email");
        exit();
    }else if(strlen($password)<6){
        header("Location:loginSystem.php?pasword=shouldhaveatlest6charectors");
        exit();
    }
}
?>