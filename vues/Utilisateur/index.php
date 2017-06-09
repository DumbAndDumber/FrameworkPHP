<article>
	<form method="post" action="index.php?controller=utilisateur&action=login">
		<input type="text" name="email" placeholder="Votre adresse email" required />
		<input type="password" name="motDePasse" placeholder="Votre mot de passe" required />
		<input type="submit" value="Se connecter" />
	</form>
	<?php if (isset($_GET["loginError"])) { ?>
		<p>
		<?php echo $_GET["loginError"]; ?>
		</p>
	<?php } ?>
	<hr />
</article>

<article>
	<form method="post" action="index.php?controller=utilisateur&action=signin">
		<input type="text" name="email" placeholder="Votre adresse email" required />
		<input type="text" name="pseudo" placeholder="Votre pseudo" required />
		<input type="password" name="motDePasse" placeholder="Votre mot de passe" required />
		<input type="submit" value="S'inscrire" />
	</form>
	<?php if (isset($_GET["signinError"])) { ?>
		<p>
		<?php echo $_GET["signinError"]; ?>
		</p>
	<?php } ?>
</article>