<section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact us</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Make us a feedback about your experience !</div>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">DigiDo</div>
                                    <div class="sub-title">humaniteam2022@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message</div>
                        <form action="" method="post">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" name="exp" required>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Subject" name="subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" name="sent">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		
		<?php
if(isset($_POST['sent'])){
   // Test fonction mail();
   // *** A configurer
   $to    = "humaniteam2022@gmail.com";
   $from  = $_POST["exp"] ;
   $subj  = $_POST["subject"] ;
   $message  = $_POST["message"] ;
   $name  = $_POST["name"] ;
   // *** Laisser tel quel
   $Subject = $name;
   $Subject .=" talks about ";
   $Subject .= $subj;
   $mail_Data = "";
   $mail_Data .= "<html> \n";
   $mail_Data .= "<head> \n";
   $mail_Data .= "<title> $Subject </title> \n";
   $mail_Data .= "</head> \n";
   $mail_Data .= "<body> \n";
   $mail_Data .= $message;
   $mail_Data .= "</body> \n";
   $mail_Data .= "</HTML> \n";
   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";
   $CR_Mail = TRUE;
   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);
   if ($CR_Mail === FALSE)
      {
      echo "Email sending error <br> \n
<a href='index.php?ref=main-page&lang=".$lang."'>BACK TO THE WEBSITE</a>";
      }
   else
      {
      echo "Email sent ! <br> \n
<a href='index.php?ref=main-page&lang=".$lang."'>BACK TO THE WEBSITE</a>";
      }
}
?>

