<?php
	$email = $_GET['mail_footer']; 
	
	$email = htmlspecialchars($email);
	
	if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
	echo "Адрес указан корректно.";
		echo '<br>';
	echo $email;
}else{
	echo "Адрес указан не правильно.";
}	
?>