<?php

	session_start();
	session_destroy();

	setcookie('isValid', 'false', time()-1000, '/');
	header('location: ../view/logIn.php');

?>