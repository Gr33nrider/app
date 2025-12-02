<?php

	$db_host = 'db';
	$db_user = 'root';
	$db_password = 'root';
	$db_name = 'notepaddb';
	
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$link) {
    	echo('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
?>
