
<?php 
  console.log("ENTRO AL PHP");
  if(isset($_POST['email'])){

	echo "NETRO AL PHP";
	console.log("NETRO AL PHP");
	  
	$name =$_POST["name"];
	$from =$_POST["email"];
	$phone=$_POST["phone"];
	$comment=$_POST["comment"];
	$budget=$_POST["budget"];
	
	// Email Receiver Address
	$receiver="dfilgueiras89@gmail.com";
	$subject="Contacto via Web";

	$message = "$name.": ".$comment;
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <'.$from.'>' . "\r\n";
	if(mail($receiver,$subject,$message,$headers)) {
		//Success Message
		echo "El mensaje ha sido enviado!";
	}
	else {	
		//Fail Message
		echo "El mensaje no pudo ser enviado!";
	}

  }
?>
