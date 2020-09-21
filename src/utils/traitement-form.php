<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  require '../vendor/autoload.php';
  
  
  if(isset($_POST['email']) && isset($_POST['body']) && isset($_POST['name']) && isset($_POST['firstname'])) {
      $mail = new PHPMailer(true);

      $email = $_POST['email'];
      $body = $_POST['body'];
      $name = $_POST['name'];
      $firstname = $_POST['firstname'];
      
      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'qnicolle17@gmail.com';                     // SMTP username
          $mail->Password   = 'notrealpassword';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
      
          //Recipients
          $mail->setFrom('from@example.com', 'Mailer');
          $mail->addAddress('qnicolle17@gmail.com');               // Name is optional
      
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = "$firstname $name a voulu vous contacter";
          $mail->Body    = "$firstname $name veut avoir un <strong>entretien</strong> avec toi ! <br/> Voici son message : <br/> <pre>$body</pre> <br/>Pour le contacter : $email";
          $mail->AltBody = "$firstname $name veut avoir un entretien avec toi ! Voici son message : $body Pour le contacter : $email";
      
          $mail->send();
          echo 'Message has been sent';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
  }

  header('Location:/');

    
