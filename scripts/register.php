<?php

require 'scripts/db.php';


if(!isset($_POST['confirm'])) return;

if(empty($_POST['username']) OR empty($_POST['password'])) $error_msg = "veuillez remplir tous les champs.";
else {
	$new_username = htmlspecialchars($_POST['username']); // récup du pseudo et protection anti-injection
	$new_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // récup et cryptage du mot de passe



	// vérifie si l'utilisateur a déjà un compte (pas de doublons de pseudo)
	$isUsernameTaken = $db->prepare('
		SELECT username FROM users WHERE username = ?
	');
	$isUsernameTaken->execute(array($new_username));

	if($isUsernameTaken->rowCount() > 0) $error_msg = "ce pseudo est déjà pris.";
	else {
		// inscrit l'utilisateur
		$suscribeUser = $db->prepare('
			INSERT INTO users (username, password) VALUES (
				?,
				?
			)
		');
		$suscribeUser->execute(array($new_username, $new_password));

		// connecte l'utilisateur
		$get_user_data = $db->prepare('
			SELECT id, username FROM users WHERE username = ?
		');
		$get_user_data->execute(array($new_username));

		$user_data = $get_user_data->fetch();
		$_SESSION['auth'] = true;
		$_SESSION['id'] = $user_data['id'];
		$_SESSION['username'] = $user_data['username'];

		// redirige l'utilisateur vers la page d'accueil
		header('Location: index.php');
	}

}