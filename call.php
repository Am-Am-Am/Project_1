<?php 


$message = "<span style='font-size: 15px; line-height: 18px;'>";


	$phone = $_POST['telNo'];
	$message .= "<b>Телефон:</b> $phone<br>";


//$to  = "aristova.spb@gmail.com, verolex@bk.ru, sergey@horoshiystart.ru";
$to ="Andrew@aidlegal.ru";

$subject = "юр-консультация-мск.рф"; 


$headers = 'From: verolex info@hello21group.ru' . "\r\n" ;
$headers .='Reply-To: '. $too . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   


mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers); 


?>