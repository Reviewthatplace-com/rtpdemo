<?php
  
  session_start();
  if(!array_key_exists("id", $_SESSION))
  {
    header("Location: index.php");
  }
  
  include("connection.php");

  $error = '';
  $success = '';


  if(isset($_POST['updateUserDetail']))
  {
    if(empty($_POST['first-name']) && empty($_POST['last-name']) && empty($_POST['username']))
    {
      $error = "Please Enter All The Details";
    }
    else
    {
      $query = "UPDATE `users` SET `firstName` = '".mysqli_real_escape_string($link, $_POST['first-name'])."',
      `lastName` = '".mysqli_real_escape_string($link, $_POST['last-name'])."', 
      `username` = '".mysqli_real_escape_string($link, $_POST['username'])."'
        WHERE `id` = '".mysqli_real_escape_string($link, $_POST['id'])."' 
       ";
      $result = mysqli_query($link, $query);

      if($result)
      {
        $success = "User Details Has Been Updated Successfully";
      }
      
      else
      {
        $error = "Can not update the Details right now!! Please try Again Later.";
      }
    }
  }


  if(isset($_POST['deleteUser']))
  {
    $query = "DELETE FROM `users` WHERE id =  '".mysqli_real_escape_string($link, $_POST['id'])."'";
    $result = mysqli_query($link, $query);

    if($result)
    {
      $success = 'User Has Been Successfully Deleted';
    }
    else
    {
      $error = 'Can not Delete user!! Please Try Again Later';
    }
  }


?>

<?php include("head.php"); ?>


  <main>
    <div class="container-fluid px-5 mt-4">
      <h3 class="font-weight-bold mb-4">Manage Users</h3>

      <?php
        if($error != '')
        {
          echo "<div class='alert alert-danger' role='alert'>".$error."</div>";
        }
        elseif($success != '')
        {
          echo "<div class='alert alert-success' role='alert'>".$success."</div>";
        }
      ?>

      <div class="table-responsive">
        <table class="table text-center table-bordered table-sm datatables">
          <thead class="thead-dark">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
              <th>Password</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              $query = "SELECT * FROM users WHERE `role` != 'admin'";
              $result = mysqli_query($link, $query);
            ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                  <?php 
                    echo "<button class='btn btn-success btn-edit' data-toggle='modal' 
                    data-target='#editUser".$row['id']."'>Edit</button>";
                  ?>
                </td>
                <td>
                  <?php 
                    echo "<button class='btn btn-danger btn-delete' data-toggle='modal' 
                    data-target='#deleteUser".$row['id']."'>Delete</button>";
                  ?>
                </td>
              </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>




  <!-- =================================== blog edit ========================================== -->
  <?php 
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);
  ?>
  <?php while($row = mysqli_fetch_array($result)): ?>

  <div class="modal fade show" id="editUser<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog cascading-modal modal-lg" role="document">
      <!-- Content -->
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header light-blue darken-3 white-text">
          <h4 class="">Edit</h4>
          <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>
        <!-- Body -->
        <div class="modal-body mb-0">
          <form method="post" enctype="multipart/form-data">
            <h4 class="font-weight-bold mb-3">Users Details</h4>

            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="text" class="form-control" id="first-name" name="first-name" value="<?php echo $row['firstName']; ?>" required>
            </div>

            <div class="form-group">
              <label for="last-name">last Name</label>
              <input type="text" class="form-control" id="last-name" name="last-name" value="<?php echo $row['lastName']; ?>" required>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
            </div>


          
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="submit" name="updateUserDetail" class="btn btn-success mt-4" value="Update">

          </form>
        </div>
      </div>
      <!-- Content -->
    </div>
  </div>
  <!-- request forms -->
  <?php endwhile; ?>
  <!-- =================================== blog edit ========================================== -->


  <!-- =================================== blog delete ========================================== -->
  <?php 
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);
  ?>
  <?php while($row = mysqli_fetch_array($result)): ?>

  <div class="modal fade show" id="deleteUser<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!-- Content -->
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header light-blue darken-3 white-text">
          <h4 class="">Delete</h4>
          <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>
        <!-- Body -->
        <div class="modal-body mb-0">
          <form method="post" enctype="multipart/form-data">

            

            <p>Are You Sure Want to Delete this User? It can not be undone.</p>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="submit" name="deleteUser" class="btn btn-success" value="Yes">
            <input type="button" data-dismiss="modal" class="btn btn-danger" value="No">

          </form>
        </div>


      </div>
      <!-- Content -->
    </div>
  </div>
  <!-- request forms -->
  <?php endwhile; ?>
  <!-- =================================== blog delete ========================================== -->




  <?php include("footer.php"); ?>







 