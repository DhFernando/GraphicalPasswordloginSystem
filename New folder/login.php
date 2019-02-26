<?php include_once ("conection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="login1.css">
    <title>Document</title>
</head>
<body>
<div class="top">
        <h3>LOGIN PAGE</h3>
       
    </div>
    <div class="form">
    <form class="" action="log_in_get_data.php" method="POST">
          <input type="text" name="e_mail" value="" placeholder="e - mail"><br>
          <input type="password" name="pw" value="" placeholder="password"><br>
          <input id="value_X" type="password" name="value_X"><br>
          <input id="value_Y" type="password" name="value_Y"><br>
          <button type="submit" name="button" id="logInBtn">logIn</button><br>
          <a href="../loginSystem.php" id="SignInBtn">Sign In</a><br>
      </form>
      <div class="topPicHed"><h1>conform your password</h1></div>
      <img id="image2" src="../images/secret-768x512.jpg" alt="">
    </div>

    <script src="login.js"></script>
</body>
</html>