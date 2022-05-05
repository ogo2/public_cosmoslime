<?php
	
	$CONNECT = mysqli_connect('localhost', '','', '');
	// $CONNECT = mysqli_connect('localhost', 'root','', 'cosmoslime');	
	mysqli_set_charset($CONNECT, "utf8mb4");
	if (!$CONNECT) {
    	die('Ошибка соединения: ' . mysql_error());
	}
?>