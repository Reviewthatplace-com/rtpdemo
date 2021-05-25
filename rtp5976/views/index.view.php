   <!-- ===================== header code ====================================== -->
   <?php include("partial/head.view.php"); ?>


   <!-- ===================== Nav Links ====================================== -->
   <nav class="navbar navbar-expand-lg navbar-dark" id="menu-bar">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">
        IntMedSoln
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
          <a class="nav-link main-nav-links" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#aboutus">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#patientPortal">Patient Resource Center</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#insurance">Insurance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#ourTeam">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link main-nav-links" href="#contactUs">Contact Us</a>
        </li>
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </div>  
</nav>
<!-- ===================== navbar links ====================================== -->

<div class="container" id="home">
  <!--Grid row-->
  <div class="row wow fadeIn justify-content-center" id="heroSectionRow">

    <!--Grid column-->
    <div class="col-md-6 col-xl-7 text-center text-md-left mt-lg-5 header-content">
      <div class="line"></div>
      <h2 class="pt-3">The Ideal You</h2>
      <h1>Integrative Medical Solution</h1>
      <h4>We provide the personal care and attention you deserve</h4>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 col-xl-5 mt-lg-5" id="reviewSide">
      <div class="container text-center">
        <iframe src="https://rtprms.com/home/reviews/3268" frameborder="0" scrolling=""></iframe>
      </div>
    </div>
    <!--Grid column-->

</div>
<!--Grid row-->
</div>
</header>




<!-- main -->
<main>

  <!-- Section : about us-->
  <section class="style-4" id="aboutus">
   <div class="container">
    <!-- main title -->
    <div class="row">
      <div class="col-xl-8 mx-auto text-center">
        <div class="section-title">
          <h4>Why To Choose Us</h4>  
        </div>
      </div>
    </div>


    <!-- main title -->
    <div class="row">
     <div class="col-xl-4 col-md-12">
      <div class="single-service">
       <i class="fa fa-clinic-medical"></i>
       <h3 class="h3-responsive">Modern Office</h3>
       <p>Our local office is centrally located to accommodate all patients in and around the Sacramento area. Come visit us at our office which is conveniently located on 19881 State Highway 88.</p>
     </div>
   </div>
   <div class="col-xl-4 col-md-12">
    <div class="single-service">
     <i class="fa fa-users"></i>
     <h3 class="h3-responsive"> ATTENTIVE STAFF</h3>
     <p>Our small but attentive staff are here to help you answer all your medical questions and help treat you so that you feel like your old self again. Let our staff help you overcome all your medical concerns today.</p>
   </div>
 </div>
 <div class="col-xl-4 col-md-12">
  <div class="single-service">
   <i class="fa fa-phone"></i>
   <h3 class="h3-responsive">TEXT/ CALL</h3>
   <h5>Doctor<br><span class="font-weight-bold">(209) 327-4801</span></h5>
   <h5>Pine Grove location<br> <span class="font-weight-bold">(209) 296-6811</span></h5>
   <h5>El Dorado Hills Location<br> <span class="font-weight-bold">(916) 934-0401</span></h5>
 </div>
</div>
</div>
</div>
</section>
<!-- Section: about us -->



<!-- Section: Patient Portal -->
<section id="patientPortal">
  <!-- container -->
  <div class="container">
    <!-- main title -->
    <div class="row">
      <div class="col-xl-8 mx-auto text-center">
        <div class="section-title">
          <h4>Patient Resource Center</h4>  
        </div>
      </div>
    </div>
    <!-- main title -->


    <!-- first row -->
    <div class="row">
      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- request forms -->
        <div class="row mb-5">
          <div class="col-2"><i class="fab fa-wpforms fa-2x portal-icon"></i></div>
          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">Request Forms</h5>
            <p class="grey-text">Save time and request any type of form you need from our office online.</p>
            <a data-toggle="modal" data-target="#requestForms" class="btn-holly">Click Here</a>
          </div>
        </div>
        <!-- request forms -->
      </div>
      <!-- single -->

      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- submit demo -->
        <div class="row mb-5">
          <div class="col-2"><i class="fas fa-desktop fa-2x portal-icon"></i></div>
          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">Submit Demo</h5>
            <p class="grey-text">Update your demographics; Address, Phone, Email, ect</p>
            <a data-toggle="modal" data-target="#submitDemo" class="btn-holly">Click Here</a>
          </div>
        </div>
        <!-- submit demo -->
      </div>
      <!-- single -->

      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- Auth release -->
        <div class="row mb-5">
          <div class="col-2">
            <i class="fas fa-receipt fa-2x portal-icon"></i>
          </div>

          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">Authorization Release</h5>
            <p class="grey-text">This forms gives us the ability to obtain or release your medical records.</p>
            <a href="https://www.pdffiller.com/en/link_to_fill/271575133.htm" target="_blank" class=" btn-holly">Click Here</a>
          </div>
        </div>
        <!-- Auth release -->
      </div>
      <!-- single -->

      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- New patient forms -->
        <div class="row mb-5">
          <div class="col-2">
            <i class="fas fa-signal fa-2x portal-icon"></i>
          </div>
          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">Be Seen Online</h5>
            <p class="grey-text">Powers Pediatrics now allows you the ability to be seen from your home. </p>
            <a  href="#" target="_blank" class="btn-holly">Click Here</a>
          </div>
        </div>
        <!-- New patient forms -->
      </div>
      <!-- single -->


      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- New patient forms -->
        <div class="row mb-5">
          <div class="col-2">
            <i class="fas fa-user-plus fa-2x portal-icon"></i>
          </div>
          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">New Patient Forms</h5>
            <p class="grey-text">If you are a new patient and save time on your first visit by filling out the New Patient Packet here.</p>
            <a  href="https://www.pdffiller.com/en/link_to_fill/271566094.htm" target="_blank" class="btn-holly">Click Here</a>
          </div>
        </div>
        <!-- New patient forms -->
      </div>
      <!-- single -->

      <!-- single -->
      <div class="col-xl-4 col-md-6">
        <!-- Book appointments -->
        <div class="row mb-5">
          <div class="col-2">
            <i class="far fa-calendar-alt fa-2x portal-icon"></i>
          </div>
          <div class="col-10">
            <h5 class="font-weight-bold mb-2 text-uppercase">Book Appointments</h5>
            <p class="grey-text">Skip the waiting on the phone and simply request an appointment online.</p>
            <a class="btn-holly"  data-toggle="modal" data-target="#requestAppointment">Click Here</a>
          </div>
        </div>
        <!-- Book appointments -->
      </div>
      <!-- single -->
    
    </div>
    <!-- first row -->

  </div>
  <!-- container -->
</section>
<!-- Section: Patient Portal -->



      <section class="style-3" id="services">
         <div class="container">
            <div class="row">
              <div class="col-xl-8 mx-auto text-center">
                <div class="section-title">
                  <h4>Services</h4>  
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://regeneratehealthmc.com/wp-content/uploads/2017/10/prolotherapy-icon-2.png" class="img-fluid service-img">
                     <h3>Prolotherapy</h3>
                     <p>Prolotherapy (proliferative therapy) is a treatment for patients with chronic joint and muscle pain; it is offered as an alternative to over-the-counter pain relievers (NSAIDs), corticosteroids and, in some cases, surgery.</p>
                  </div>
               </div>
               
               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://cdn4.iconfinder.com/data/icons/medical-set-3/100/70-512.png" class="img-fluid service-img">
                     <h3>Addiction Medicine</h3>
                     <p>We offer a customized opioid addiction program based on buprenorphine [Suboxone, Zubsolv] and complement it with a nutritional and supplement program aimed at correcting the chemical imbalances associated with opioid addiction.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://2t48n811sfrn2g5x1830y8t5-wpengine.netdna-ssl.com/wp-content/uploads/2016/04/pill.png" class="img-fluid service-img">
                     <h3>Suboxone</h3>
                     <p>SUBOXONE® sublingual film, which contains buprenorphine and naloxone, is a prescription drug used to treat opioid dependence in adults..</p>
                  </div>
               </div>
             
               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://image.flaticon.com/icons/svg/1667/1667696.svg" class="img-fluid service-img">
                     <h3>BOTOX® Cosmetic</h3>
                     <p>BOTOX® Cosmetic is a prescription drug that, when injected, temporarily paralyzes muscles. It contains a purified and safe form of botulinum toxin A, which is produced by the microbe that causes botulism.</p>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://www.renewedvitalitymd.com/wp-content/uploads/2016/04/bio-identical-hormone-replacement-icon.png" class="img-fluid service-img">
                     <h3>Bioidentical Hormone Replacement Therapy</h3>
                     <p>Hormone-replacement therapy is a treatment for women going through menopause. Symptoms of menopause can vary from moderate to severe, and include a slowed metabolism, hot flashes, night sweats, vaginal dryness, depression, memory loss, mood swings, weight gain and low libido.</p>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="single-service">
                     <img src="https://thebiostation.com/wp-content/uploads/2017/09/prp-hair-icon1.png" class="img-fluid service-img">
                     <h3>Platelet-rich plasma (PRP)</h3>
                     <p>Platelet-rich plasma (PRP) therapy is an effective treatment modality for a wide range of musculoskeletal injuries and conditions. PRP delivers concentrated platelets and growth factors to the site of injury, accelerating the healing process and regenerating the treated tissues.</p>
                  </div>
               </div>

            </div>
         </div>
      </section>
    <!-- Section Style 3 End -->

    <!-- section -->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto text-center">
            <div class="section-title">
              <h4>Latest Blogs</h4>  
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="http://www.desertsunpeds.com/sbtemplates/sbcommon/images/blog/Ear-Infection.jpg" alt="">
                        <span><h4>heading</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="http://www.desertsunpeds.com/sbtemplates/sbcommon/images/blog/Ear-Infection.jpg" alt="">
                        <span><h4>heading2</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="http://www.desertsunpeds.com/sbtemplates/sbcommon/images/blog/Ear-Infection.jpg" alt="">
                        <span><h4>heading3</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section>
    <!-- section -->


<!-- section : INsurance -->
<section id="insurance">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 mx-auto text-center">
        <div class="section-title">
          <h4>Accepted Insurance</h4>  
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-xl-6" id="insurancebg"></div>
      <!-- col -->
      <div class="col-xl-6 col-md-12" id="insuranceContent">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- medi -->
            <div class="col-md-12 mb-4">
              <div class="row aboutPara">

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>

                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Aetna</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Avmed</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Cigna</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Humana</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Wellcare / Staywell</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Simply / Amerigroup</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>


                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Medicaid</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>
                
                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Sunshine</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>


                <div class="col-lg-6 mb-2">
                  <!-- row -->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="col-8">
                      <h5 class="font-weight-bold">Sunshine – Ambetter</h5>
                    </div>
                  </div>
                  <!-- row -->
                </div>

                

                


              </div>

            </div>
            <!-- medi -->


        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- col -->
  </div>
</div> 
</section>
<!--section: insurance -->


<!-- section: our team -->
<section id="ourTeam">
  <div class="container">
    <!-- main title -->
    <div class="row">
      <div class="col-xl-8 mx-auto text-center">
        <div class="section-title">
          <h4>Meet The Doctor</h4>  
        </div>
      </div>
    </div>
    <!-- main title -->

    <div class="text-center">
      <img src="https://www.yaonahuac.com.mx/blog-politica/files/2011/03/Macario.png" class="img-fluid doctor-img">
      <h4 class="font-weight-bold">Macario R Vazquez MD</h4>
      <p><i class="fas fa-quote-left pr-2"></i>I graduated from UCLA in 1979 and received my medical degree from the University of Iowa in 1983. My postgraduate training was at Cedars Sinai Medical Center in Los Angeles in the field of Pathology.</p>
      <p> I started practicing General Medicine before entering the practice of Pathology because I found clinical practice much more rewarding ... <a href="" data-target="#doctorInfo" data-toggle="modal">Read More </a><i class="fas fa-quote-right pl-1"></i></p>
    </div>

   
  </div>
</section>
<!-- section: our team -->


<!-- Section : contact Us -->
<section id="contactUs">
  <div class="container">

    <div class="row">
      <div class="col-xl-8 mx-auto text-center">
        <div class="section-title">
          <h4>Contact us</h4>  
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-6 mb-4">
        <div class="embed-responsive embed-responsive-21by9" style="height: 100%;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3126.208617559624!2d-120.66049938514641!3d38.41354348292471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809a71a9a68280c9%3A0x91616ec22c86435b!2s19881%20CA-88%20%235%2C%20Pine%20Grove%2C%20CA%2095665%2C%20USA!5e0!3m2!1sen!2sin!4v1583949517318!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <!-- Default form contact -->
      <form class="text-center border  p-lg-5" action="#!">

          <p class="h4 mb-4 font-weight-bold">Contact us</p>

          <!-- Name -->
          <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

          <!-- Email -->
          <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

         
          <!-- Message -->
          <div class="form-group">
              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" placeholder="Message"></textarea>
          </div>

          <!-- Send button -->
          <button class="btn btn-info btn-block white-text" type="submit">Send</button>

      </form>
      <!-- Default form contact -->
      </div>

    </div>
  </div>
</section>
<!-- Section : contact Us -->



</main>
<!-- main -->


  <?php include("partial/footer.view.php"); ?>
  
