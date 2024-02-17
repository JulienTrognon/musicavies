<?php if(isset($error_msg)) echo '<p class="log_error">'.$error_msg.'</p>'; ?>

<form method="post">
	<label for="username">pseudo</label>
	<input type="text" id="username" name="username">

	<label for="password">mot de passe</label>
	<input type="password" id="password" name="password">

	<button type="submit" name="confirm">SE CONNECTER</button>
	<p><a href="signup.php">s'inscrire</a></p>
</form>