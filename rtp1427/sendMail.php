<?php
  if(isset($_POST['createNewPatient']))
    {
      require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Host = 'relay-hosting.secureserver.net';
      $mail->Port = 25;
      
      $mail->Username = 'contact@sipmd.com'; // update email
      $mail->Password = 'sip@2020'; // update password
      
      $ecpCheck1 = "Not Checked";
      $ecpCheck2 = "Not Checked";
      $scpCheck1 = "Not Checked";
      $scpCheck2 = "Not Checked";
      $tabaccoUse = "No";
      $alchohalUse = "No";

      if($_POST['ecpcheck1'] == 'Checked')
      {
        $ecpCheck1 = "Selected";
      }
      if($_POST['ecpcheck2'] == 'Checked')
      {
        $ecpCheck2 = "Selected";
      }

      if(isset($_POST['scpCheck1']))
      {
        $scpCheck1 = "Selected";
      }
      if(isset($_POST['scpCheck2']))
      {
        $scpCheck2 = "Selected";
      }


      if(isset($_POST['rmiSwitch1']))
      {
        $tabaccoUse = "Yes";
      }
      if(isset($_POST['rmiSwitch2']))
      {
        $alchohalUse = "Yes";
      }

      //pip dir
      $pipdir = "uploads/pip/";
      //pip Front image upload
      $pipfronttarget = $pipdir . basename($_FILES["pipFront"]["name"]);
      $pipFront = $_FILES["pipFront"]["name"];
      move_uploaded_file($_FILES['pipFront']['tmp_name'], $pipfronttarget);



      //pip back image upload
      $pipbacktarget = $pipdir . basename($_FILES["pipBack"]["name"]);
      $pipBack = $_FILES["pipBack"]["name"];
      $result = move_uploaded_file($_FILES['pipBack']['tmp_name'], $pipbacktarget);


      //sip dir
      $sipdir = "uploads/sip/";
      //sip Front image upload
      $sipfronttarget = $sipdir . basename($_FILES["sipFront"]["name"]);
      $sipFront = $_FILES["sipFront"]["name"];
      move_uploaded_file($_FILES['sipFront']['tmp_name'], $sipfronttarget);

      //sip back image upload
      $sipbacktarget = $sipdir . basename($_FILES["sipBack"]["name"]);
      $sipBack = $_FILES["sipBack"]["name"];
      $result = move_uploaded_file($_FILES['sipBack']['tmp_name'], $sipbacktarget);


      //tip dir
      $tipdir = "uploads/tip/";
      //sip Front image upload
      $tipfronttarget = $tipdir . basename($_FILES["tipFront"]["name"]);
      $tipFront = $_FILES["tipFront"]["name"];
      move_uploaded_file($_FILES['tipFront']['tmp_name'], $tipfronttarget);

      //sip back image upload
      $tipbacktarget = $tipdir . basename($_FILES["tipBack"]["name"]);
      $tipBack = $_FILES["tipBack"]["name"];
      $result = move_uploaded_file($_FILES['tipBack']['tmp_name'], $tipbacktarget);
    
      //email setting
      $mail->setFrom('contact@sipmd.com',$_POST["patient-fName"]); //update email
      $mail->addAddress('paccess@sipmd.com');
      $mail->addAddress('bdsupport@sipmd.com');
      $mail->addReplyTo($_POST["patient-email"],$_POST["patient-fName"]);
      $mail->isHTML(true);

      $mail->AddAttachment($pipfronttarget, "Pip-front");
      $mail->AddAttachment($pipbacktarget, "pip-back");

      $mail->AddAttachment($sipfronttarget,"sip-front");
      $mail->AddAttachment($sipbacktarget, "sip-back");

      $mail->AddAttachment($tipfronttarget, "tip-front");
      $mail->AddAttachment($tipbacktarget, "tip-back");

      $mail->Subject = "New Patient Request From  ".$_POST['patient-fName'];
              $mail->Body = '

              <h1>Patient Information</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">First Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px; width: 60%;">'.$_POST['patient-fName'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Middle Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-mName'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Last Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-lName'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Date of birth</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-dob'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Community Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-cn'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Social Security Number</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-ssn'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Gender</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-gender'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Address</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-address'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">APT/Room # </th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-apt'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">State</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-state'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Zip</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-zip'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Home</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-home'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Cell</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-cell'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Email</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patient-email'].'</td>
                </tr>

                
              </table>



              <h1>Emergency Contact Person</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">First Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">'.$_POST['ecp-fname'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Last Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-lname'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Relationship With Patient</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-rwp'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Address</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-address'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">APT/Room # </th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-apt'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">State</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-state'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Zip</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-zip'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Home</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-home'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Cell</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-cell'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Email</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ecp-email'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">This person is the healthcare power of attorney</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$ecpCheck1.'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">This person is financial power of attorney</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$ecpCheck2.'</td>
                </tr>
                
              </table>

              <h1>Secondary Contact Person</h1>
                            <table id="rf" style="border-collapse: collapse;
                            width: 100%; font-size: 15px;">
                               <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">First Name</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">'.$_POST['scp-fname'].'</td>
                              </tr>

                              <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">Last Name</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['scp-lname'].'</td>
                              </tr>

                              <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">Relationship With Patient</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['scp-rwp'].'</td>
                              </tr>

                              
                              <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">Home</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['scp-home'].'</td>
                              </tr>

                              <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">Cell</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['scp-cell'].'</td>
                              </tr>

                              <tr>
                                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #14ABBB;
                    color: white;max-width: 40%;">Email</th>
                                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['scp-email'].'</td>
                              </tr>

                              <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">This person is the healthcare power of attorney</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$scpCheck1.'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">This person is financial power of attorney</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$scpCheck2.'</td>
                </tr>
                              
                            </table>



              <h1>Primary Insurance Policy</h1>
                <table id="rf" style="border-collapse: collapse;
                width: 100%; font-size: 15px;">
                   <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;max-width: 40%;">Front Pic of Insurance card</th>
                      <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">
                        
                        <a>Pip-Front</a>

                      </td>
                  </tr>

                  <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;width: 40%;">Back Pic of Insurance card</th>
        
                      <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">

                        <a>Pip-Back</a>

                      </td>
                  </tr>


                   <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;width: 40%;">Name Of Insurance</th>
                      <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['pip-name'].'</td>
                  </tr>

                  <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;max-width: 40%;">Policy, Subscribe, etc. #</th>
                      <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['pip-policy'].'</td>
                  </tr>

                  <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;max-width: 40%;">Grp #</th>
                      <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['pip-grp'].'</td>
                  </tr>

                  
                  <tr>
                    <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #14ABBB;
        color: white;max-width: 40%;">Plan Code</th>
                      <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['pip-planCode'].'</td>
                  </tr>

                  
                </table>



              
                <h1>Secondary Insurance Policy</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Front Pic of Insurance card</th>
                    <td style="border: 1px solid #ddd;padding: 8px;width: 60%;"><a>Sip-Front</a></td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Back Pic of Insurance card</th>
                    <td style="border: 1px solid #ddd;padding: 8px;"><a>Sip-Back</a></td>
                </tr>


                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Name Of Insurance</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['sip-name'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Policy, Subscribe, etc. #</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['sip-policy'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Grp #</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['sip-grp'].'</td>
                </tr>

                
                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Plan Code</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['sip-planCode'].'</td>
                </tr>

                
              </table>



              <h1>Tertiary Insurance Policy</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Front Pic of Insurance card</th>
                    <td style="border: 1px solid #ddd;padding: 8px;width: 60%;"><a>tip-front</a></td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Back Pic of Insurance card</th>
                    <td style="border: 1px solid #ddd;padding: 8px;"><a>Tip-Back</a></td>
                </tr>


                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Name Of Insurance</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['tip-name'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Policy, Subscribe, etc. #</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['tip-policy'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Grp #</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['tip-grp'].'</td>
                </tr>

                
                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Plan Code</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['tip-planCode'].'</td>
                </tr>

                
              </table>




              <h1>Credit Card Information</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Name as it appears on Card</th>
                    <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">'.$_POST['cci-cardname'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Card Holders Address including zip</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-address'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Type</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-type'].'</td>
                </tr>

                
                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Credit Card #</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-credit-card'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">CVC2</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-cvc'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Exp Month</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-month'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Exp Year</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['cci-year'].'</td>
                </tr>

                
              </table>





              <h1>Required Medical Information</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 15px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;width: 40%;">Preferred Pharmacy</th>
                    <td style="border: 1px solid #ddd;padding: 8px;width: 60%;">'.$_POST['rmi-pharmacy'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Preferred Hospital</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['rmi-hospital'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Allergies</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['rmi-allergy'].'</td>
                </tr>

                
                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Previous Primary Care Physician, Specialist, Hospital Visits</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['rmi-prev'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Medications-name/dosage/frequency</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['rmi-medi'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Tobacco Use</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$tabaccoUse.'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Alchohal Use</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$alchohalUse.'</td>
                </tr>

                
              </table>


              ';

      if($mail->send())
      {
        echo "<script>";
        echo "alert('Your Message Has been Successfull Sent!! You will be redirected back to main website in 5s.')";
        header( "refresh:5;url=index.php" );
        echo "</script>";
      }

      else
      {
        echo "<script>";
        echo "alert('Can not send your query right now!! please try again later')";
        echo "</script>";
      }
    }


  if(isset($_POST['sendForm']))
    {
      require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Host = 'relay-hosting.secureserver.net';
      $mail->Port = 25;
      
      $mail->Username = 'contact@sipmd.com'; // update email
      $mail->Password = 'sip@2020'; // update password

      //email setting
      $mail->setFrom('contact@sipmd.com',$_POST["fullName"]); //update email
      $mail->addAddress('paccess@sipmd.com');
      $mail->addAddress('bdsupport@sipmd.com');
      $mail->addReplyTo($_POST["email"],$_POST["fullName"]);
      $mail->isHTML(true);
      $mail->Subject = "Query From  ".$_POST['fullName'];
              $mail->Body = '
              <h1>Form Details</h1>
              <table id="rf" style="border-collapse: collapse;
              width: 100%; font-size: 20px;">
                 <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;max-width: 40%;">Full Name</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['fullName'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Email</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
                </tr>

                <tr>
                  <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #14ABBB;
      color: white;">Message</th>
                    <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['message'].'</td>
                </tr>
              </table>';

      if($mail->send())
      {
        echo "<script>";
        echo "alert('Your Message Has been Successfull Sent!!')";
        echo "</script>";
      }

      else
      {
        echo "<script>";
        echo "alert('Can not send your query right now!! please try again later')";
        echo "</script>";

      }
    }



  if(isset($_POST['requestForms']))
  {
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
    
    $mail->Username = 'contact@sipmd.com'; // update email
      $mail->Password = 'sip@2020'; // update password

    //Uploading product image
    $target_dir = "pdf/requestForms/";
    $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      
    $fileUploaded = $_FILES["fileToUpload"]["name"];
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

    //email setting
    $mail->setFrom('contact@sipmd.com',$_POST["patientName"]);// update email
    $mail->addAddress('paccess@sipmd.com');
    $mail->addAddress('bdsupport@sipmd.com');
    $mail->addReplyTo($_POST["email"],$_POST["patientName"]);
    $mail->isHTML(true);
    $mail->AddAttachment($target);
    $mail->Subject = "Request Form From  ".$_POST['patientName'];
            $mail->Body = '
            <h1>Details Of Form</h1>
            <table id="rf" style="border-collapse: collapse;
            width: 100%; font-size: 20px;">
              <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Uploaded File</th>

                  <td style="border: 1px solid #ddd;padding: 8px;"><a>'.$fileUploaded.'</a></td>
              </tr>
              
              <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Patient Name</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patientName'].'</td>
              </tr>
              
                <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Email</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
              </tr>
              
              
               <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Phone Number</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['phoneNumber'].'</td>
              </tr>
              
               <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Fax Number</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['faxNumber'].'</td>
              </tr>
              
              <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Date</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['date'].'</td>
              </tr>
              
               <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Document Type</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['documentTypes'].'</td>
              </tr>
              
              
               <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Collection Type</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['collectionTypes'].'</td>
              </tr>
              
               <tr>
                <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #14ABBB;
    color: white;">Comment</th>
                  <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['comment'].'</td>
              </tr>
            </table>';

    if($mail->send())
    {
      echo "<script>";
      echo "alert('Your Message Has been Successfull Sent!!')";
      echo "</script>";
    }

    else
    {
      echo "<script>";
      echo "alert('Can not send your query right now!! please try again later')";
      echo "</script>";
    }
  }


  if(isset($_POST['bookAppointment']))
  {
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
    
    $mail->Username = 'contact@sipmd.com'; // update email
    $mail->Password = 'sip@2020'; // update password

   
    //Uploading document
    $target_dir = "pdf/appointment/";
    $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      
    $fileUploaded = $_FILES["fileToUpload"]["name"];

    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

    //email setting
    $mail->setFrom('contact@sipmd.com',$_POST["patientName"]); //update email
    $mail->addAddress('paccess@sipmd.com');
    $mail->addAddress('bdsupport@sipmd.com');
    $mail->addReplyTo($_POST["email"],$_POST["patientName"]);
    $mail->isHTML(true);
    $mail->AddAttachment($target);
    $mail->Subject = "Request Appointment From  ".$_POST['patientName'];


           
       $mail->Body = '
      <h1>Details Of Form</h1>
      <table id="rf" style="border-collapse: collapse;
      width: 100%; font-size: 18px;">
        <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white; width: 50%;">Uploaded File</th>
            <td style="border: 1px solid #ddd;padding: 8px;"><a>'.$fileUploaded.'</a></td>
        </tr>
        
        <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Patient Name</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patientName'].'</td>
        </tr>
        
        <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Date Of Birth</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['dob'].'</td>
        </tr>
        
        
         <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Email</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
        </tr>
        
        
         <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Phone Number</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['phoneNumber'].'</td>
        </tr>
        
        
        <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Date</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['date'].'</td>
        </tr>
        
         <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Time</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['time'].'</td>
        </tr>
        
        
         <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Appointment Type</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['appointmentType'].'</td>
        </tr>
        
         <tr>
          <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #14ABBB;
color: white;">Comment</th>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['comment'].'</td>
        </tr>
      </table>';
          
    if($mail->send())
    {
      echo "<script>";
      echo "alert('Your Message Has been Successfull Sent!!')";
      echo "</script>";
    }

    else
    {
      echo "<script>";
      echo "alert('Can not send your query right now!! please try again later')";
      echo "</script>";
    }
  }

