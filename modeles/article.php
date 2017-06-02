<?php
require_once 'framework/modele.php';

class Article extends Modele {
	// Renvoie la liste des articles du blog
	public function getArticles() {

		// code à implémenter

		// retourne la liste des articles

		// utiliser pour cela executerRequete avec la requête SQL
		return $this->executerRequete("SELECT * FROM php_article");

	}


	// Renvoie les informations sur un article
	public function getArticle($idArticle) {

		// code à implémenter

		// retourne l'article ou génère un message d'erreur via une exeption : Aucun article ne correspond à l'identifiant '$idArticle'"

		// utiliser pour cela executerRequete avec la requête SQL et $idArticle en paramètre (attention les paramètres sont sous forme de tableau)
		return $this->executerRequete("SELECT * FROM php_article WHERE Id = :id", array("id" => $idArticle));

	}
}

?>