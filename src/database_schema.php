<?php
	$pdo = new PDO("mysql:host=localhost", 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbname = 'awtecks_tasks';
	$dbname = "`".str_replace("`","``",$dbname)."`";
	$pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
	$pdo->query("use $dbname");

	$pdo->exec("
		CREATE TABLE IF NOT EXISTS `tasks` (
		`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		`name` varchar(200) COLLATE utf16_unicode_520_ci NOT NULL,
		`description` text COLLATE utf16_unicode_520_ci NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_520_ci;
	")

?>