
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
	
	$bodyText = "<b>".$name."</b> servicio:".$budget." <br /><br />mensaje:".$comment." <br> <br>Desde: ".$from."<br/> Telefono:".$phone;
	$sender = "info@cargaexpress.com.uy";
	$subject="Contacto via Web";
	$recipient = 'info@cargaexpress.com.uy';
	$usernameSmtp = 'AKIA5DC55FYN4CSLNN6G';
	$passwordSmtp = 'BCKLn065TCA6CjmEi77OCho2uWwH9TGDxAWNl/BMNhGJ';
	$host = 'email-smtp.us-east-1.amazonaws.com';
	$port = 587;
	$bodyHtml = str_replace('\n',"<br />",$bodyText);

	$mail = new PHPMailer(true);
	try{
		$mail->isSMTP();
		$mail->setFrom($sender, $name);
		$mail->Username   = $usernameSmtp;
		$mail->Password   = $passwordSmtp;
		$mail->Host       = $host;
		$mail->Port       = $port;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = 'tls';
		
		$mail->addAddress($recipient);
		$mail->addReplyTo($from, $name);

		$mail->isHTML(true);
		$mail->Subject    = $subject;
		$mail->Body       = $bodyHtml;
		$mail->AltBody    = $bodyText;
		$mail->Send();
		echo "El mensaje ha sido enviado!";
		return true;
		// echo $errorDesc;
		} catch (phpmailerException $e) {
			$errorDesc = $e->errorMessage();
			return false;
		} catch (Exception $e) {
			$errorDesc = $mail->ErrorInfo;
			return false;
		}		
	

	
		
}	
?>
                