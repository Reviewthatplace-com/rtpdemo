<?php
  include("connection.php");
  session_start();
  if(!array_key_exists("id", $_SESSION))
  {
    header("Location: index.php");
  }
  $id = $_SESSION['id'];

  $error = '';
  $success = '';
  
  function php_slug($string)  
  {  
    $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));  
    return $slug;  
  } 

  if(isset($_POST['createUser']))
  {
    if(empty($_POST['first-name']) && empty($_POST['last-name']) && empty($_POST['username']) && empty($_POST['password']))
    {
      $nameError = "Please Fill All The Fields";
    }
    else
    {
      $query = "SELECT * FROM `users` WHERE `username` = '".mysqli_real_escape_string($link, $_POST['username'])."'";
      $result = mysqli_query($link, $query);
      if(mysqli_num_rows($result)>0)
      {
        $error = "User Already Exist!! Please Try another email";
      }
      else
      {
        $query = "INSERT INTO `users` (`firstName`,`lastName`,`username`,`password`,`role`) VALUES (
          '".mysqli_real_escape_string($link, $_POST['first-name'])."',
          '".mysqli_real_escape_string($link, $_POST['last-name'])."',
          '".mysqli_real_escape_string($link, $_POST['username'])."',
          '".mysqli_real_escape_string($link, $_POST['password'])."', 
          'user'
        )";

        if 
        (!mysqli_query($link, $query)) {

            $error = "<p>Could not sign you up - please try again later.</p>";
        } 
        else 
        {

            $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
            $result = mysqli_query($link, $query);

            if($result)
            {
              $success = "New User Has Been Added Successfully";
            }
            
            else
            {
              $error = "Can not add New Users";
            }
         
        }

      }
      
    }
  }
  
?>
  
  <?php include("head.php"); ?>

  <main>
    <div class="container mt-3">
      <div class="card">
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">

            <?php if($error != ''): ?>
              <div class='alert alert-danger' role='alert'><?= $error ?></div>
            <?php elseif($success != ''): ?>
              <div class='alert alert-success' role='alert'><?= $success ?></div>
            <?php endif; ?>
             


            <h4 class="font-weight-bold mb-3">Add New User</h4>

            <div class="row">
            	<div class="col-xl-6">
            		<div class="form-group">
            		  <label for="first-name">First Name</label>
            		  <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name" required="">
            		</div>
            	</div>
            	<div class="col-xl-6">
            		<div class="form-group">
            		  <label for="last-name">Last Name</label>
            		  <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name" required="">
            		</div>
            	</div>
            </div>
            

            <div class="form-group">
              <label for="username">Email</label>
              <input type="text" class="form-control" id="username" name="username" required="">
            </div>

            <div class="form-group">
              <label for="password">Create Password</label>
              <input type="password" class="form-control" id="password" name="password" required="">
            </div>


            <input type="submit" name="createUser" class="btn btn-success mt-4" value="Create User">

          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include("footer.php"); ?>