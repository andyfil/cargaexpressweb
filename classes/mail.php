<?php



Class Mail{
		Public function getHtml(){ 								return $this->html;}
		Public function setHtml($html){ 						return $this->html=$html;}
		
		Public function setSubject($subject){ 					return $this->subject=$subject;}
		Public function getSubject(){ 							return $this->subject;}
		
		Public function setMail($mail){ 						return $this->mail=$mail;}
		Public function getMail(){ 								return $this->mail;}
		
		Public function setDestinatario($destinatario){ 		return $this->destinatario=$destinatario;}
		Public function getDestinatario(){ 						return $this->destinatario;}
		
		Public function setCuenta($cuenta){ 					return $this->cuenta=$cuenta;}
		Public function getCuenta(){ 						return $this->cuenta;}
		
		Public function setNombre($nombre){ 					return $this->nombre=$nombre;}
		Public function getNombre(){ 						return $this->nombre;}
		
		Public function setIdLog($IdLog){ 					return $this->idLog=$IdLog;}
		Public function getIdLog(){ 						return $this->idLog;}
		
		Public function sendMail(){			
				
				if(empty($this->html)) return null; //si no hay codigo html
				
				
				$mail = new PHPMailer();
				$mail-> IsSMTP();
    				//$mail->Host       = "smtp.gmail.com";
				//$mail->Port       = 465;
				//$mail->SMTPAuth   = true;
                                //$mail->SMTPSecure = 'ssl';
				//$mail->Username   = "";
    				//$mail->Password   = "";
			
			
				$mail->Host       = "email-smtp.us-east-1.amazonaws.com";
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'tls';	
				$mail->Port = 587;
				$mail->SetLanguage("en", 'classes/PHPMailer/language/');

				// Replace smtp_username with your Amazon SES SMTP user name.
				$usernameSmtp = 'AKIA5DC55FYN4CSLNN6G';
				// Replace smtp_password with your Amazon SES SMTP password.
				$passwordSmtp = 'BCKLn065TCA6CjmEi77OCho2uWwH9TGDxAWNl/BMNhGJ';
				$mail->Username = $usernameSmtp;
				$mail->Password = $passwordSmtp;

	
				if($this->cuenta<>'')  $mail-> From =$this->cuenta;
				else $mail-> From = 'info@cargaexpress.com.uy'; //direccion que ve el usuario
				
				if($this->getNombre()=='') $mail-> FromName = 'Web Carga Express';
				else $mail->FromName = $this->getNombre();
					
				$mail-> Subject = utf8_decode($this->subject);
				$mail-> AltBody = utf8_decode($this->html);
				$mail-> MsgHTML(utf8_decode($this->html));				
				$mail-> AddAddress($this->destinatario);
				$mail->IsHTML(true);
	            # print_r($mail);		
	                        
				$sent=$mail->Send();
				
				#while(!$sent && ($repeat<1)){ //si no puedo enviar trato 3 veces
				#	sleep(1);
				#	$sent=$mail->Send();
				#	$repeat++;
				#}
				
				if($sent) return true;
				else {
					$errorDesc = $mail->ErrorInfo;
					echo $errorDesc;
					return false;
				}				
	
		}
		

}

?>

