<article>
	<header>
		<h1 class="titreArticle"><?php echo $donnees['articleObject']["Titre"]?></h1>
		<time><?php echo $donnees['articleObject']["DatePublication"]?></time>
	</header>
	<p><?php echo $donnees['articleObject']["Contenu"]?></p>
</article>
<hr />

<header>
	<h1 id="titreReponses">Réponses à <?php echo $donnees['articleObject']["Titre"]?></h1>
</header>

<?php foreach ($donnees['commentaireList'] as $key => $commentaire) { ?>
	<p>commenté par : <?php echo $commentaire["Pseudo"]?></p>
	<p><?php echo $commentaire["Contenu"]?></p>
<?php } ?>

<form method="post" action="index.php?controller=article&action=post">
	<textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required>
	</textarea><br />
	<input type="hidden" name="id" value="<?php echo $donnees['articleObject']["Id"]?>" />
	<input type="submit" value="Commenter" />
</form>