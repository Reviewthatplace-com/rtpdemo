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
      <div class="modal-body mb-0">
        <form method="post" enctype="multipart/form-data">


          <!-- choose file -->
          <div class="form-group">
            <label for="fileToUpload">Upload Here</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
          </div>


          <div class="row">
            <div class="col-xl-6">
              <div class="form-group">
                <label for="patientName">Patient Full Name</label>
                <input type="text" id="patientName" class="form-control" name="patientName" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Email Address -->
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!--Phone Number-->
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" class="form-control" name="phoneNumber" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Fax Number-->
              <div class="form-group">
                <label for="faxNumber">Fax Number</label>
                <input type="tel" id="faxNumber" class="form-control" name="faxNumber" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Date-->
              <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" id="dob" class="form-control" name="date" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!--Document Types -->
              <span class="mt-3 mb-1">Document Types</span>
              <select class="form-control" name="documentTypes" required>
                <option selected value="">Choose Your Option</option>
                <option value="Physical">Physical</option>
                <option value="Shot Records">Shot Records</option>
                <option value="School Records">School Records</option>
                <option value="Others">Others</option>
              </select>
            </div>

            <div class="col-xl-6">
                <!--Collection Types -->
                <span class="mt-3 mb-1">Collection Types</span>
                <select class="form-control" name="collectionTypes" required>
                  <option selected value="">Choose Your Option</option>
                  <option value="Pick Up In Office">Pick Up In Office</option>
                  <option value="Email">Email</option>
                  <option value="Fax">Fax</option>
                  <option value="Others">Others</option>
                </select>
            </div>
          </div>

         

          <!--comment-->
          <div class="form-group mt-4">
            <label for="comment">Comment</label>
            <textarea id="comment" class="md-textarea form-control" rows="3" name="comment"></textarea>
          </div>
          
          <div class="g-recaptcha" data-sitekey="6LeIJNwUAAAAAKN6VQCUtsExxaxsFENaFSCQPw-r"></div>

          <input type="submit" name="requestForms" class="btn btn-success waves-effect mt-3" value="Submit">
        </form>

      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- request forms -->


<!-- request appointment -->
<div class="modal fade show" id="requestAppointment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class=""><i class="far fa-calendar-check"></i> Request Appointment</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <form method="post" enctype="multipart/form-data">


          <!-- choose file -->
          <div class="form-group">
            <label for="fileToUpload">Upload Here</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
          </div>


          <div class="row">
            <div class="col-xl-6">
              <!-- Patient Name -->
              <div class="form-group">
                <label for="patientName">Patient Full Name</label>
                <input type="text" id="patientName" class="form-control" name="patientName" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Email Address -->
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!--Phone Number-->
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" class="form-control" name="phoneNumber" required>
              </div>
            </div>
         
            <div class="col-xl-6">
              <!-- Date-->
              <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" id="dob" class="form-control" name="date" required>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Date-->
              <div class="form-group">
                <label for="datepicker">Date</label>
                <input type="date" id="datepicker" class="form-control" name="date" required>
              </div>
            </div>

            <div class="col-xl-6">
              <!-- Time-->
              <div class="form-group">
                <label for="time">Select Time</label>
                <input type="time" id="time" class="form-control" name="time" required>
              </div>         
            </div>

            <div class="col-xl-6">
              <label>Appointment Type</label>
              <select class="form-control" name="appointmentType" required>
                <option selected value="">Choose Your Option</option>
                <option value="Physical">Physical</option>
                <option value="Sick Visit">Sick Visit</option>
                <option value="Telemedicine">Telemedicine</option>
              </select>
            </div>

          </div>

         

          <!--comment-->
          <div class="form-group mt-4">
            <label for="comment">Comment</label>
            <textarea id="comment" class="md-textarea form-control" rows="3" name="comment"></textarea>
          </div>
          
          <div class="g-recaptcha" data-sitekey="6LeIJNwUAAAAAKN6VQCUtsExxaxsFENaFSCQPw-r"></div>

          <input type="submit" name="bookAppointment" class="btn btn-success waves-effect mt-3" value="Submit">
        </form>

      </div>
    </div>
    <!-- Content -->
  </div>
</div>
  <!-- request appointment -->

<!-- telemedicine -->
<div class="modal fade show" id="telemedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-md" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">Telemedicine</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <img src="img/s1.png" class="img-fluid mb-4" alt="Telemedicine">
        <p>Through our telemedicine services, SIPMD is able to provide quality care with our on-site Certified Health professionals through video conference call to our patients who are in need of accurate diagnosis that doesn’t require immediate treatment.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- telemedicine -->

<!-- mobile medical solution -->
<div class="modal fade show" id="mobileMedical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-md" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4>Mobile Medical Solution</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <img src="img/s2.png" class="img-fluid mb-4" alt="Mobile Medical Solution">
        <p>Treating patients in their homes made easy with our Mobile medical solutions. Providing patients efficient diagnostic testing solutions, mobile radiology, and pharmacy delivery to your door step.</p>
        <p>Whether you are visiting with our specialist at home, in our clinic or through telemedicine, we want our patients to have easy access to our healthcare providers.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- mobile medical solution -->


<!-- House Call Clinicians -->
<div class="modal fade show" id="houseCall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-md" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">House Call Clinicians</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <img src="img/s3.png" class="img-fluid mb-4" alt="House Call Clinicians">
        <p>SIPMD brings comprehensive on-site, personalized care to patients, reduces the stress, hassle of transportation, and wait time issues often involved with clinicians visits. We have internal staff working as Medical Assistants and Schedulers to help set up appointments that are most convenient for the patients.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- House Call Clinicians -->

<!-- telemedicine -->
<div class="modal fade show" id="clinicLoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-md" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">Our Clinic Locations</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <img src="img/s4.png" class="img-fluid mb-4" alt="Our Clinic Locations">
        <p>Equipped with both Primary Care and Specialty services, SIPMD Clinics are capable of delivering personalized care, with state-of-the-art technology such as iHealth or Telemedicine. We also provide Chronic Care Management, helping patients stabilize their health status, and eventually minimize hospital readmissions. SIPMD Clinics are located in different locations across Arizona, providing patients with the ease of traveling.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- telemedicine -->
 

  <!-- FAQ -->
  <div class="modal fade show" id="faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class=""><i class="fab fa-wpforms pr-2"></i>FAQ</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <p class="font-weight-bold">Q:  Do you have to be disabled or homebound to have SIPMD providers come to you?</p>
        <p>A:   Almost all elderly patients can utilize and enjoy the benefits of SIPMD. The clinician will perform the first visit to determine your qualification.</p>


        <p class="font-weight-bold">Q:   Can SIPMD Physicians Network be my primary doctor?</p>
        <p>A:   Our primary care program (PCP) is designed to reduce readmissions and unnecessary hospitalizations.  Therefore, we are not here to replace your primary doctor. Besides bridging the gap, we can be your primary doctor if you don't have one yet.  Our team includes only board-certified Family Medicine and Internal Medicine physicians along with certified podiatrists, psychologist, nurse practitioners, physician assistants, physical and occupational therapists. We all have at least 10 years of experience.</p>

        <p class="font-weight-bold">Q:   My office based physician says that physicians do not make house calls. Is that true?</p>
        <p>A:   No. Since 1998 insurance companies have encouraged house calls as an attractive feature for a physician’s practice and have encouraged house calls by licensed medical providers.</p>

        <p class="font-weight-bold">Q:   Do I need a referral for a physician house call visit from my office based physician?</p>
        <p>A:   No, just call us at (623) 240-1110 to become registered with SIPMD. You can also “request a visit” via our website www.sipmd.com</p>

        <p class="font-weight-bold">Q: What is the cost of a home visit from SIPMD?</p>
        <p>A: If you have Medicare or Medicare with supplemental insurance, Medicare with Medicaid, or private insurance, there is no extra charge for a service visit. If your insurance company requires a deductible be paid, you will be responsible for that payment.  We will verify your insurance coverage prior to making our first house call visit with you.</p>

        <p class="font-weight-bold">Q: Does SIPMD provide Emergency Medical Care?</p>
        <p>A: No. If you are experiencing a true medical emergency, call 911 immediately</p>


        <p class="font-weight-bold">Q: How much does a SIPMD visit cost?</p>
        <p>A: SIPMD visits typically run between $150-$300 and the percentage of the total bill you’re responsible for is determined by your insurance plan. On average, most patients pay $5-$50 after insurance. Note that if you have a high deductible plan, you will need to meet your deductible before your insurance will cover the cost. SIPMD will bill your insurance directly. If patients are uninsured, SIPMD accepts a flat rate of $160 at the time of treatment via credit card. This flat rate is for everything that we do, which includes medications delivered, procedures performed, and any lab tests obtained.</p>


        <p class="font-weight-bold">Q:   What medical insurance does SIPMD Physicians Network accept?</p>
        <p>A:   SIPMD Physicians Network accepts Medicare, Medicare with supplemental insurance, Medicare with Medicaid, most private insurances, and provides discounts for uninsured patients.</p>

        <p class="font-weight-bold">Q:   Does SIPMD Physicians Network accept Health Maintenance Organizations (HMO) insurances?</p>
        <p>A:   Yes, SIPMD Physicians Network does accept certain HMOs, i.e. BCBS advantage, healthnet, united health care, etc.</p>


        <p class="font-weight-bold">Q:   Who are the SIPMD providers?</p>
        <p>A:   SIPMD’s providers are board-certified physicians, physician assistants and nurse practitioners with significant experience evaluating acute injuries and illness in the emergency department. In fact, our providers are the same providers that you may see in your local emergency room. SIPMD arrives on scene with a nurse practitioner and a medical technician via our vehicle with a board-certified ER physician always available virtually. Using the SIPMD mobile app to request care even allows for the healthcare consumer to see which providers from the SIPMD medical team will be arriving to treat you, allowing for an additional sense of security and comfort.</p>

        <p class="font-weight-bold">Q: Does SIPMD Network see patients in independent, assisted, group home and memory care communities?</p>
        <p>A: Yes. SIPMD Physicians Network specializes in this type of service setting and it is our core business. With the consent of the patient and/or a relative, or the legal guardian/medical power of attorney (POA) for the patient SIPMD will make a visit to any of these communities. We also recently expanded to single home with our patented telemedicine.</p>


        <p class="font-weight-bold">Q: Does SIPMD have other physicians (specialists) or diagnostic services?</p>
        <p>A: Yes, SIPMD has relationships with a variety of specialists, including Podiatrists, Psychologists, Cardiologists, Urologists and others.  We also offer physical and occupational therapists.  SIPMD also has relationships with mobile diagnostic imaging and laboratory services. With our PCP orders, you can have these services in your home.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- FAQ -->



<!-- Terms & condition -->
  <div class="modal fade show" id="termsAndCond" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class=""><i class="fab fa-wpforms pr-2"></i>TERMS OF SERVICE</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <h4>Seriously Ill Populated MD (sipmd.com)</h4>
        <p class="font-weight-bold">Effective Date February 12, 2020</p>

        <p>SIP MD (Seriously Ill Populated MD) operates on the website located at http://www.sipmd.com  and directdocdial.com other related websites and mobile applications with links to these Terms of Service. We offer onsite and offsite medical services that enables our members to report their health history and engage with healthcare professionals. By accessing the Site, you agree to be bound by these Terms of Service and all  other terms and policies that appear on the Site. </p>

        <h5 class="font-weight-bold mb-2">Our Services</h5>
        <p>SIP MD is a network of Clinicians, Specialists and Nurse practitioners that provides medical services to residents in senior retirement communities, assisted, independent living, group home and memory care communities.</p>

        <p>In order to use the site and be a member/new patient, you must sign up with our new patient tab and provide us with certain personal information, including (without limitation) your name, address, email address, telephone number, date of birth, name of your primary care provider (if you have any) and any insurance information to create a user account. You can also contact us or call us if you have any assistance on signing up, one of our representatives will help you out on filling out forms or in registering in our portals. All given information is always kept confidential. A complete statement of HIPAA compliance is also stated on our website for your protection.</p>

        <p>Unless stated otherwise, any additions, new features that augment or enhance the current Application shall be subject to the Agreement.</p>


        <h5 class="font-weight-bold mb-2">Use of the Application</h5>
        <p>By submitting the information and details to create your account, it is imperative that you provide accurate and truthful information about your identity and your health and physical condition during the registration process.</p>


        <h5 class="font-weight-bold mb-2">Eligibility</h5>
        <p>You must be 18 years of age or older to access and use the Application and any of our services provided. If you are not of legal age (17 years of age and below) in need of medical services please ask a guardian or parent. If you are requesting medical services for a minor, you must verify that you are the parent, guardian or adult responsible for the minor.</p>
        <p>You must notify us immediately of any change in your eligibility to use the site including changes in medical condition or physical fitness, breach of security, or unauthorized use of your account with SIPMD.</p>

        <h5 class="font-weight-bold mb-2">Payment</h5>
        <p>There is no charge to register with us or to use our Site on your PC or mobile device.Charges only apply when you actually access and use the medical services by scheduling a consultation with one of our Health Care Professionals. All charges are introduced, we will inform you accordingly and allow you to either continue or terminate your Account.</p>

        <p>All cancelled appointments or cancelled in-home consultation are also charged at a reasonable rate.</p>

        <p>The costs of the medical services provided by our health care professionals varies and is determined based on the complexity of the medical care provided, procedures and lab services performed and supplies used. Charges are billed to your insurance carrier for all medical services availed in accordance with the Treatment form signed and authorized by you (the patient).</p>


        <h5 class="font-weight-bold mb-2">Account Security</h5>
        <p>All confidentiality, activities and details under your username and password are solely your responsibility. SIP MD will not be liable for any loss or damage arising from the failure to comply with this provision. You should use particular action when accessing your account from a public or shared computer or using encrypted email to discuss private matters.</p>

        <h5 class="font-weight-bold mb-2">Disclaimer</h5>
        <p class="font-weight-bold red-text">DO NOT USE OUR SITE TO SEEK FOR MEDICAL SERVICES FOR SOMEONE WHO IS UNCONSCIOUS, NOT BREATHING OR GASPING FOR AIR, HAVING CHEST PAIN, UNCONTROLLABLY BLEEDING, OR ANY OTHER SYMPTOMS THAT MAY REQUIRE IMMEDIATE MEDICAL ASSISTANCE. FOR IMMEDIATE MEDICAL ASSISTANCE PLEASE CALL 911 OR GO TO THE NEAREST HOSPITAL.</p>


        <p class="font-weight-bold">To the fullest extent permissible under applicable law, you have acknowledged and agreed to the Terms of Service.</p>
        <p>For questions about our Terms of services or medical services please contact us at info@sipmd.com</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- Terms & condition -->

<!-- auth release -->
<div class="modal fade show" id="authReadMore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">Read More</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <p>[As an example, I understand that Provider does not have an in-house laboratory and uses an outsourced medical lab, and my lab work and personal information is shared to accomplish testing as required or requested. In accordance with the Health Insurance Portability & Accountability Act of 1996 (HIPAA), Provider will keep all of your health information confidential. Note that for the purposes of medical treatment (e.g. prescriptions, discussing your case with a consulting physician), payment (e.g. insurance paperwork which shows your diagnosis and corresponding diagnostic codes), health care operations (e.g. self auditing our medical records, quality improvement), and medico-legal considerations (e.g. medical examiners, law enforcement officials, public health authorities), your health information may be obtained or disclosed by telephone, e-mail, mail, or facsimile. The Practice may incorporate the limited summary of my health record it receives through State Health Information Exchange - HealthCurrent into the Practice's own clinical record. From then on the Practice may further disclose such information only in accordance with the rules that apply to it as a covered provider under HIPAA and 42 CFR Part 2.</p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- auth release -->


<!-- auth release -->
<div class="modal fade show" id="hipaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">HIPAA Notice of Privacy Practices (NPP)</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <p>THIS NOTICE DESCRIBES HOW MEDICAL INFORMATION ABOUT YOU MAY BE USED AND DISCLOSED AND HOW YOU CAN GET ACCESS TO THIS INFORMATION. PLEASE REVIEW IT CAREFULLY.</p>

        <p><span class="font-weight-bold">“Protected Health Information” (PHI)</span> is information about you, including demographic information, that may identify you and that relates to your past, present or future physical or mental health or condition and related health care services.</p>

        <p>SIP MD is required by law to maintain the privacy of your PHI, and provide you with this notice of our legal duties and privacy practices with respect to your protected health information, and your rights to access and control it. We reserve the right to change the terms of this notice and will notify you of such changes. You then have the right to object or withdraw as provided in this notice. If you have any questions or objections to this form, please contact our Privacy and Security Officer. </p>

        <h5 class="font-weight-bold">Privacy and Security Officer contact information</h5>
        <p>Our Privacy and Security Officer can be contacted by mail at 2375 E. Camelback Rd., Suite 600, Phoenix, Arizona 85016; by phone at (623) 340-1110; or by email at PrivacyOfficer@sipmd.com. </p>


        <h5 class="font-weight-bold">Uses and Disclosures of Protected Health Information</h5>
        <p>Your PHI may be used and disclosed by your healthcare provider, our office staff and others outside of our office that are involved in your care and treatment for the purpose of providing health care services to you, to pay your health care bills, to support the operation of the physician’s practice, and any other use or disclosure required by law.</p>

        <p><span class="font-weight-bold">Treatment:</span> We will use and disclose your PHI to provide, coordinate, or manage your health care and any related services. This includes the coordination or management of your health care with a third party. For example, we would disclose our PHI, as necessary, to a home health agency that provides care to you. For example, your PHI may be provided to a physician to whom you have been referred to ensure the physician has the necessary information to diagnose or treat you. </p>


        <p><span class="font-weight-bold">Payment:</span> Your PHI will be used, as needed to obtain payment for your health care services. For example, obtaining approval for a hospital stay may require that your relevant PHI be disclosed to the health plan to obtain approval for the hospital admission. </p>


        <p><span class="font-weight-bold">Healthcare Operations:</span> We may use or disclose, as-needed, your PHI in order to support the business activities of this practice. These activities include, but are not limited to, quality assessment activities, employee review activities, training medical students, licensing, and conducting or arranging for other business activities. For example, we may disclose your PHI to medical school students that see our patients. We may use or disclose your PHI, as necessary, to contact you to remind you of your appointment. </p>


        <p class="font-weight-bold">We may use or disclose your protected health information in the following situations without your authorization. </p>
        <ul>
          <li>To Business Associates who provide us with services necessary to operate and function
as a medical practice (for example transcription services). We will only provide the
minimum information necessary for the associate(s) to perform their function. </li>
          <li>In compliance with federal, state or local laws.</li>
          <li>To assist in public health activities such as tracking diseases or medical devices. </li>
          <li>To inform authorities to protect victims of abuse or neglect. </li>
          <li>In compliance with Federal or state health oversight activities such as fraud investigations. </li>
          <li>In response to law enforcement officials or to judicial orders, subpoenas or other process orders.</li>
          <li>To give coroners, medical examiners and funeral directors information necessary for them to fulfill their duties.</li>
          <li>To facilitate organ and tissue donation or procurement. </li>
          <li>For research done in compliance with laws governing research. </li>
          <li>To avert a threat to health or safety.</li>
          <li>To assist in specialized government functions such as national security, intelligence and protective services.</li>
          <li>To inform military and veteran authorities if you are an armed forces member (active or reserve).</li>
          <li>To inform correctional institutions if you are an inmate. </li>
          <li>To inform workers’ compensation carriers or your employer if you are injured at work. To recommend treatment alternatives. </li>
          <li>PHI of minors will be disclosed to their parents or legal guardians unless prohibited by law.</li>
          <li>For breach reporting purposes or to notify you in the event of a breach of your unsecured PHI.</li>
          <li>As required by state and federal regulations, to the North Carolina Health Information Exchange Authority (NCHIEA), an electronic network that allows participating medical providers to share your health information with one another to facilitate care with other providers or emergency rooms. Contact Doctors Making Housecalls Privacy and Security Officer by email or in writing to request the form to Opt-Out of NCHIEA. </li>
        </ul>

        <h5 class="font-weight-bold">Other Uses and Disclosures which require authorization.</h5>
        <p>Unless required by law, disclosure of your PHI in the situations below and any others not described in this notice, will be made only with your consent, written authorization, or the opportunity to object. You may revoke your authorization in writing at any time, except to the extent that your physician or the physician’s practice has taken an action in reliance on the use or disclosure indicated in the authorization.</p>

        <ul>
          <li><span class="font-weight-bold">Communication with family and/or individuals.</span> Unless you object, disclosure of your PHI may be made to a family member, friend, or other individual whom you have identified and is involved in your care or payment for your care. </li>
          <li><span class="font-weight-bold">Disaster.</span> We may disclose your PHI to disaster relief organizations and/or to notify family members or friends of your location and condition. </li>
          <li><span class="font-weight-bold">Psychotherapy Notes.</span> We will not disclose psychotherapy notes without your written authorization other than in circumstances allowed by law.</li>
          <li><span class="font-weight-bold">Marketing.</span> Disclosures for marketing purposes or the sale of your PHI require your written authorization.</li>
        </ul>


        <h5 class="font-weight-bold">Protected Health Information (PHI) and Your Rights</h5>
        <p>Following is a statement of your rights, subject to certain limitations, with respect to your protected health information. Requests related to your PHI should be made to our Privacy and Security Officer. <span class="font-weight-bold">You have the right to:</span></p>

        <p><span class="font-weight-bold">Inspect and copy your PHI</span> contained in “designated record sets”; pursuant to your request (reasonable fees may apply). You may request an electronic copy of your medical records and we will make every effort to provide the records in the format you request. “Designated record sets” contain medical and billing records and other records the practice uses for making decisions about you. Under federal law, however, you may not inspect or copy the following records: psychotherapy notes; information compiled in reasonable anticipation of, or use in, a civil, criminal, or administrative action of proceeding; and PHI that is subject to laws which prohibit access. </p>

        <p><span class="font-weight-bold">Request a restriction of you PHI.</span> You may ask us not to use or disclose any part of your PHI for the purposes of treatment, payment or healthcare operations. You may also request that any part of PHI not be disclosed to family members or friends who may be involved in your care or for notification purposes as described in this Notice of Privacy Practices. Your request must state the specific restriction requested and to whom you want that restriction to apply. Your physician is not required to agree to a restriction. If our physician believes it is in your best interest to permit use and disclosure of your PHI it will not be restricted. You then have the right to use another healthcare professional.</p>

        <p><span class="font-weight-bold">Request to receive alternative communication from us.</span> You have a right to request confidential communications from us by alternative means or at an alternative location. </p>

        <p><span class="font-weight-bold">You have the right to obtain a paper copy of this notice from us,</span> upon request, even if you have agreed to accept this notice alternatively i.e. electronically. </p>


        <p><span class="font-weight-bold">Have your physician amend your PHI.</span> If we deny your request for amendment, you have the right to file a statement of disagreement with us and we may prepare and provide you with a copy of our rebuttal to your statement. </p>


        <p><span class="font-weight-bold">Receive an accounting of certain disclosures we have made,</span>if any, of your PHI for purposes other than treatment; payment; health care operations; notification and communication with family and/or friends; and those required by law.</p>

        <p><span>Receive a notice of breach,</span> in the event a breach of your unsecured protected health information occurs.</p>

        <h5 class="font-weight-bold">Complaints</h5>
        <p>You may complain to us or the Secretary of the United States Department of Health and Human Services if you believe your privacy rights have been violated by us. If you wish to file a complaint with us, please submit it via telephone, email, or in writing to our Privacy and Security Officer. <span class="font-weight-bold">We will not retaliate against you for filing a complaint.</span> This notice was published and becomes effective on/or before <span class="font-weight-bold">February 10, 2020</span></p>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- auth release -->



<!-- notice of health pI -->
<div class="modal fade show" id="noticeHIP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
  <div class="modal-dialog cascading-modal modal-lg" role="document">
    <!-- Content -->
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="">Notice of Health Information Practices</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body mb-0">
        <p>You are now receiving this notice because your healthcare provider participates in a non-profit non-governmental health information exchange (HIE) called SIP MD. It will not cost you anything and can help your doctor, healthcare providers, and health plans better coordinate your care by securely sharing your health information. This Notice explains how the HIE works and will help you understand your rights regarding the HIE under state and federal law</p>

        <h5 class="font-weight-bold">How does SIP MD help you get better care?</h5>
        <p>In a paper-based record system, your health information is mailed or faxed to your doctor but sometimes these records are lost or don't arrive in time for your appointment. If you allow your health information to be shared through the HIE, your doctors are able to access it electronically in a secure timely manner.</p>


        <h5 class="font-weight-bold">What health information is available through SIP MD?</h5>
        <p>The following types of health information may be available:</p>
        <ul>
          <li>Hospital records</li>
          <li>Medical history</li>
          <li>Medications</li>
          <li>Allergies</li>
          <li>Lab test results</li>
          <li>Radiology reports</li>
          <li>Clinic and doctor visit information</li>
          <li>Health plan enrollment and eligibility</li>
          <li>Other information helpful for your treatment</li>
        </ul>


        <h5 class="font-weight-bold">Who can view your health information through SIP MD and when can it be shared?</h5>
        <p>People involved in your care will have access to your health information. This may include your doctors, nurses, other healthcare providers and health plan. They may access your information for treatment, conducting quality assessment and improvement activities, developing clinical guidelines and protocols, conducting patient safety activities, and population health services. Medical examiners, public health authorities, organ procurement organization, and others may also access health information for certain approved purposes, such as conducting death investigations, public health investigations and organ, eye or tissue donation and transplantation, as permitted by applicable law.</p>

        <p>SIP MD may also use your health information as required by law and as necessary to perform services for healthcare providers, health plans and others participating with SIP MD.</p>

        <p>The SIP MD Board of Directors can expand the reasons why healthcare providers and others may access your health information in the future as long as the access is permitted by law. That information is on the SIP MD website at www.sipmd.com You also may permit others to access your health information by signing an authorization form. They may only access the health information described in the authorization form for the purposes stated on that form.</p>


        <h5 class="font-weight-bold">Does SIP MD receive behavioral health information and if so, who can access it?</h5>
        <p>SIP MD does receive behavioral health information, including substance abuse treatment records. Federal law gives special confidentiality protection to substance abuse treatment records from some substance abuse treatment programs. SIP MD keeps these protected substance abuse treatment records separate from the rest of your health information. SIP MD will only share these protected substance abuse treatment records it receives from these programs in two cases. One, medical personnel may access this information in a medical emergency. Two, you may sign a consent form giving your healthcare provider or others access to this information.</p>


        <h5 class="font-weight-bold">How is your health information protected?</h5>
        <p>Federal and state laws, such as HIPAA, protect the confidentiality of your health information. Your information is shared using secure transmission. SIP MD has security measures in place to prevent someone who is not authorized from having access. Each person has a username and password, and the system records all access to your information.</p>

        <h5 class="font-weight-bold">Your Rights Regarding Secure Electronic Information Sharing</h5>
        <p>You have the right to:</p>
        <ol>
          <li>Ask for a copy of your health information that is available through SIP MD. To make this request, complete the Request Form and return it to your healthcare provider.</li>
          <li>Request to have any information in the HIE corrected. If any information in the HIE is incorrect, you can ask your healthcare provider to correct the information.</li>
          <li>Ask for a list of people who have viewed your information through SIP MD. To make this request, complete the Request Form and return it to your healthcare provider. Please let your healthcare provider know if you think someone has viewed your information who should not have.</li>
        </ol>


        <h5 class="font-weight-bold">You have the right under article 27, section 2 of the Arizona Constitution and Arizona Revised Statutes title 36, section 3802 to keep your health information from being shared electronically through SIP MD:</h5>

        <ol>
          <li>Except as otherwise provided by state or federal law, you may “opt out” of having your information shared through SIP MD. To opt out, ask your healthcare provider for the Opt Out Form. Your information will not be available for sharing through SIP MD within 30 days of SIP MD receiving your Opt Out Form from your healthcare provider.</li>
        </ol>

        <p><span class="font-weight-bold">Caution:</span> If you opt out, your health information will NOT be available to your healthcare provider--even in an emergency.</p>
        <ol>
          <li>If you opt out today, you can change your mind at any time by completing an Opt Back In Form and returning it to your healthcare provider.</li>
          <li>If you do nothing today and allow your health information to be shared through SIP MD, you may opt out  in the future.</li>
        </ol>




        <div class="text-center">
          <h5 class="font-weight-bold">IF YOU DO NOTHING, YOUR INFORMATION MAY BE SECURELY SHARED THROUGH HEALTH CURRENT.</h5>
        </div>
      </div>
    </div>
    <!-- Content -->
  </div>
</div>
<!-- notice of health pI -->