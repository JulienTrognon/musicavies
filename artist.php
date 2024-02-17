<?php 
	session_start();
	if(!isset($_SESSION['auth'])) header('Location: login.php');
?>


<!DOCTYPE html>

<html lang="fr">
	
<head>
	<?php require_once 'components/head.php' ?>

	<link rel="stylesheet" href="components/navbar.css">

	<title>Accueil - MusicAVi.e.s</title>
</head>


<body>
	<?php require_once 'components/navbar.php'; ?>

	<?php require_once 'components/zzztest_comp.php'; ?>
	
	<form action="" method="get"></form>

</body>

</html>