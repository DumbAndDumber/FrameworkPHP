<article>
	<header>
		<h1 class="titreArticle"><?php echo $articleObject["Titre"]?></h1>
		<time><?php echo $articleObject["DatePublication"]?></time>
	</header>
	<p><?php echo $articleObject["Contenu"]?></p>
</article>
<hr />

<header>
	<h1 id="titreReponses">Réponses à <?php echo $articleObject["Titre"]?></h1>
</header>

<?php foreach ($commentaireList as $key => $commentaire) { ?>
	<p>commenté par : <?php echo $commentaire["Auteur"]?></p>
	<p><?php echo $commentaire["Contenu"]?></p>
<?php } ?>

<form method="post" action="index.php?controller=article&action=post">
	<input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
	<textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required>
	</textarea><br />
	<input type="hidden" name="id" value="<?php echo $articleObject["Id"]?>" />
	<input type="submit" value="Commenter" />
</form>