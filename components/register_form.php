<?php if(isset($error_msg)) echo '<p class="log_error">'.$error_msg.'</p>'; ?>

<form method="post">
	<label for="username">pseudo</label>
	<input type="text" id="username" name="username">

	<label for="password">mot de passe</label>
	<input type="password" id="password" name="password">

	<label for="password">confirmation du mot de passe</label>
	<input type="reppassword" id="reppassword" name="reppassword">

	<button type="submit" name="confirm">S'INSCRIRE</button>
	<p><a href="login.php">se connecter</a></p>
</form>