<?php include("sendMail.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SIPMD | CONVENIENT QUALITY CARE AT HOME</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/register/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/typography.css" rel="stylesheet">
  <link href="css/register/register.css" rel="stylesheet">
  <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">

  <body>
    <div class="container-fluid my-3">
      <form method="post" enctype="multipart/form-data" id="registration_form">
        <div class="card">
          <div class="card-body">
            <!-- Vertical Steppers -->
            <div class="row mt-1">
              <div class="col-xl-12">

                <!-- Stepers Wrapper -->
                <ul class="stepper stepper-vertical">

                  <!-- First Step -->
                  <li class="step active" id="first-step">
                    <a href="#!">
                      <span class="circle">1</span>
                      <span class="label">Patient Information</span>
                    </a>


                    <!-- content -->
                    <div class="step-content container" id="first-step-content">
                      <div class="row mt-1">
                        <!-- first name -->
                        <div class="col-xl-3">
                          <div class="md-form">
                            <input type="text" id="patient-fName" name="patient-fName" class="form-control" required="">
                            <label for="patient-fName">First Name *</label>
                            <span id="error_patient_fname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- first name -->

                        <!-- middle name -->
                        <div class="col-xl-3">
                          <div class="md-form">
                            <input type="text" id="patient-mName" name="patient-mName" class="form-control">
                            <label for="patient-mName">Middle Name</label>
                          </div>
                        </div>
                        <!-- middle name -->

                        <!-- Last name -->
                        <div class="col-xl-3">
                          <div class="md-form">
                            <input type="text" id="patient-lName" name="patient-lName" class="form-control" required="">
                            <label for="patient-lName">Last Name *</label>
                            <span id="error_patient_lname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Last name -->

                        <!-- Date of birth -->
                        <div class="col-xl-3">
                          <span for="patient-dob">Date Of Birth *</span>
                          <div class="md-form mt-0">
                            <input type="date" id="patient-dob" name="patient-dob" class="form-control" required="">
                            <span id="error_patient_dob" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Date of birth -->
                        

                        <!-- community name -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="patient-cn" name="patient-cn" class="form-control">
                            <label for="patient-cn">Community Name</label>
                          </div>
                        </div>
                        <!-- community name -->          


                        <!-- Social Security Number -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="patient-ssn" name="patient-ssn" class="form-control" required="">
                            <label for="patient-ssn">Social Security Number *</label>
                            <span id="error_patient_ssn" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Social Security Number -->           

                        <!-- Social Security Number -->
                        <div class="col-xl-4">
                          <label>Gender</label>
                          <select class="form-control" name="patient-gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                          </select>
                        </div>
                        <!-- Social Security Number -->       


                        <!-- Address -->
                        <div class="col-xl-8">
                          <div class="md-form">
                            <input type="text" id="patient-address" name="patient-address" class="form-control" required="">
                            <label for="patient-address">Address *</label>
                            <span id="error_patient_address" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Address -->   

                        <!-- apt/room -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="patient-apt" name="patient-apt" class="form-control" required="">
                            <label for="patient-apt">APT/Room # *</label>
                            <span id="error_patient_apt" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- apt/room -->          

                        <!-- City -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="patient-city" name="patient-city" class="form-control" required="">
                            <label for="patient-city">City *</label>
                            <span id="error_patient_city" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- City-->          

                        <!-- apt/room -->
                        <div class="col-xl-4">
                          <label for="patient-state">State *</label>
                          <select class="form-control" name="patient-state" id="patient-state">
                            <option value="" selected disabled>Select</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkanas">Arkanas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Lowa">Lowa</option>
                            <option value="Kankas">Kankas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="Washington, D.C.(DC)">Washington, D.C.(DC)</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                          </select>
                          <span id="error_patient_state" class="text-danger"></span>
                        </div>
                        <!-- apt/room -->          

                        <!-- zip -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="patient-zip" name="patient-zip" class="form-control" required="">
                            <label for="patient-zip">zip *</label>
                            <span id="error_patient_zip" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- zip -->     

                         <!-- Home -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="tel" id="patient-home" name="patient-home" class="form-control">
                            <label for="patient-home">Home</label>
                          </div>
                        </div>
                        <!-- Home -->          

                         <!-- cell -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="tel" id="patient-cell" name="patient-cell" class="form-control" required="">
                            <label for="patient-cell">Cell *</label>
                            <span id="error_patient_cell" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- cell -->     

                         <!-- email -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="email" id="patient-email" name="patient-email" class="form-control" required="">
                            <label for="patient-email">Email *</label>
                            <span id="error_patient_email" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- email -->     

                        
                        <div class="col-md-12 text-right">
                          <button id="btn_personal_info" name="btn_personal_info" class="btn btn-primary btn-sm">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- content -->


                  </li>
                  <!-- first step -->








                  <!-- Second Step -->
                  <li class="step" id="second-step">

                    <!--Section Title -->
                    <a href="#!">
                      <span class="circle">2</span>
                      <span class="label">Emergency Contact Person</span>
                    </a>

                    <!-- Section Description -->
                    <div class="step-content container" id="second-step-content">
                      <div class="row mt-1">
                        <!-- first name -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="ecp-fname" name="ecp-fname" class="form-control" required="">
                            <label for="ecp-fname">first name *</label>
                            <span id="error_ecp_fname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- first name -->   

                        <!-- Last name -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="ecp-lname" name="ecp-lname" class="form-control" required="">
                            <label for="ecp-lname">Last name *</label>
                            <span id="error_ecp_lname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Last name -->   

                        <!-- Relationship with patient -->
                        <div class="col-xl-4">
                          <label>Relationship with patient</label>
                          <select class="form-control" name="ecp-rwp">
                            <option value="Self">Self</option>
                            <option value="Spouse">Spouse</option>
                            <option value="Natural Child - Insured/Guarantor has Financial Responsibility">Natural Child - Insured/Guarantor has Financial Responsibility</option>
                            <option value="Natural Child - Insured/Guarantor does not have Financial Responsibility (Includes Legal Adopted Child)">Natural Child - Insured/Guarantor does not have Financial Responsibility (Includes Legal Adopted Child)</option>
                            <option value="Step Child">Step Child</option>
                            <option value="Foster Child">Foster Child</option>
                            <option value="Ward of the court">Ward of the court</option>
                            <option value="Employee">Employee</option>
                            <option value="Unknown - patient's relations to the injured/guarantor is other than any listed">Unknown - patient's relations to the injured/guarantor is other than any listed</option>
                            <option value="Handicaped dependent">Handicaped dependent</option>
                            <option value="Organ Donar">Organ Donar</option>
                            <option value="Cadever Donar">Cadever Donar</option>
                            <option value="Grandchild">Grandchild</option>
                            <option value="Niece/Nephew">Niece/Nephew</option>
                            <option value="Injured Plaintiff">Injured Plaintiff</option>
                            <option value="Sponsored Dependent">Sponsored Dependent</option>
                            <option value="Minor Dependent of a minor Dependent">Minor Dependent of a minor Dependent</option>
                            <option value="Parent">Parent</option>
                            <option value="Grandparent">Grandparent</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                        <!-- Relationship with patient -->       

                        <!-- Address -->
                        <div class="col-xl-8">
                          <div class="md-form">
                            <input type="text" id="ecp-address" name="ecp-address" class="form-control" required="">
                            <label for="ecp-address">Address *</label>
                            <span id="error_ecp_address" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Address -->   

                        <!-- apt/room -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="ecp-apt" name="ecp-apt" class="form-control">
                            <label for="ecp-apt">APT/Room #</label>
                          </div>
                        </div>
                        <!-- apt/room -->          

                        <!-- City -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="ecp-city" name="ecp-city" class="form-control">
                            <label for="ecp-city">City</label>
                          </div>
                        </div>
                        <!-- City-->          

                        <!-- apt/room -->
                        <div class="col-xl-4">
                          <label>State</label>
                          <select class="form-control" name="ecp-state">
                            <option value="" selected disabled>Select</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkanas">Arkanas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Lowa">Lowa</option>
                            <option value="Kankas">Kankas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="Washington, D.C.(DC)">Washington, D.C.(DC)</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                          </select>
                        </div>
                        <!-- apt/room -->          

                        <!-- zip -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="ecp-zip" name="ecp-zip" class="form-control">
                            <label for="ecp-zip">zip</label>
                          </div>
                        </div>
                        <!-- zip -->     

                         <!-- Home -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="tel" id="ecp-home" name="ecp-home" class="form-control">
                            <label for="ecp-home">Home</label>
                          </div>
                        </div>
                        <!-- Home -->          

                         <!-- cell -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="tel" id="ecp-cell" name="ecp-cell" class="form-control" required="">
                            <label for="ecp-cell">Cell *</label>
                            <span id="error_ecp_cell" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- cell -->     

                         <!-- email -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="email" id="ecp-email" name="ecp-email" class="form-control">
                            <label for="ecp-email">Email</label>
                          </div>
                        </div>
                        <!-- email -->    

                        <div class="col-xl-12">
                          <!-- Default unchecked -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ecpcheck1" name="ecpcheck1" value="Checked">
                              <label class="custom-control-label" for="ecpcheck1">This person is the healthcare power of attorney</label>
                          </div>
                        </div>
                       
                        <div class="col-xl-12">
                          <!-- Default unchecked -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ecpcheck2" name="ecpcheck2" value="Checked">
                              <label class="custom-control-label" for="ecpcheck2">This person is financial power of attorney</label>
                          </div>
                        </div>
                       

                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-personal">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-scp">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->
                  </li>
                  <!-- second step -->

                  <!-- Third Step -->
                  <li class="step" id="third-step">
                    <a href="#!">
                      <span class="circle">3</span>
                      <span class="label">Secondary Contact Person</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container" id="third-step-content">
                      <div class="row mt-1">
                        <!-- first name -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="scp-fname" name="scp-fname" class="form-control" required="">
                            <label for="scp-fname">first name *</label>
                            <span id="error_scp_fname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- first name -->   

                        <!-- Last name -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="scp-lname" name="scp-lname" class="form-control" required="">
                            <label for="scp-lname">Last name *</label>
                            <span id="error_scp_lname" class="text-danger"></span>
                          </div>
                        </div>
                        <!-- Last name -->   

                        <!-- Relationship with patient -->
                        <div class="col-xl-4">
                          <label>Relationship with patient</label>
                          <select class="form-control" name="scp-rwp">
                            <option value="Self">Self</option>
                            <option value="Spouse">Spouse</option>
                            <option value="Natural Child - Insured/Guarantor has Financial Responsibility">Natural Child - Insured/Guarantor has Financial Responsibility</option>
                            <option value="Natural Child - Insured/Guarantor does not have Financial Responsibility (Includes Legal Adopted Child)">Natural Child - Insured/Guarantor does not have Financial Responsibility (Includes Legal Adopted Child)</option>
                            <option value="Step Child">Step Child</option>
                            <option value="Foster Child">Foster Child</option>
                            <option value="Ward of the court">Ward of the court</option>
                            <option value="Employee">Employee</option>
                            <option value="Unknown - patient's relations to the injured/guarantor is other than any listed">Unknown - patient's relations to the injured/guarantor is other than any listed</option>
                            <option value="Handicaped dependent">Handicaped dependent</option>
                            <option value="Organ Donar">Organ Donar</option>
                            <option value="Cadever Donar">Cadever Donar</option>
                            <option value="Grandchild">Grandchild</option>
                            <option value="Niece/Nephew">Niece/Nephew</option>
                            <option value="Injured Plaintiff">Injured Plaintiff</option>
                            <option value="Sponsored Dependent">Sponsored Dependent</option>
                            <option value="Minor Dependent of a minor Dependent">Minor Dependent of a minor Dependent</option>
                            <option value="Parent">Parent</option>
                            <option value="Grandparent">Grandparent</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                        <!-- Relationship with patient -->     


                         <!-- Home -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="scp-home" name="scp-home" class="form-control">
                            <label for="scp-home">Home</label>
                          </div>
                        </div>
                        <!-- Home -->          

                         <!-- cell -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="scp-cell" name="scp-cell" class="form-control">
                            <label for="scp-cell">Cell</label>
                          </div>
                        </div>
                        <!-- cell -->     

                         <!-- email -->
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="email" id="scp-email" name="scp-email" class="form-control">
                            <label for="scp-email">Email</label>
                          </div>
                        </div>
                        <!-- email -->    

                        <div class="col-xl-12">
                          <!-- Default unchecked -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="scpcheck1" name="scpCheck1" value="checked">
                              <label class="custom-control-label" for="scpcheck1">This person is the healthcare power of attorney</label>
                          </div>
                        </div>
                        
                        <div class="col-xl-12">
                          <!-- Default unchecked -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="scpcheck2" name="scpCheck2" value="checked">
                              <label class="custom-control-label" for="scpcheck2">This person is financial power of attorney</label>
                          </div>
                        </div>

                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-ecp">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-pip">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->
                  </li>

                  <!-- Fourth Step -->
                  <li class="step" id="fourth-step">
                    <a href="#!">
                      <span class="circle">4</span>
                      <span class="label">Primary Insurance Policy</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container" id="fourth-step-content">
                      <p>Firstly, please take a photo of the front of your health care insurance card. Secondly, please take a photo of the back of your health care insurance card. In case this process is not possible for any reason, please enter the data manually. Please rest assured that all your data is kept private and securely stored.</p>
                      
                      <span id="error_pip" class="text-danger"></span>


                      <div class="row mt-1">
                        <div class="col-xl-6" style="border-right: 1px solid black;">
                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Front side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="pipFront"
                                aria-describedby="pipFront" name="pipFront">
                              <label class="custom-file-label" for="pipFront">Choose file</label>
                            </div>
                          </div>

                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Back side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="pipBack"
                                aria-describedby="pipBack" name="pipBack">
                              <label class="custom-file-label" for="pipBack">Choose file</label>
                            </div>
                          </div>

                        </div>


                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="pip-name" name="pip-name" class="form-control">
                            <label for="pip-name">Name Of Insurance *</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="pip-policy" name="pip-policy" class="form-control">
                            <label for="pip-policy">Policy, Subscribe, etc. # *</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="pip-grp" name="pip-grp" class="form-control">
                            <label for="pip-grp">Grp # *</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="pip-planCode" name="pip-planCode" class="form-control">
                            <label for="pip-planCode">Plan Code *</label>
                          </div>

                        </div>
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-scp">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-sip">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>




                  <!-- fifth Step --> 
                  <li class="step" id="fifth-step">
                    <a href="#!">
                      <span class="circle">5</span>
                      <span class="label">Secondary Insurance Policy</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container">
                      <p>Firstly, please take a photo of the front of your health care insurance card. Secondly, please take a photo of the back of your health care insurance card. In case this process is not possible for any reason, please enter the data manually. Please rest assured that all your data is kept private and securely stored.</p>
                      <div class="row mt-1">
                        <div class="col-xl-6" style="border-right: 1px solid black;">
                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="sipFront">Front side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="sipFront"
                                aria-describedby="sipFront" name="sipFront">
                              <label class="custom-file-label" for="sipFront">Choose file</label>
                            </div>
                          </div>

                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="sipBack">Back side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="sipBack"
                                aria-describedby="sipBack" name="sipBack">
                              <label class="custom-file-label" for="sipBack">Choose file</label>
                            </div>
                          </div>


                        </div>
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="sip-name" name="sip-name" class="form-control">
                            <label for="sip-name">Name Of Insurance</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="sip-policy" name="sip-policy" class="form-control">
                            <label for="sip-policy">Policy, Subscribe, etc. #</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="sip-grp" name="sip-grp" class="form-control">
                            <label for="sip-grp">Grp #</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="sip-planCode" name="sip-planCode" class="form-control">
                            <label for="sip-planCode">Plan Code</label>
                          </div>

                        </div>
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-pip">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-tip" >Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>


                  <!-- sixth Step -->
                  <li class="step" id="sixth-step">
                    <a href="#!">
                      <span class="circle">6</span>
                      <span class="label">Tertiary Insurance Policy</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container">
                      <p>Firstly, please take a photo of the front of your health care insurance card. Secondly, please take a photo of the back of your health care insurance card. In case this process is not possible for any reason, please enter the data manually. Please rest assured that all your data is kept private and securely stored.</p>
                      <div class="row mt-1">
                        <div class="col-xl-6" style="border-right: 1px solid black;">
                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="tipFront">Front side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="tipFront"
                                aria-describedby="tipFront" name="tipFront">
                              <label class="custom-file-label" for="tipFront">Choose file</label>
                            </div>
                          </div>

                          <div class="input-group mt-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="tipBack">Back side of Insurance Card</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="tipBack"
                                aria-describedby="tipBack" name="tipBack">
                              <label class="custom-file-label" for="tipBack">Choose file</label>
                            </div>
                          </div>


                        </div>
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="tip-name" name="tip-name" class="form-control">
                            <label for="tip-name">Name Of Insurance</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="tip-policy" name="tip-policy" class="form-control">
                            <label for="tip-policy">Policy, Subscribe, etc. #</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="tip-grp" name="tip-grp" class="form-control">
                            <label for="tip-grp">Grp #</label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="tip-planCode" name="tip-planCode" class="form-control">
                            <label for="tip-planCode">Plan Code</label>
                          </div>

                        </div>
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-sip">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-cci">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>




                  <!-- seventh Step -->
                  <li class="step" id="seventh-step">
                    <a href="#!">
                      <span class="circle">7</span>
                      <span class="label">Credit Card Information</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container">
                      <div class="row">
                        <div class="col-xl-5">
                          <div class="md-form">
                            <input type="text" id="cci-cardname" name="cci-cardname" class="form-control">
                            <label for="cci-cardname">Name as it appears on Card</label>
                          </div>
                        </div>
                        

                        <div class="col-xl-5">
                          <div class="md-form">
                            <input type="text" id="cci-address" name="cci-address" class="form-control">
                            <label for="cci-address">Card Holder's Address including zip</label>
                          </div>
                        </div>

                      </div>


                      <div class="row">
                        <div class="col-xl-4">
                          <label>Type</label>
                          <select class="form-control" name="cci-type">
                            <option value="Visa">Visa</option>
                            <option value="Mastercard">Mastercard</option>
                            <option value="AMEX">AMEX</option>
                            <option value="Discover">Discover</option>
                          </select>
                        </div>
                        <div class="col-xl-4">
                          <div class="md-form">
                            <input type="text" id="cci-credit-card" name="cci-credit-card" class="form-control">
                            <label for="cci-credit-card">Credit Card #</label>
                          </div>
                        </div>
                        

                        <div class="col-xl-2">
                          <div class="md-form">
                            <input type="text" id="cci-cvc" name="cci-cvc" class="form-control">
                            <label for="cci-cvc">CVC2</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xl-4">
                          <label>Exp Month</label>
                          <select class="form-control" name="cci-month">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                        </div>

                        <div class="col-xl-4">
                          <label>Exp Year</label>
                          <select class="form-control" name="cci-year">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                          </select>
                        </div>
                      </div>



                      <div class="row mt-1">
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-tip">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-rmi">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>


                  <!-- Eight Step -->
                  <li class="step" id="eight-step">
                    <a href="#!">
                      <span class="circle">8</span>
                      <span class="label">Required Medical Information</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container">
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="md-form">
                            <input type="text" id="rmi-pharmacy" name="rmi-pharmacy" class="form-control" required>
                            <label for="rmi-pharmacy">Preferred Pharmacy *</label>
                            <span id="error_rmi_pharmacy" class="text-danger"></span>
                          </div>
                        </div>
                        

                        <div class="col-xl-6">
                          <div class="md-form">
                            <input type="text" id="rmi-hospital" name="rmi-hospital" class="form-control">
                            <label for="rmi-hospital">Preferred Hospital</label>
                          </div>
                        </div>

                        <div class="col-xl-12">
                          <div class="md-form">
                            <input type="text" id="rmi-allergy" name="rmi-allergy" class="form-control">
                            <label for="rmi-allergy">Allergies</label>
                          </div>
                        </div>

                        <div class="col-xl-12">
                          <div class="md-form">
                            <input type="text" id="rmi-prev" name="rmi-prev" class="form-control">
                            <label for="rmi-prev">Previous Primary Care Physician, Specialist, Hospital Visits</label>
                          </div>
                        </div>

                         <div class="col-xl-12">
                          <div class="md-form">
                            <input type="text" id="rmi-medi" name="rmi-medi" class="form-control">
                            <label for="rmi-medi">Medications-name/dosage/frequency</label>
                          </div>
                        </div>

                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="rmiSwitch1" name="rmiSwitch1">
                            <label class="custom-control-label" for="rmiSwitch1">Tobacco use</label>
                          </div>
                        </div>



                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="rmiSwitch2" name="rmiSwitch2">
                            <label class="custom-control-label" for="rmiSwitch2">Alchohal use</label>
                          </div>
                        </div>

                        <div class="col-xl-12">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="rmiCheck1" required>
                              <label class="custom-control-label" for="rmiCheck1">I have been offered or have read the HIPAA   <span class="blue-text" data-target="#hipaa" data-toggle="modal">"Notice or privacy practices"</span></label>

                              <br>
                              <span id="error_rmi_check" class="text-danger"></span>
                          </div>


                        </div>


                      </div>

                      


                      <div class="row mt-1">
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-cci">Prev</button>
                          <button class="btn btn-primary btn-sm" id="btn-next-auth">Next</button>
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>


                  <!-- ninth Step -->
                  <li class="step" id="ninth-step">
                    <a href="#!">
                      <span class="circle">9</span>
                      <span class="label">Authorization Form</span>
                    </a>


                    <!-- Section Description -->
                    <div class="step-content container">
                      <h5 class="text-danger font-weight-bold mb-4">Accept Authorization Agreement is mandatory before submitting form.</h5>
                      <div class="row">
                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck1" required>
                              <label class="custom-control-label" for="authCheck1">I recognize that I need medical services. I voluntarily consent to treatment by the medical staff of the practice, as deemed necessary in their judgment. I am aware that the practice of medicine and surgery is not an exact science and that no guarantees have been made to me regarding the results of examinations, treatments, or tests. I understand that if major diagnostic studies or treatment procedures (such as surgery) are required, I will be asked to give specific consent for those events.</label>
                          </div>
                        </div>
                        <!-- single -->


                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck2" required>
                              <label class="custom-control-label" for="authCheck2">I understand that, consistent with Arizona state and federal laws, SIP Home Systems LLC (DBA "SIPMD"), successors and assigns, (referred to as “Provider” from here on) will share all medical information as necessary for continuation of care and with any other institution or person as permitted by law. <span class="blue-text" data-toggle="modal" data-target="#authReadMore">Read More...</span></label>
                          </div>
                        </div>
                        <!-- single -->


                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck3" required>
                              <label class="custom-control-label" for="authCheck3">I acknowledge that I have been provided with Provider’ Notice of Privacy Practices. A copy of the Notice is available on our website; www.sipmd.com </label>
                          </div>
                        </div>
                        <!-- single -->


                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck4" required>
                              <label class="custom-control-label" for="authCheck4">I authorize the release of medical information to my primary care or referring physician, to consultants if needed and as necessary to process insurance claims, insurance applications, and prescriptions. I also authorize payment of medical benefits to Provider. I have read and fully understand, to my satisfaction, this entire document consisting of consent to treat and use of medical information. I may be asked to update my signatures and personal information annually or not less than once every three years. I am capable of signing this document on my own. </label>
                          </div>
                        </div>
                        <!-- single -->

                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck5" required>
                              <label class="custom-control-label" for="authCheck5">I hereby authorize payment of medical benefits billed to my insurance to Provider Physicians; I have listed all health insurance plans from which I may receive benefits. I hereby accept responsibility for payment for any service(s) provided to me that is not covered by my insurance. I agree to pay all copayments, coinsurance, and deductibles at the time services are rendered. I also accept responsibility for fees that exceed the payment made by my insurance, if Provider Physicians does not participate with my insurance. I hereby authorize Provider physicians to use and/or disclose my health information which specifically identifies me or which can reasonably be used to identify me to carry out my treatment, payment, and health care operation.</label>
                          </div>
                        </div>
                        <!-- single --> 

                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck6" required>
                              <label class="custom-control-label" for="authCheck6">I hereby authorize the release of my medical records to Provider. The Provider requests only the following pertinent and succinct medical record information to be forwarded from other medical and health care providers: 1. Problem Lists, 2. Vaccination History, 3. Past and Current Medical History, 4. Past Surgical History, 5. Current Medications and Past Pertinent Medications, 6. Social History, 7. Allergic History, 8. Recent Physical Exam, 10. Pertinent and Recent Laboratory and Radiology Tests, 11. Additional pertinent information at the health care provider's discretion.</label>
                          </div>
                        </div>
                        <!-- single -->


                        <!-- single -->
                        <div class="col-xl-12 mb-3">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="authCheck7" required>
                              <label class="custom-control-label" for="authCheck7">I understand that while this consent is voluntary, if I refuse to sign this consent, Provider can refuse to treat me. I understand the authorization can only be revoked in writing, if I revoke my consent, such revocation will not affect any action that Provider takes before receiving my revocation.</label>
                          </div>
                        </div>
                        <!-- single -->
                      </div>
                      


                      <div class="row mt-1">
                        <div class="col-md-12 text-right">
                          <button class="btn btn-flat btn-sm" id="btn-prev-rmi">Prev</button>
                          <input type="submit" class="btn btn-primary btn-sm" id="btn-finish" value="Finish" name="createNewPatient">
                        </div>
                      </div>
                    </div>
                    <!-- section description -->

                  </li>

                </ul>
                <!-- /.Stepers Wrapper -->

              </div>
            </div>

            <!-- Steppers Navigation -->
            
            <!-- /.Vertical Steppers -->
          </div>
        </div>
      </form>
    </div>


  </body>
  <!-- SCRIPTS -->


  <?php include("modals.php"); ?>
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/register/mdb.js"></script>
  <!-- custom -->
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/mask.js"></script>
  <script type="text/javascript" src="js/register/register.js"></script>
</body>

</html>