<?php
	$email = $_GET['email']; 
	$password = $_GET['psw'];
	
	$email = htmlspecialchars($email);
	$password = htmlspecialchars($password);
	
	if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
	echo "Адрес указан корректно.";
		echo '<br>';
	echo $email;
		echo '<br>';
	echo $password;
		echo '<br>';
	echo password_hash($password, PASSWORD_DEFAULT);
}else{
	echo "Адрес указан не правильно.";
}	
?>