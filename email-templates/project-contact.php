
<?php

require_once 'classes/mail.php';
require_once 'classes/class.phpmailer.php';
require_once 'classes/class.smtp.php';

if(isset($_POST['email'])){

	$name =$_POST["name"];
	$from =$_POST["email"];
	$phone=$_POST["phone"];
	$comment=$_POST["comment"];
	$budget=$_POST["budget"];
	
	// Email Receiver Address
	$receiver="info@cargaexpress.com.uy";
	$subject="Contacto via Web";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <'.$from.'>' . "\r\n";

	$message = "$name.": ".$comment;
	$mail = new PHPMailer();
	$mail-> IsSMTP();

	$mail->Host='s2smtpout.secureserver.net';


	if($from <> '')  $mail-> From =$from;
	else $mail-> From = 'info@cargaexpress.com.uy'; //direccion que ve el usuario

	if($tname == '') $mail-> FromName = 'Web Carga Express';
	else $mail->FromName = $tname;
		
	$mail-> Subject = utf8_decode("Info Caega Express Web");
	$mail-> AltBody = utf8_decode($message);
	$mail-> MsgHTML(utf8_decode("");				
	$mail-> AddAddress($receiver);
	$mail->IsHTML(true);
	# print_r($mail);		
				
	$sent=$mail->Send();

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
?>
