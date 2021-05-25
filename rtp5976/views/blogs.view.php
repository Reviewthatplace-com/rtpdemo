<?php 
  include("../core/connection.php");
  include("../core/functions.php");
  if(isset($_POST['blogRead']))
  {
    $blogName = mysqli_real_escape_string($link, $_POST["blogName"]);
    header("location:".php_slug($blogName)."");
  }
  $post_url = $_GET["post_url"];  
  $sql = "SELECT * FROM blog WHERE `blogUrl` = '".$post_url."'";  
  $result = mysqli_query($link, $sql); 
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Powers Pediatrics</title>  

  <meta name="title" content="<?php echo $row['metaTitle']; ?>">
  <meta name="description" content="<?php echo $row['metaDescription']; ?>">
  <meta name="keywords" content="<?php echo $row['metaKeywords']; ?>">


  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="revisit-after" content="30 days">
  <meta name="author" content="Rtpdemo.com">

    <!-- ==================== Open Graph Tags ========================================== -->
    <meta property="og:url"          content="https://www.powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" />
    <meta property="og:type"         content="Website" />
    <meta property="og:title"        content="<?php echo $row['metaTitle']; ?>" />
    <meta property="og:description"  content="<?php echo $row['metaDescription']; ?>" />
    <meta property="og:image"        content="<?php echo "https://powerspediatrics.com/admin/blogImg/".$row['blogImage']; ?>" />
    <meta property="fb:app_id"       content="3552530104820960"/>
    <!-- ==================== Open Graph Tags ========================================== -->


    <!-- ===================== Facebook Pixel Code ====================================== -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1393493420830698'); 
        fbq('track', 'PageView');
      </script>
      <noscript>
       <img height="1" width="1" 
       src="https://www.facebook.com/tr?id=1393493420830698&ev=PageView
       &noscript=1"/>
    </noscript>
    <!-- ===================== Facebook Pixel Code ====================================== -->


    <!-- favicon -->
    <link rel="icon" href="..assest/img/logo/logo.png" type="image/png" sizes="16x16">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
    <!-- rtp css -->
    <link href="../assest/css/rtp.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../assest/css/main.css" rel="stylesheet">
    <link href="../assest/css/super.css" rel="stylesheet">
    <link href="../assest/css/allergy.css" rel="stylesheet">
    <link href="../assest/css/typography.css" rel="stylesheet">
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  </head>

  <body data-spy="scroll" data-target="#navbar-menu">
    <header>
      <div class="white" id="topbar">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-4">
             <a class="navbar-brand" href="https://powerspediatrics.com/">
              <img src="../assest/img/logo/logo.png" alt="powers pediatrics logo" id="topLogo" class="img-fluid">
              <span id="logoSideText" class="font-weight-bold text-uppercase">Si Habla Español<br>Nou Pale Kreyòl</span>
            </a>
          </div>


          <div class="col-xl-4 forDesktop pt-3">

          </div>

          <div class="col-xl-3 col-8 pt-4">
            <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" id="english-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a>
            <a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" id="french-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a>
            <a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" id="german-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a>
            <a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl" id="italian-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a>
            <a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" class="gflag nturl" id="port-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="Portuguese" />
            </a><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" id="russian-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a>
            <a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" id="spanish-tag"><img src="https://gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" />
            </a>
            <br>
            <select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
          </div>
        </div>
      </div>
    </div>
  

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark" id="menu-bar">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">
        Powers Pediatrics
      </a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <ul class="navbar-nav mr-auto" id="navbar-scrollspy">
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#aboutus">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#patientPortal">Patient Resource Center</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#insurance">Insurance</a>
        </li>
        
        <?php
          $query = "SELECT * FROM blog";
          $result = mysqli_query($link, $query);
        ?>
        <?php if(mysqli_num_rows($result) > 0): ?>
          <li class="nav-item">
            <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#blog">Blogs</a>
          </li>
        <?php else: ?>
          <?php echo ""; ?>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link main-nav-links" href="https://powerspediatrics.com/#ourTeam">Our Team</a>
        </li>
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </div>  
</nav>
<!--/.Navbar-->
</header>

<main>
  <div class="container py-5">  
    <div class="row">
      <div class="col-xl-8">
        <?php 
          $sql = "SELECT * FROM blog WHERE `blogUrl` = '".$post_url."'";  
          $result = mysqli_query($link, $sql); 
        ?>

        <?php if(mysqli_num_rows($result) > 0): ?> 

          <?php while($row = mysqli_fetch_array($result)): ?> 
            <h3 class="font-weight-bold"><?= $row['blogName']; ?></h3> 
            <h5 class="red-text">By Admin</h5>
            <h5 class="dateLine">Posted By <?php echo $row['date']; ?></h5>
            <img class="img-fluid" src="../admin/blogImg/<?php echo $row['blogImage']; ?>">
            <p><pre><?= $row['blogDescription']; ?></pre></p>
            <!-- Sharingbutton Facebook -->
            <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
              <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
                <i class="fab fa-facebook-f"></i>
              </div>
            </div>
          </a>

          <!-- Sharingbutton Twitter -->
          <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
            <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
              <i class="fab fa-twitter"></i>
            </div>
          </div>
        </a>


        <!-- Sharingbutton LinkedIn -->
        <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">
          <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
      </a>

    <?php endwhile; ?>

    <?php else: ?>
      <?php echo '404 Page'; ?>
    <?php endif; ?>  
  </div>

  <div class="col-xl-4 border p-3">
    <h3 class="font-weight-bold mb-4">Recent Blogs</h3>
    <?php 
    $post_url = $_GET["post_url"];  
    $sql = "SELECT * FROM blog WHERE `blogUrl` != '".$post_url."'";  
    $result = mysqli_query($link, $sql); 
    ?>


    <?php if(mysqli_num_rows($result) > 0): ?> 
      <?php while($row = mysqli_fetch_array($result)): ?> 
        <!-- single -->
        <div class="row mb-4">
          <div class="col-xl-4">
            <img class="img-fluid" src="../admin/blogImg/<?php echo $row['blogImage']; ?>">
          </div>
          <div class="col-xl-8">
            <h6 class="font-weight-bold"><?php echo $row['blogName']; ?></h6>
            <form method="post">
              <input type="hidden" name="blogName" value="<?php echo $row['blogName']; ?>">
              <input type="submit" name="blogRead" class="box_btn m-0" value="Read More">
            </form>
          </div>
        </div>
        <!-- single -->
      <?php endwhile; ?>


      <?php else: ?>
        <?php echo 'No POST'; ?>
      <?php endif; ?>  

    </div>
  </div>


  <hr>
  <h2 class="font-weight-bold mb-3">Recent Blogs</h2>
  <!-- row -->
  <div class="row">
    <?php 
    $query = "SELECT * FROM blog LIMIT 3";
    $result = mysqli_query($link, $query);
    ?>

    <?php while($row = mysqli_fetch_array($result)): ?>
     <div class="col-lg-4 col-md-6 mb-3">
      <!-- Single Blog -->
      <div class="single-blog">
       <div class="blog-img">
        <?php echo "<img  src='../admin/blogImg/".$row['blogImage']."'>";  ?>
      </div>
      <div class="blog-content">
        <div class="blog-title">
         <h4 class="font-weight-bold"><?php echo $row['blogName']; ?></h4>
         <div class="meta">
          <ul>
           <li><?php echo $row['date']; ?></li>
         </ul>
       </div>
     </div>
     <p><?php echo substr($row['blogDescription'], 0, 70)."..."; ?></p>

     <!-- Sharingbutton Facebook -->
     <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
      <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
        <i class="fab fa-facebook-f"></i>
      </div>
    </div>
  </a>

  <!-- Sharingbutton Twitter -->
  <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
      <i class="fab fa-twitter"></i>
    </div>
  </div>
</a>


<!-- Sharingbutton LinkedIn -->
<a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">
  <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
    <i class="fab fa-linkedin-in"></i>
  </div>
</div>
</a>




<form method="post">
  <input type="hidden" name="blogName" value="<?php echo $row['blogName']; ?>">
  <input type="submit" name="blogRead" class="box_btn" value="Read More">
</form>

</div>
</div>
</div>
<?php endwhile; ?>


</div>
<!-- row -->
</div>  
</main>


<!-- Footer -->
  <footer class="page-footer font-small">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-5 pb-3">

        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Operational Hours</h6>

          <div class="row mb-2">
            <div class="col">
              <span class="font-weight-bold">Monday To Friday</span>
            </div>

            <div class="col">
              9 AM to 5 PM
            </div>
          </div>

          <div class="row mb-2">
            <div class="col">
              <span class="font-weight-bold">Saturday</span>
            </div>

            <div class="col">
              9 AM to 12:30 PM
            </div>
          </div>

         
          <div class="row mb-2">
            <div class="col">
              <span class="font-weight-bold">Sunday</span>
            </div>

            <div class="col">
              Closed
            </div>
          </div>
        </div>
        <!-- Grid column -->


       
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>

          <div class="row mb-3">
            <div class="col-md-12"><i class="fas fa-home mr-3"></i>7037 Rose Ave Orlando FL 32810</div>
          </div>

          <div class="row mb-3">
            <div class="col-md-12"><i class="fas fa-envelope mr-3"></i>info@powerspediatrics.com</div>
          </div>

          <div class="row mb-3">
            <div class="col-md-12"><i class="fas fa-phone mr-3"></i>407-286-2965</div>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2020 Copyright:
            <a href="#" class="white-text">
              ReviewThatPlace.com
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/powerspediatrics/" target="_blank">
                  <i class="fab fa-facebook-f white-text"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/powerspediatrics/" target="_blank">
                  <i class="fab fa-instagram white-text"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.youtube.com/channel/UCxUp5ruTXDbiG8Hl_ljqm9A/" target="_blank">
                  <i class="fab fa-youtube white-text"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://linkedin.com/company/powerspediatrics" target="_blank">
                  <i class="fab fa-linkedin white-text"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/PowersPediatric" target="_blank">
                  <i class="fab fa-twitter white-text"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.yelp.com/biz/powers-pediatrics-orlando" target="_blank">
                  <i class="fab fa-yelp white-text"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.google.com/search?q=powers+pediatrics&rlz=1C1CHBF_enUS796US796&oq=powers+pediatrics&aqs=chrome..69i57j69i60j69i65j0l3.2983j0j4&sourceid=chrome&ie=UTF-8" target="_blank">
                  <i class="fab fa-google-plus-g white-text"></i>
                </a>
              </li>

             <!--   <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.zocdoc.com/doctor/najm-us-sehr-ansari-md-141649" target="_blank">
                  <img src="https://s3.amazonaws.com/spoke-profiles-prod-assets/avatars/210x210h/b2ce745cc83082c5b40c457227a46bd0da45aa83.png" alt="zocdoc logo" class="img-fluid footer-icon">
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.yellowpages.com/orlando-fl/mip/powers-pediatrics-12482482" target="_blank">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Yp_lgt_s_rgb_pos.jpg" class="img-fluid footer-icon" alt="yellowpages logo">
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.vitals.com/doctors/Dr_Najmus_Ansari.html" target="_blank">
                  <img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/masthead2015/logo-webmd-site.png" alt="vitals logo" class="img-fluid footer-icon">
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://doctor.webmd.com/practice/powers-pediatrics-ef77c5cc-90e1-e511-a966-001f29e3eb44-overview" target="_blank">
                  <img src="img/footer/vital.jpg" class="img-fluid footer-icon" alt="webmd logo">
                </a>
              </li> -->
              
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../assest/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../assest/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../assest/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../assest/js/custom.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96678346-2"></script>

</body>

</html>