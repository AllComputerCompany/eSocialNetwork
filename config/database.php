

<?php 

	define('DB_LOCALHOST', 'localhost');
	define('DB_NAME', 'social');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');

	try {

		$db = new PDO("mysql:host=".DB_LOCALHOST.";dbname=".DB_NAME,DB_USER, DB_PASSWORD);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		die("Erreur : ".$e->getMessage());
	}


?>