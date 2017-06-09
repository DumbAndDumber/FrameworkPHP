<?php

class Article extends Modele {
	// Renvoie la liste des articles du blog
	public function getArticles() {

		return $this->executerRequete("SELECT * FROM php_article")->fetchAll();

	}


	// Renvoie les informations sur un article
	public function getArticle($idArticle) {


		return $this->executerRequete("SELECT * FROM php_article WHERE Id = :id", array("id" => $idArticle));

	}
}

?>