
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['email'])){

	$name =$_POST["name"];
	$from =$_POST["email"];
	$phone=$_POST["phone"];
	$comment=$_POST["comment"];
	$budget=$_POST["budget"];
	
	// LO NUEVO PARA AWS
	$bodyText = "<b>".$name."</b> servicio:".$budget." <br /><br />escribió:".$comment." <br> <br>Desde: ".$from."<br/> Telefono:".$phone;
	$sender = "info@cargaexpress.com.uy";
	$subject="Contacto via Web";

	// php mailer last version
	// Replace sender@example.com with your "From" address.
	// This address must be verified with Amazon SES.
	$senderName = $name;
	// Replace recipient@example.com with a "To" address. If your account
	// is still in the sandbox, this address must be verified.
	$recipient = 'info@cargaexpress.com.uy';
	$replyToName = $name;
	$replyToEmail = $from; 
	// Replace smtp_username with your Amazon SES SMTP user name.
	$usernameSmtp = 'AKIA5DC55FYN4CSLNN6G';
	// Replace smtp_password with your Amazon SES SMTP password.
	$passwordSmtp = 'BCKLn065TCA6CjmEi77OCho2uWwH9TGDxAWNl/BMNhGJ';
	// Specify a configuration set. If you do not want to use a configuration
	// set, comment or remove the next line.
	//$configurationSet = 'ConfigSet';

	// If you're using Amazon SES in a region other than US West (Oregon),
	// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
	// endpoint in the appropriate region.
	$host = 'email-smtp.us-east-1.amazonaws.com';
	$port = 587;
	// The HTML-formatted body of the email
	$bodyHtml = str_replace('\n',"<br />",$mensaje);

	$mail = new PHPMailer(true);
	
	try {
		// Specify the SMTP settings.
		$mail->isSMTP();
		$mail->setFrom($sender, $senderName);
		$mail->Username   = $usernameSmtp;
		$mail->Password   = $passwordSmtp;
		$mail->Host       = $host;
		$mail->Port       = $port;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = 'tls';
		//$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);
		//$mail->SMTPDebug = 4;

		// Specify the message recipients.
		$mail->addAddress($recipient);
		// You can also add CC, BCC, and additional To recipients here.
		$mail->addReplyTo($replyToEmail, $replyToName);

		// Specify the content of the message.
		$mail->isHTML(true);
		$mail->Subject    = $subject;
		$mail->Body       = $bodyHtml;
		$mail->AltBody    = $bodyText;
		$sent = $mail->Send();
		if($sent) {
			//Success Message
			echo "El mensaje ha sido enviado!";
			return true;
		}
		else {
			$errorDesc = $mail->ErrorInfo;
			#echo $errorDesc;
			return false;
		}		
	
	
	  }
		
}	
?>
                