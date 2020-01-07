<?php

if (isset($_POST['send']))
{

    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['mgs']) && !empty($_POST['email']))
    {
      $name = $_POST['name'];
      $subje= $_POST['asunto'];
      $name = $_POST['mgs'];
      $subje= $_POST['email'];
      $header = "From: noreaply@example.com"."\r\n";
      $header.= "Reply-to: noreaply@example.com"."\r\n";
      $header.= "X-Mailer: PHP/".phpversion();
      $mail= @mail($email, $asunto, $msg, $header);
      if($mail)
      {
          echo"<h4>!mail enviado!</h4>";
      }

    }
}
?>