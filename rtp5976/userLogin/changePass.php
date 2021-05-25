
<?php
  session_start();
  if(!array_key_exists("id", $_SESSION))
  {
    header("Location: index.php");
  }

  $id = $_SESSION['id'];

  include("connection.php");
  $error = '';
  $success = '';
  
  if(isset($_POST['changePassBtn']))
  {
    if(empty($_POST['password']) && empty($_POST['confirmPassword']))
    {
      $error = "Please Fill All The Fields";
    }
    elseif($_POST['password'] != $_POST['confirmPassword'])
    {
    	$error = "Password and Confirm Password does not match";
    }

    else
    {
      $query = "UPDATE `users` SET `password` = '".md5(md5($id).$_POST['password'])."' WHERE `id` = '$id' LIMIT 1";
      $result = mysqli_query($link, $query);

	   	if($result)
		{
		  $success = "Password Has Been changed Successfully";
		}

		else
		{
		  $error = "Can not update the password!! Please Try Again Later";
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
             


            <h4 class="font-weight-bold mb-3">Change Password</h4>
            

            <div class="form-group">
              <label for="password">Enter New Password</label>
              <input type="password" class="form-control" id="password" name="password" required="">
            </div>

            <div class="form-group">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required="">
            </div>


            <input type="submit" name="changePassBtn" class="btn btn-success mt-4" value="Change Password">

          </form>
        </div>
      </div>
    </div>
  </main>


<?php include("footer.php"); ?>