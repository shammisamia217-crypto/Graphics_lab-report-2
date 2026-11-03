<?php

	/* XAMPP defaults: change the password or port here only if your XAMPP MySQL differs */
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'lms2';
	$db_port = 3306;

	/* PHP 8.1+ throws exceptions by default; keep the old return-false behaviour this app expects */
	mysqli_report(MYSQLI_REPORT_OFF);

	$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

	if(!$db)
	{
		die("Connection failed: " .mysqli_connect_error());
	}

	mysqli_set_charset($db, 'utf8mb4');

	/* XAMPP's MariaDB runs in strict mode, which rejects INSERT ... VALUES('',...) for auto-increment ids */
	mysqli_query($db, "SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");

	/*echo "Connected successfully.";*/

?>
