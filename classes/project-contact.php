
<?php
require '../../../classes/PHPMailer/src/Exception.php';
require '../../../classes/PHPMailer/src/PHPMailer.php';
require '../../../classes/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['email'])){

	$name =$_POST["name"];
	$from =$_POST["email"];
	$phone=$_POST["phone"];
	$comment=$_POST["comment"];
	$budget=$_POST["budget"];
	
	$bodyText = "<b>".$name."</b> servicio:".$budget." <br /><br />escribió:".$comment." <br> <br>Desde: ".$from."<br/> Telefono:".$phone;
	$sender = "info@cargaexpress.com.uy";
	$subject="Contacto via Web";

	$senderName = $name;
	$recipient = 'info@cargaexpress.com.uy';
	$replyToName = $name;
	$replyToEmail = $from; 
	$usernameSmtp = 'AKIA5DC55FYN4CSLNN6G';
	$passwordSmtp = 'BCKLn065TCA6CjmEi77OCho2uWwH9TGDxAWNl/BMNhGJ';
	$host = 'email-smtp.us-east-1.amazonaws.com';
	$port = 587;
	$bodyHtml = str_replace('\n',"<br />",$bodyText);

	$mail = new PHPMailer(true);
	
	try {
		$mail->isSMTP();
		$mail->setFrom($sender, $senderName);
		$mail->Username   = $usernameSmtp;
		$mail->Password   = $passwordSmtp;
		$mail->Host       = $host;
		$mail->Port       = $port;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = 'tls';
		
		$mail->addAddress($recipient);
		$mail->addReplyTo($replyToEmail, $replyToName);

		$mail->isHTML(true);
		$mail->Subject    = $subject;
		$mail->Body       = $bodyHtml;
		$mail->AltBody    = $bodyText;
		$sent = $mail->Send();
		if($sent) {
		
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
                