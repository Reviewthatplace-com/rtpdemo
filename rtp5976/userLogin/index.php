<?php
  session_start();
  include("connection.php");

  $usernameError ="";
  $passwordError ="";
  $error = '';
  
  if(array_key_exists("submitBtn", $_POST))
  {
    if (!$_POST['username']) 
    {   
      $usernameError = "Username is required<br>"; 
    } 
    
    if (!$_POST['password']) 
    {   
      $passwordError = "Password is required<br>"; 
    } 


    else
    {
      $query = "SELECT * FROM users WHERE 
      (`username` = '". mysqli_real_escape_string($link, $_POST['username'])."') && (`role` = 'user') LIMIT 1";
      $result = mysqli_query($link, $query);       
      $row = mysqli_fetch_assoc($result);
      $_SESSION['id'] = $row['id'];

      if ($row['password'] == md5(md5($row['id']).$_POST['password']))
      {
        $success= "success";
        $_SESSION['id'] = $row['id'];
        header("location: manageBlog.php");  

      }  
      else
      {
         $error = "Could not find that username/password combination";
      }

    }
  }

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Powers Pediatrics - User Login </title>

  <!-- Font Awesome -->
  <link rel="icon" href="../assest/img/logo/logo.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assest/css/login.css" rel="stylesheet">
  <link href="../assest/css/style.css" rel="stylesheet">
  <link href="../assest/css/rtp.css" rel="stylesheet">
</head>

<body id="LoginForm">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assest/img/logo/logo.png" id="icon" alt="User Icon" />
      <h4 class="mt-2 mb-3">Powers Pediatrics - User Login</h4>
    </div>

    <!-- Login Form -->
    <?php
      if($error != '')
      {
        echo "<div class='red-text'>$error</div>";
      }
    ?>

    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Email">
      <?php
        if($usernameError != '')
        {
          echo "<div class='red-text'>$usernameError</div>";

        }
      ?>

      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">

      <?php
        if($passwordError != '')
        {
          echo "<div class='red-text'>$passwordError</div>";
        }
      ?>

      <input type="submit" name="submitBtn" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="../">Go to the Site</a>
    </div>

  </div>
</div>

<?php include("footer.php"); ?>