<?php

require 'scripts/db.php';


if(!isset($_POST['confirm'])) return;

if(empty($_POST['username']) OR empty($_POST['password'])) $error_msg = "veuillez remplir tous les champs.";
else {
	$in_username = htmlspecialchars($_POST['username']); // récup du pseudo
	$in_password = htmlspecialchars($_POST['password']); // récup du mot de passe

	// récupère les données du compte s'il existe
	$get_user_info = $db->prepare('
		SELECT * FROM users WHERE username = ?
	');
	$get_user_info->execute(array($in_username));
	$user_info = $get_user_info->fetch();

	// vérification des données de connexion
	if(
		$get_user_info->rowCount() == 0 OR
		!password_verify($in_password,$user_info['password'])
	) { // message d'erreur si le compte n'existe pas ou que le mot de passe est incorrect
    $error_msg = "le pseudo et / ou le mot de passe est incorrect.";
  }
	// connecte l'utilisateur si le compte existe
	else {
		$get_user_data = $db->prepare('
			SELECT id, username FROM users WHERE username = ?
		');
		$get_user_data->execute(array($in_username));

		// stocke les données de l'utilisateur connecté dans $_SESSION
		$user_data = $get_user_data->fetch();
		$_SESSION['auth'] = true;
		$_SESSION['id'] = $user_data['id'];
		$_SESSION['username'] = $user_data['username'];

		// redirige l'utilisateur vers la page d'accueil
		header('Location: index.php');
	}
}