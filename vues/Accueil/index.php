<?php while ($data = $donnees["article"]->fetch()) { ?>
	<article>
		<header>
			<a href="index.php?controller=article&idArticle=<?php echo $data["Id"] ?>">
				<h1 class="titreArticle"><?php echo $data["Titre"] ?></h1>
			</a>
			<time><?php echo $data["DatePublication"] ?></time>
		</header>
		<p><?php echo $data["Contenu"] ?></p>
		<hr />
	</article>
<?php } ?>