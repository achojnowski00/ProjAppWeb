<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Logowanie</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <?php
      error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
      include 'admin/admin.php';
      include 'cfg.php';
      $connect = new Config("localhost", "root", "", "moja_strona");
      $db = $connect->connect();
      $user = new Admin($db);
      $user->login($db);
   ?>
   <div class="login">
      <h1 class="heading">panel logowania</h1>
      <form class='loginform' action = "" method = "post">
         <p class="username label">Username</p>
         <input class="username inputbox" type = "text" name = "username">
         <p class="username label">Password</p>
         <input class="password inputbox" type = "password" name = "password">
         <br>
         <input class='submitbutton' name="logowanie" type = "submit" value = "ZALOGUJ">
      </form>
   </div>
</body>
</html>