<?php
  session_start();
  if(!array_key_exists("id", $_SESSION))
  {
    header("Location: index.php");
  }
  $id = $_SESSION['id'];
  
  $_SESSION['blog_name'] = '';
  $_SESSION['blog_description'] = '';
  $_SESSION['meta_title'] = '';
  $_SESSION['meta_description'] = '';
  $_SESSION['meta_keywords'] = '';

  include("connection.php");
  $nameError = $descriptionError = $uploadError = $metaTitleError = $metaDescriptionError = $metaKeywordsError = '';
  $error = '';
  $success = '';
  $currentDate = date("m/d/Y");
  
  function php_slug($string)  
  {  
    $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));  
    return $slug;  
  } 

  if(isset($_POST['addBlog']))
  { 
    if(empty($_POST['blog-name']))
    {
      $nameError = "This Field is required";
    }
    else
    {
      $_SESSION['blog_name'] = mysqli_real_escape_string($link, $_POST['blog-name']);
    }


    if(strlen($_POST['blog-description']) < 300)
    {
      $descriptionError = "Description Must Contain atleast 300 Characters";
      $_SESSION['blog_description'] = mysqli_real_escape_string($link, $_POST['blog-description']);
    }
    else
    {
      $_SESSION['blog_description'] = mysqli_real_escape_string($link, $_POST['blog-description']);
    }

    $image_info = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($_FILES['fileToUpload']['error'] == 4)
    {
      $uploadError = "Please Upload blog picture";
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

    if(empty($_POST['meta-title']))
    {
      $metaTitleError = "This Field is required";
    }
    else
    {
      $_SESSION['meta_title'] = mysqli_real_escape_string($link, $_POST['meta-title']);
    }


    if(strlen($_POST['meta-description']) < 50)
    {
      $metaDescriptionError = "Meta Description should always be greater than 50";
      $_SESSION['meta_description'] = mysqli_real_escape_string($link, $_POST['meta-description']);
    }
    else
    {
      $_SESSION['meta_description'] = mysqli_real_escape_string($link, $_POST['meta-description']);
    }
    
    if(empty($_POST['meta-keywords']))
    {
      $metaKeywordsError = "This Field is required";
    }
    else
    {
      $_SESSION['meta_keywords'] = mysqli_real_escape_string($link, $_POST['meta-keywords']);
    }

    if($nameError == '' && $descriptionError == '' && $uploadError == '' && $metaTitleError == '' && $metaDescriptionError == '' &&  $metaKeywordsError == '')
    {
        

        $blog_name = mysqli_real_escape_string($link, $_POST['blog-name']);
        //Uploading product image
        $target_dir = "blogImg/";
        $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          
        $file = $_FILES["fileToUpload"]["name"];

        $query = "INSERT INTO `blog` (`blogName`,`blogUrl`,`blogDescription`,`blogImage`,`metaTitle`,`metaDescription`,`metaKeywords`, `date`,`userId`) VALUES (
        '".mysqli_real_escape_string($link, $_POST['blog-name'])."',
        '".php_slug($blog_name)."',
        '".mysqli_real_escape_string($link, $_POST['blog-description'])."',
        '$file',
        '".mysqli_real_escape_string($link, $_POST['meta-title'])."',
        '".mysqli_real_escape_string($link, $_POST['meta-description'])."',
        '".mysqli_real_escape_string($link, $_POST['meta-keywords'])."', 
        '$currentDate', '$id'
        )";

        $result = mysqli_query($link, $query);

        if($result)
        {
          move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
          unset($_SESSION['blog_name']);
          unset($_SESSION['blog_description']);
          unset($_SESSION['meta_title']);
          unset($_SESSION['meta_description']);
          unset($_SESSION['meta_keywords']);
          $success = "Blog Has Been Added Successfully";
          echo "<script>";
          echo "alert('Blog Has Been Added Successfully')";
          echo "</script>";
          /*header("Refresh:0");*/
        }
        
        else
        {
          $error = "Can not add New Blog";
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
             


            <h4 class="font-weight-bold mb-3">Blog Details</h4>

            <div class="form-group">
              <label for="blog-name">Blog Name</label>
              <input type="text" class="form-control" id="blog-name" name="blog-name" placeholder="Enter Blog Name"  value="<?php echo $_SESSION['blog_name']; ?>">
              <?php if($nameError != ''): ?>
                <div class='red-text'><?= $nameError ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="blog-description">Description (Must Contain atleast 300 Characters)</label>
              <textarea class="form-control" id="blog-description" name="blog-description" rows="4" placeholder="Enter About the blog.."><?php echo $_SESSION['blog_description']; ?></textarea>
              <?php if($descriptionError != ''): ?>
                <div class='red-text'><?= $descriptionError ?></div>
              <?php endif; ?>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="blog-image" name="fileToUpload">
              <label class="custom-file-label" for="blog-image">Choose Blog Image</label>
              <?php if($uploadError != ''): ?>
                <div class='red-text'><?= $uploadError ?></div>
              <?php endif; ?>
            </div>


            <h4 class="font-weight-bold mt-4 mb-3">Meta Details</h4>
            <div class="form-group">
              <label for="meta-title">Meta Title <small><a href="https://moz.com/learn/seo/title-tag" target="_blank">(Click Here to Learn More)</a></small></label>
              <input type="text" class="form-control" id="meta-title" name="meta-title" placeholder="Enter Meta Title" value="<?php echo $_SESSION['meta_title']; ?>">
              <?php if($metaTitleError != ''): ?>
                <div class='red-text'><?= $metaTitleError ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="meta-description">Meta Description <small><a href="https://moz.com/learn/seo/meta-description" target="_blank">(Click Here to Learn More)</a></small></label>
              <textarea class="form-control" id="meta-description" name="meta-description" rows="4" placeholder="Enter Meta Description"><?php echo $_SESSION['meta_description']; ?></textarea>
              
              <?php if($metaDescriptionError != ''): ?>
                <div class='red-text'><?= $metaDescriptionError ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="meta-keywords">Meta Keywords <small><a href="https://www.wordstream.com/meta-keyword" target="_blank">(Click Here to Learn More)</a></small></label>
              <textarea class="form-control" id="meta-keywords" name="meta-keywords" rows="5" placeholder="Enter Meta Keywords"><?php echo $_SESSION['meta_keywords']; ?></textarea>
              <?php if($metaKeywordsError != ''): ?>
                <div class='red-text'><?= $metaKeywordsError ?></div>
              <?php endif; ?>
            </div>


            <input type="submit" name="addBlog" id="addnewblog" class="btn btn-success mt-4" value="Add Blog">

          </form>
        </div>
      </div>
    </div>
  </main>


  <?php include("footer.php"); ?>