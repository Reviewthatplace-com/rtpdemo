<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Powers Pediatrics - Add Blog </title>

  <!-- Font Awesome -->
  <link rel="icon" href="img/logo/logo.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assest/css/panel.css" rel="stylesheet">
  <link href="../assest/css/rtp.css" rel="stylesheet">
  <link rel="stylesheet" href="../assest/css/datatables.min.css">
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark admin-menu">
  <div class="container-fluid">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Admin Panel</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-home pr-2"></i>Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Blogs</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="addBlog.php"><i class="fas fa-plus pr-2"></i>Add Blog</a>
          <a class="dropdown-item" href="manageBlog.php"><i class="far fa-edit pr-2"></i>Manage Blog</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Users</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="addUsers.php"><i class="fas fa-plus pr-2"></i>Add Users</a>
          <a class="dropdown-item" href="manageUsers.php"><i class="far fa-edit pr-2"></i>Manage Users</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">My Account</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="changePass.php">Change Password</a>
          <a type="submit" class="dropdown-item" href="index.php?logout=1"><i class="fas fa-sign-out-alt pr-2"></i>Logout</a>
        </div>
      </li>

     
      <li class="nav-item">
        
      </li>
    </ul>
    <!-- Links -->
   
  </div>
  <!-- Collapsible content -->
</div>
</nav>
<!--/.Navbar-->