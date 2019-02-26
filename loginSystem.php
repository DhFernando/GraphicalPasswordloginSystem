<?php include_once ("conection.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>userloginSystem</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
  <div class="top">
        <h3>SIGN IN PAGE</h3>
  </div>


    <div class="content">
     
        <form class="" action="gettingdata.php" method="POST">

<img src="images/user-png-icon-male-user-icon-512.png" alt="">
<input type="text" name="fname" value="" placeholder="first name"><br>

<img src="images/user-png-icon-male-user-icon-512.png" alt="">
<input type="text" name="lname" value="" placeholder="last name"><br>

<img src="images/bazaar-e-bullion-contact-us-3704.png" alt="">
<input type="text" name="email" value="" placeholder="e - mail"><br>

<img src="images/lock-24-512.png" alt="">
<input type="password" name="password" value="" placeholder="leasr 6 charactos"><br>


<input id="X_value" type="password" name="X_value"><br>

<input id="Y_value" type="password" name="Y_value"><br>

<button id="submitbtn" type="submit" name="button">Submit</button>



</form>
<div class="topPicHed"><h1>Select Some Place</h1></div>
<img id="image" src="images/secret-768x512.jpg" alt="">



<script src="loginstyle.js"></script>
  </body>
</html>
