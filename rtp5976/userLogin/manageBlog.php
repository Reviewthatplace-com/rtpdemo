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

  function php_slug($string)  
  {  
    $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));  
    return $slug;  
  } 

  if(isset($_POST['updateBlog']))
  {
    if(empty($_POST['blog-name']) && empty($_POST['blog-description']) && empty($_POST['meta-title']) && empty($_POST['meta-description']) && empty($_POST['meta-keywords']))
    {
      $error = "Please Enter All The Details";
    }
    else
    {
      $target_dir = "blogImg/";
      $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      //Uploading product image
      $file = '';
      $image_info = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if ($_FILES['fileToUpload']['error'] == 4)
      { 
        $query = "SELECT * FROM blog WHERE `id` = '".mysqli_real_escape_string($link, $_POST['id'])."' ";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        $file = $row['blogImage'];
      }
      else if($_FILES["fileToUpload"]["size"] > 100000)
       {
         $uploadError = "Please Upload File Size Less than 100kb "."<a href='https://tinypng.com/'>(Image Optimizer Tool)</a>";
         $image_info = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       }
       else if(($image_info[0] < 1500) OR ($image_info[0] > 2500))
       {
         $uploadError = "Please upload image of width between 1500 to 2500px "."<a href='https://resizeimage.net/'>(Resize Tool)</a>";
         $uploadError = $uploadError.$image_info[0];
       }

       
      else
      {
        $file = $_FILES["fileToUpload"]["name"];
      }
      
      $blog_name = mysqli_real_escape_string($link, $_POST['blog-name']);

      $query = "UPDATE `blog` SET `blogName` = '".mysqli_real_escape_string($link, $_POST['blog-name'])."',
      `blogUrl` = '".php_slug($blog_name)."',
      `blogDescription` = '".mysqli_real_escape_string($link, $_POST['blog-description'])."', 
      `blogImage` = '$file',
      `metaTitle` = '".mysqli_real_escape_string($link, $_POST['meta-title'])."', 
      `metaDescription` = '".mysqli_real_escape_string($link, $_POST['meta-description'])."', 
      `metaKeywords` = '".mysqli_real_escape_string($link, $_POST['meta-keywords'])."'  

        WHERE `id` = '".mysqli_real_escape_string($link, $_POST['id'])."' 
       ";

      $result = mysqli_query($link, $query);

      if($result)
      {
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
        $success = "Blog Has Been Updated Successfully";
      }
      
      else
      {
        $error = "Can not update the Blog";
      }
    }
  }


  if(isset($_POST['deleteBlog']))
  {
    $query = "DELETE FROM `blog` WHERE `id` =  '".mysqli_real_escape_string($link, $_POST['id'])."'";
    $result = mysqli_query($link, $query);

    if($result)
    {
      $success = 'Row Has Been Successfully Deleted';
    }
    else
    {
      $error = 'Can not Delete Record';
    }
  }


?>

<?php include("head.php"); ?>


  <main>
    <div class="container-fluid px-5 mt-4">
      <h3 class="font-weight-bold mb-4">My Blogs</h3>

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
              <th>Blog Name</th>
              <th>Blog Description</th>
              <th>Blog Image</th>
              <th>Meta Title</th>
              <th>Meta Description</th>
              <th>Meta Keywords</th>
              <th>Date Created</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              $query = "SELECT * FROM blog WHERE `userId` = '$id'";
              $result = mysqli_query($link, $query);
            ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $row['blogName']; ?></td>
                <td><?php echo substr($row['blogDescription'], 0, 60)."...";  ?></td>
                <td>
                  <?php 
                    echo "<button class='btn btn-success btn-viewImg' data-toggle='modal' 
                    data-target='#viewImg".$row['id']."'>View</button>";
                  ?>
                </td>
                <td><?php echo $row['metaTitle']; ?></td>
                <td><?php echo substr($row['metaDescription'], 0, 60)."...";  ?></td>
                <td><?php echo substr($row['metaKeywords'], 0, 60)."...";  ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                  <?php 
                    echo "<button class='btn btn-success btn-edit' data-toggle='modal' 
                    data-target='#editBlog".$row['id']."'>Edit</button>";
                  ?>
                </td>
                <td>
                  <?php 
                    echo "<button class='btn btn-danger btn-delete' data-toggle='modal' 
                    data-target='#deleteBlog".$row['id']."'>Delete</button>";
                  ?>
                </td>
              </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>



  <!-- =================================== blog image ========================================== -->
  <?php 
    $query = "SELECT * FROM blog";
    $result = mysqli_query($link, $query);
  ?>
  <?php while($row = mysqli_fetch_array($result)): ?>

  <div class="modal fade show" id="viewImg<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog cascading-modal modal-lg" role="document">
      <!-- Content -->
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header light-blue darken-3 white-text">
          <h4 class="">Blog Image</h4>
          <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>
        <!-- Body -->
        <div class="modal-body mb-0">
          <img src="blogImg/<?php echo $row['blogImage']; ?>" class="img-fluid">
        </div>
      </div>
      <!-- Content -->
    </div>
  </div>
  <!-- request forms -->
  <?php endwhile; ?>
  <!-- =================================== blog image ========================================== -->



  <!-- =================================== blog edit ========================================== -->
  <?php 
    $query = "SELECT * FROM blog";
    $result = mysqli_query($link, $query);
  ?>
  <?php while($row = mysqli_fetch_array($result)): ?>

  <div class="modal fade show" id="editBlog<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
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
            <h4 class="font-weight-bold mb-3">Blog Details</h4>

            <div class="form-group">
              <label for="blog-name">Blog Name</label>
              <input type="text" class="form-control" id="blog-name" name="blog-name" value="<?php echo $row['blogName']; ?>" required>
            </div>

            <div class="form-group">
              <label for="blog-description">Description</label>
              <textarea class="form-control" id="blog-description" name="blog-description" rows="4" required><?php echo $row['blogDescription']; ?>
              </textarea>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="blog-image" name="fileToUpload">
              <label class="custom-file-label" for="blog-image"><?php echo $row['blogImage']; ?></label>
            </div>


            <h4 class="font-weight-bold mt-4 mb-3">Meta Details</h4>
            <div class="form-group">
              <label for="meta-title">Meta Title</label>
              <input type="text" class="form-control" id="meta-title" name="meta-title" value="<?php echo $row['metaTitle']; ?>" required>
            </div>

            <div class="form-group">
              <label for="meta-description">Meta Description</label>
              <textarea class="form-control" id="meta-description" name="meta-description" rows="4" required><?php echo $row['metaDescription']; ?>
              </textarea>
            </div>

            <div class="form-group">
              <label for="meta-keywords">Meta Keywords</label>
              <textarea class="form-control" id="meta-keywords" name="meta-keywords" rows="5" required><?php echo $row['metaKeywords']; ?>
              </textarea>
            </div>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="submit" name="updateBlog" class="btn btn-success mt-4" value="Update">

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
    $query = "SELECT * FROM blog";
    $result = mysqli_query($link, $query);
  ?>
  <?php while($row = mysqli_fetch_array($result)): ?>

  <div class="modal fade show" id="deleteBlog<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
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

            

            <p>Are You Sure Want to Delete this blog? It can not be undone.</p>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="submit" name="deleteBlog" class="btn btn-success" value="Yes">
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