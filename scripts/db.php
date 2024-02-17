<?php

try {
	$db = new PDO(
		'mysql:host=localhost;dbname=musicavies;charset=utf8;','root',''
	);
} catch(Exception $e) {
	// phpinfo();
	die('la connexion à la base de données a échoué : '.$e->getMessage());
} 

session_start();


