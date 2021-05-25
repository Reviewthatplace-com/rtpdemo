<div class="modal fade show" id="requestForms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class=""><i class="fab fa-wpforms"></i> Request form</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <!-- choose file -->
          <div class="form-group">
            <label for="fileToUpload">Upload Here</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
          </div>

          <!-- Patient Name -->
          <div class="form-group">
            <label for="patientName">Patient Full Name</label>
            <input type="text" id="patientName" class="form-control" name="patientName" required>
          </div>

          <!-- Email Address -->
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="form-control" name="email" required>
          </div>

          <!--Phone Number-->
          <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" class="form-control" name="phoneNumber" required>
          </div>

          <!-- Fax Number-->
          <div class="form-group">
            <label for="faxNumber">Fax Number</label>
            <input type="text" id="faxNumber" class="form-control" name="faxNumber" required>
          </div>

          <!-- Date-->
          <div class="form-group">
            <label>Date</label>
            <input type="date" id="date" class="form-control" name="date" required>
          </div>

          <!--Document Types -->
          <label>Document Types</label>
          <select class="form-control" name="documentTypes" required>
            <option selected value="">Choose Your Option</option>
            <option value="Physical">Physical</option>
            <option value="Shot Records">Shot Records</option>
            <option value="School Records">School Records</option>
            <option value="Others">Others</option>
          </select>

          <!--Collection Types -->
          <label class="mt-3">Collection Types</label>
          <select class="form-control" name="collectionTypes" required>
            <option selected value="">Choose Your Option</option>
            <option value="Pick Up In Office">Pick Up In Office</option>
            <option value="Email">Email</option>
            <option value="Fax">Fax</option>
            <option value="Others">Others</option>
          </select>

          <!--comment-->
          <div class="my-3">
            <label for="comment">Comment</label>
            <textarea id="comment" class="md-textarea form-control" rows="3" name="comment"></textarea>
          </div>
                

          <input type="submit" name="requestForms" class="btn btn-success waves-effect" value="Submit">
        </form>
      </div>
      <!--body -->

    </div>
    <!-- Content -->
  </div>
</div>
<!-- request forms -->


<!--  -->
<div class="modal fade show" id="submitDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header light-blue darken-3 white-text">
            <p class="heading lead">Submit Demo</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data">
              <!-- choose file -->
              <div class="form-group">
                <label for="fileToUpload">Upload Here</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
              </div>

              <!-- Patient Name -->
              <div class="form-group">
                <label for="patientName">Patient Full Name</label>
                <input type="text" id="patientName" class="form-control" name="patientName" required>
              </div>

              <!-- Email Address -->
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>

              <!--Phone Number-->
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" id="phoneNumber" class="form-control" name="phoneNumber" required>
              </div>

              <!-- Date-->
              <div class="form-group">
                <label>Date</label>
                <input type="date" id="date" class="form-control" name="date" required>
              </div>

              <label>Sex</label>
              <select class="form-control" name="gender" required>
                <option selected value="">Choose Your Option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>

              <!-- street -->
              <div class="form-group">
                <label for="street">Street</label>
                <input type="text" id="street" class="form-control" name="street" required>
              </div>

              <!-- city -->
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="form-control" name="city" required>
              </div>

              <label>State</label>
              <select class="form-control" name="state" required>
                <option selected value="">Choose Your Option</option>
               <option value="FL" selected>FL</option>
              <option value="AL">AL</option>
              <option value="AK">AK</option>
              <option value="AZ">AZ</option>
              <option value="AR">AR</option>
              <option value="CA">CA</option>
              <option value="CO">CO</option>
              <option value="CT">CT</option>
              <option value="DE">DE</option>
              <option value="GA">GA</option>
              <option value="HI">HI</option>
              <option value="ID">ID</option>
              <option value="IL">IL</option>
              <option value="IN">IN</option>
              <option value="IA">IA</option>
              <option value="KS">KS</option>
              <option value="KY">KY</option>
              <option value="ME">ME</option>
              <option value="MD">MD</option>
              <option value="MA">MA</option>
              <option value="MI">MI</option>
              <option value="MN">MN</option>
              <option value="MS">MS</option>
              <option value="MO">MO</option>
              <option value="MT">MT</option>
              <option value="NE">NE</option>
              <option value="NV">NV</option>
              <option value="NH">NH</option>
              <option value="NJ">NJ</option>
              <option value="NM">NM</option>
              <option value="NY">NY</option>
              <option value="NC">NC</option>
              <option value="ND">ND</option>
              <option value="OH">OH</option>
              <option value="OK">OK</option>
              <option value="OR">OR</option>
              <option value="PA">PA</option>
              <option value="RI">RI</option>
              <option value="SC">SC</option>
              <option value="SD">SD</option>
              <option value="TN">TN</option>
              <option value="TX">TX</option>
              <option value="UT">UT</option>
              <option value="VT">VT</option>
              <option value="VA">VA</option>
              <option value="WA">WA</option>
              <option value="WV">WV</option>
              <option value="WI">WI</option>
              <option value="WY">WY</option>
              </select>

              <!-- Zip -->
              <div class="form-group">
                <label for="Zip">Zip</label>
                <input type="text" id="Zip" class="form-control" name="zip" required>
              </div>

              <label>Insurance</label>
              <select class="form-control" name="insurance" required>
                <option selected value="">Choose Your Option</option>
                <option value="Self Pay" selected>Self Pay</option>
                <option value="Aetna">Aetna</option>
                <option value="Avmed">Avmed</option>
                <option value="Cigna">Cigna</option>
                <option value="Humana">Humana</option>
                <option value="Wellcare / Staywell">Wellcare / Staywell</option>
                <option value="Simply / Amerigroup">Simply / Amerigroup</option>
                <option value="Medicaid">Medicaid</option>
                <option value="Sunshine">Sunshine</option>
                <option value="Sunshine – Ambetter">Sunshine – Ambetter</option>
                <option value="United Health Care">United Health Care</option>
                <option value="CignaTri Care / Out of Network">CignaTri Care / Out of Network</option>
                <option value="Av-Med / True Blue">Av-Med / True Blue</option>
                <option value="Bluecross Blue Shield / True Blue">Bluecross Blue Shield / True Blue</option>
              </select>

              <!-- ssn -->
              <div class="form-group">
                <label for="ssn">SSN/ Insurance Id</label>
                <input type="text" id="ssn" class="form-control" name="ssn" required>
              </div>

              <!--Comment-->
              <div>
                <label for="comment">Comment</label>
                <textarea id="comment" class="form-control" rows="3" name="comment" required></textarea>
              </div>

              <input type="submit" name="submitDemo" class="btn btn-success waves-effect" value="Submit">
            </form>
          </div>
          <!-- body -->
        </div>
        <!-- Content -->
  </div>
</div>
<!-- submit demo -->

<!-- request appointment -->
<div class="modal fade show" id="requestAppointment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <p class="heading lead">Request Appointment</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <!-- choose file -->
          <div class="form-group">
            <label for="fileToUpload">Upload Here</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
          </div>

          <!-- Patient Name -->
          <div class="form-group">
            <label for="patientName">Patient Full Name</label>
            <input type="text" id="patientName" class="form-control" name="patientName" required>
          </div>

          <!-- Date-->
          <div class="form-group">
            <label>Date Of Birth</label>
            <input type="date" id="dob" class="form-control" name="dob"  required>
          </div>

          <!-- Email Address -->
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="form-control" name="email" required>
          </div>

          <!--Phone Number-->
          <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" class="form-control" name="phoneNumber" required>
          </div>

          <!-- Date-->
          <div class="form-group">
            <label>Date</label>
            <input type="date" id="datepicker" class="form-control" name="date" required onchange="DateChange();">
          </div>

          <!-- Time-->
          <div class="form-group">
            <label for="time">Select Time</label>
            <input type="text" id="time" class="form-control" name="time" required>
          </div>            
                 
                  
          <label>Appointment Type</label>
          <select class="form-control" name="appointmentType" required>
            <option selected value="">Choose Your Option</option>
            <option value="Physical">Physical</option>
            <option value="Sick Visit">Sick Visit</option>
            <option value="Telemedicine">Telemedicine</option>
          </select>

                  
          <!--Comment-->
          <div class="my-3">
            <label for="comment">Comment</label>
            <textarea id="comment" class="form-control" rows="3" name="comment" required></textarea>
          </div>
                

          <input type="submit" name="bookAppointment" class="btn btn-success waves-effect" value="Submit">
        </form>
      </div>
      <!--body -->
    </div>
    <!-- Content -->
  </div>
</div>
<!-- request appointment -->



<div class="modal fade show" id="doctorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4>Macario R Vazquez MD</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body">
        <img src="https://www.yaonahuac.com.mx/blog-politica/files/2011/03/Macario.png" class="img-fluid doctor-img">
        <p>I graduated from UCLA in 1979 and received my medical degree from the University of Iowa in 1983. My postgraduate training was at Cedars Sinai Medical Center in Los Angeles in the field of Pathology.</p>

        <p>I started practicing General Medicine before entering the practice of Pathology because I found clinical practice much more rewarding. Having practiced General Medicine for ten years and facing personal health issues, the limitations of traditional medicine became personally and painfully obvious to me. Looking for answers prompted me to expand my training into diverse fields of healthcare, such as Integrative Medicine, Anti-Aging Medicine, Orthomolecular Medicine, Acupuncture, and Homeopathy plus other fields. Combining different aspects [which have scientific validity] from these diverse fields of healthcare, we are often able to successfully address medical conditions which otherwise have no solutions or are treated with limited success using the current traditional medical model.</p>

        <p>I like to use a patient centered approach in which a patient-physician partnership is used to develop the best treatment strategy for the condition present. Due to my diverse interests in healthcare and extensive training in its different fields I have a medical practice which offers the full spectrum of General Integrative Medicine along with a vast selection of treatments which are complementary to each other and which are all delivered with enthusiasm, knowledge and expertise.</p>

        <p>One of the treatments I would like to highlight in the field of Musculoskeletal Medicine is Prolotherapy. Prolotherapy is an injection technique used to treat acute or chronic injuries of the joints and connective tissues of the body. Injuries which can be successfully treated with this technique include severe degenerative joint disease, chronic tendonitis, chronic neck and low back pain and others. The technique was developed in the 1930’s and has been used with great success since. The procedure involves injecting different solutions into the injured tissues to trigger the bodies natural healing. Currently the most advanced form of this technique involves the injection of concentrated platelets from the patients own blood [PRP] or concentrated bone marrow aspirate, sometimes referred to as stem cell prolotherapy. Prolotherapy is an exciting treatment which can offer a solution to the most common musculoskeletal ailments and I offer all the different treatment modalities mentioned.</p>
        <p>If you have any questions please feel free to contact and I will be happy to address them.</p>
      </div>
      <!--body -->

    </div>
    <!-- Content -->
  </div>
</div>
<!-- request forms -->


