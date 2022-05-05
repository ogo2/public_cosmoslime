<?php 
	require('connect.php');
	$get_product = "ALTER TABLE rew ADD text_rew text NULL;";
	pg_query($CONNECT, $get_product);
	echo 'good';
?>