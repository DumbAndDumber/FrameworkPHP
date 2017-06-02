<?php for ($i = 0; $i < sizeof($donnees['article']); ++$i) {?>
	<article>
		<header>
			<a href="index.php?controller=article&idArticle={{ Id_<?php echo $i; ?> }}">
				<h1 class="titreArticle">{{ Titre_<?= $i ?> }}</h1>
			</a>
			<time>{{ DatePublication_<?php echo $i; ?> }}</time>
		</header>
		<p>{{ Contenu_<?= $i; ?> }}</p>
		<hr />
	</article>
<?php } ?>
