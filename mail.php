<?php 


// Conatct Form
if(isset($_POST['submit'])){

  $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; 
  $email_subject = 'Dr. Aldo Taranto';

  $to = 'aldo.taranto@aldotaranto.com';
  
   $email_message ='

      <table width="100%" >

  <tr>

    <td width="100%" align="center">

      <table width="100%" cellpadding="0" cellspacing="0" border="0">

        

        <tr>

          <td>

            <table width="100%" border="1" cellpadding="5" style="border-collapse:collapse;">

              
            

              <tr >

                <td width="15%" style="color:#000;font-weight:bold;background-color: rgb(255, 193, 4);">Name</td>

                <td width="100%" style="color:#000;">'.$name.'</td>

             
               <tr >

                <td width="15%" style="color:#000;font-weight:bold;background-color: rgb(255, 193, 4);">Email</td>

                <td width="100%" style="color:#000;">'.$email.'</td>

              </tr>
             
               <tr >

                <td width="15%" style="color:#000;font-weight:bold;background-color: rgb(255, 193, 4);">Subject</td>

                <td width="100%" style="color:#000;">'.$subject.'</td>

              </tr>
               <tr style="">

                <td width="15%" style="color:#000;font-weight:bold;background-color: rgb(255, 193, 4);">Message</td>

                <td width="100%" style="color:#000;">'.$message.'</td>

              </tr>
              
              
              
              
              
              

            
            </table>

          </td>

        </tr>

      </table>

    </td>

  </tr>

</table>

    ';
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: ".$email. "\r\n";
    
    if( mail($to,$email_subject,$email_message,$headers))
    {
    echo '<div class="alert alert-success">Thank You!!! Your Message has been Submitted Successfully.
</div>';              
//echo "<script>setTimeout(\"location.href = 'index.html#contact';\",1000);</script>";
      }
      else
      {
       echo   '<div class="alert alert-danger"><strong>Error!</strong> Your  submission has error please try again...</div>';
      }


}




?>