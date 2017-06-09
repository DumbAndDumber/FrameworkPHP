<?php

class Commentaire extends Modele {
	// Renvoie la liste des commentaires associés à un article
	public function getCommentaires($idArticle) {

		// code à implémenter

		// retourne la liste des commentaires

		// utiliser pour cela executerRequete avec la requête SQL
		return $this->executerRequete("SELECT * FROM php_commentaire WHERE IdArticle = :id", array("id" => $idArticle));

	}



	// Ajoute un commentaire dans la base
	public function ajouterCommentaire($auteur, $contenu, $idArticle) {

		// code à implémenter

		// requête d'insert pour ajouter un commentaire'

		// utiliser pour cela executerRequete avec la requête SQL et $idArticle, $auteur, $contenu et $date en paramètre (attention les paramètres sont sous forme de tableau)
		$datePublication = date("Y-m-d H:i:s");
		$this->executerRequete("INSERT INTO php_commentaire (IdArticle, Auteur, Contenu, DatePublication) VALUES (:id, :auteur, :contenu, :datePublication)", array("id" => $idArticle, "auteur" => $auteur, "contenu" => $contenu, "datePublication" => $datePublication));

	}
}

