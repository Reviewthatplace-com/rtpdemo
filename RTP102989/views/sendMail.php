<?php
  $error = '';
  if(isset($_POST['requestForms']))
  {
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
  
    $mail->Username = 'donotreply@reviewthatplace.com';
    $mail->Password = 'RTP7037!';

    if(empty($_POST['patientName']))
    {
      $error = "Please Fill All The Details To Submit Your Query";
    }

    else
    {
      //Uploading product image
      $target_dir = "pdf/requestForms/";
      $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        
      $fileUploaded = $_FILES["fileToUpload"]["name"];

      $query = "INSERT INTO `requestforms` (`uploadFile`,`patientName`,`email`, `phoneNumber`, `faxNumber`, `date`, `docType`, `collectionType`, `comment`) VALUES ('{$fileUploaded}',
        '".mysqli_real_escape_string($link, $_POST['patientName'])."', 
        '".mysqli_real_escape_string($link, $_POST['email'])."',
        '".mysqli_real_escape_string($link, $_POST['phoneNumber'])."',
        '".mysqli_real_escape_string($link, $_POST['faxNumber'])."',
        '".mysqli_real_escape_string($link, $_POST['date'])."',
        '".mysqli_real_escape_string($link, $_POST['documentTypes'])."',
        '".mysqli_real_escape_string($link, $_POST['collectionTypes'])."',
      '".mysqli_real_escape_string($link, $_POST['comment'])."')";

      $result = mysqli_query($link, $query);

      if($result)
      {
          move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

          //email setting
          $mail->setFrom('donotreply@reviewthatplace.com',$_POST["patientName"]);
          $mail->addAddress('info@powerspediatrics.com');
          $mail->addReplyTo($_POST["email"],$_POST["patientName"]);
          $mail->isHTML(true);
          $mail->Subject = "Request Form From  ".$_POST['patientName'];
          $mail->Body = '
          <h1>Details Of Form</h1>
          <table id="rf" style="border-collapse: collapse;
          width: 100%;">
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Uploaded File</th>
                <td style="border: 1px solid #ddd;padding: 8px;"><a href="https://agrawalravionline.tech/rtp1606/pdf/requestForms/'.$fileUploaded.'">'.$fileUploaded.'</a></td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Patient Name</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patientName'].'</td>
            </tr>
            
              <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Email</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Phone Number</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['phoneNumber'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Fax Number</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['faxNumber'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Date</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['date'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Document Type</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['documentTypes'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Collection Type</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['collectionTypes'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
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
            echo "alert('$mail->ErrorInfo')";
            echo "</script>";
          }
      }
    }
  }


  if(isset($_POST['submitDemo']))
  {
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
    
    $mail->Username = 'donotreply@reviewthatplace.com';
    $mail->Password = 'RTP7037!';
    if(empty($_POST['patientName']))
    {
      $error = "Please Fill All The Details To Submit Your Query";
    }

    else
    {
      //Uploading document
      $target_dir = "pdf/submitDemo/";
      $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        
      $fileUploaded = $_FILES["fileToUpload"]["name"];

      $query = "INSERT INTO `submitdemo` (`uploadFile`,`patientName`,`email`, `phoneNumber`,`date`, `gender`, `street`, `city`,`state`,`zip`,`insurance`,`ssn`,`comment`) VALUES ('{$fileUploaded}',
        '".mysqli_real_escape_string($link, $_POST['patientName'])."', 
        '".mysqli_real_escape_string($link, $_POST['email'])."',
        '".mysqli_real_escape_string($link, $_POST['phoneNumber'])."',
        '".mysqli_real_escape_string($link, $_POST['date'])."',
        '".mysqli_real_escape_string($link, $_POST['gender'])."',
        '".mysqli_real_escape_string($link, $_POST['street'])."',
        '".mysqli_real_escape_string($link, $_POST['city'])."',
        '".mysqli_real_escape_string($link, $_POST['state'])."',
        '".mysqli_real_escape_string($link, $_POST['zip'])."',
        '".mysqli_real_escape_string($link, $_POST['insurance'])."',
        '".mysqli_real_escape_string($link, $_POST['ssn'])."',
      '".mysqli_real_escape_string($link, $_POST['comment'])."')";

      $result = mysqli_query($link, $query);

      if($result)
      {
          move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

          //email setting
          $mail->setFrom('donotreply@reviewthatplace.com',$_POST["patientName"]);
          $mail->addAddress('info@powerspediatrics.com');
          $mail->addReplyTo($_POST["email"],$_POST["patientName"]);
          $mail->isHTML(true);
          $mail->Subject = "Submit Demo From  ".$_POST['patientName'];
        
         
          $mail->Body = '
          <h1>Details Of Form</h1>
          <table id="rf" style="border-collapse: collapse;
          width: 100%;">
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Uploaded File</th>
                <td style="border: 1px solid #ddd;padding: 8px;"><a href="https://agrawalravionline.tech/rtp1606/pdf/submitDemo/'.$fileUploaded.'">'.$fileUploaded.'</a></td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Patient Name</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patientName'].'</td>
            </tr>
            
              <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Email</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Phone Number</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['phoneNumber'].'</td>
            </tr>
            
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Date</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['date'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Sex</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['gender'].'</td>
            </tr>
            
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Street</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['street'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">City</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['city'].'</td>
            </tr>
            
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">State</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['state'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Zip</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['zip'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Insurance</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['insurance'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">SSN</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['ssn'].'</td>
            </tr>
         
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
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
      //echo "alert('$mail->ErrorInfo')";
            echo "alert('Sorry!! Can not Record Your Query. Please try again after some time')";
            echo "</script>";
          }

        
      }
    }
  }


  if(isset($_POST['bookAppointment']))
  {

    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
    
    $mail->Username = 'donotreply@reviewthatplace.com';
    $mail->Password = 'RTP7037!';

    if(empty($_POST['email']))
    {
      $error = "Please Fill All The Details To Submit Your Query";
    }

    else
    {
      //Uploading document
      $target_dir = "pdf/appointment/";
      $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        
      $fileUploaded = $_FILES["fileToUpload"]["name"];

      $query = "INSERT INTO `requestappointment` (`uploadFile`,`patientName`,`dob`, `email`,`phoneNumber`,`date`, `time`, `appointmentType`,`comment`) VALUES ('{$fileUploaded}',
        '".mysqli_real_escape_string($link, $_POST['patientName'])."', 
        '".mysqli_real_escape_string($link, $_POST['dob'])."', 
        '".mysqli_real_escape_string($link, $_POST['email'])."',
        '".mysqli_real_escape_string($link, $_POST['phoneNumber'])."',
        '".mysqli_real_escape_string($link, $_POST['date'])."',
        '".mysqli_real_escape_string($link, $_POST['time'])."',
        '".mysqli_real_escape_string($link, $_POST['appointmentType'])."',
      '".mysqli_real_escape_string($link, $_POST['comment'])."')";

      $result = mysqli_query($link, $query);

      if($result)
      {
          move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

           //email setting
          $mail->setFrom('donotreply@reviewthatplace.com',$_POST["patientName"]);
          $mail->addAddress('info@powerspediatrics.com');
          $mail->addReplyTo($_POST["email"],$_POST["patientName"]);
          $mail->isHTML(true);
          $mail->Subject = "Request Appointment From  ".$_POST['patientName'];


           
           $mail->Body = '
          <h1>Details Of Form</h1>
          <table id="rf" style="border-collapse: collapse;
          width: 100%;">
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Uploaded File</th>
                <td style="border: 1px solid #ddd;padding: 8px;"><a href="https://agrawalravionline.tech/rtp1606/pdf/appointment/'.$fileUploaded.'">'.$fileUploaded.'</a></td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Patient Name</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['patientName'].'</td>
            </tr>
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Date Of Birth</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['dob'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Email</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['email'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Phone Number</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['phoneNumber'].'</td>
            </tr>
            
            
            <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Date</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['date'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Time</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['time'].'</td>
            </tr>
            
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;">Appointment Type</th>
                <td style="border: 1px solid #ddd;padding: 8px;">'.$_POST['appointmentType'].'</td>
            </tr>
            
             <tr>
              <th style="border: 1px solid #ddd;padding: 8px;padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
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
            echo "alert('Sorry!! Can not Record Your Query. Please try again after some time')";
            echo "</script>";
          }
         
      }
    }
  }
?>