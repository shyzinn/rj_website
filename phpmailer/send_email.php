<?php	
if(isset ($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		echo "<script> alert('aaaaa'); </script>";
	

	date_default_timezone_set('Etc/UTC');

	require './PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "publicx78@gmail.com";
	$mail->Password = "P12345678";
	$mail->setFrom('publicx78@gmail.com', 'Farhan');
	$mail->addAddress($email,$name);
	$mail->Subject = $subject;
	$mail->msgHTML('<!DOCTYPE html><html><body>' .$message. '</body></html>');
	$mail->AltBody = $subject;
	
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
	
}



	function save_mail($mail) {
		//You can change 'Sent Mail' to any other folder or tag
		$path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

		//Tell your server to open an IMAP connection using the same username and password as you used for SMTP
		$imapStream = imap_open($path, $mail->Username, $mail->Password);

		$result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
		imap_close($imapStream);

		return $result;
	}

?>