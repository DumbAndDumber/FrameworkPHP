<?php

class Commentaire extends Modele {
	// Renvoie la liste des commentaires associés à un article
	public function getCommentaires($idArticle) {

		// code à implémenter

		// retourne la liste des commentaires

		// utiliser pour cela executerRequete avec la requête SQL
		return $this->executerRequete("SELECT c.Contenu, c.DatePublication, u.Pseudo FROM php_commentaire c INNER JOIN php_utilisateur u ON c.IdUtilisateur = u.Id WHERE c.IdArticle = :id",
			array("id" => $idArticle));

	}



	// Ajoute un commentaire dans la base
	public function ajouterCommentaire($contenu, $idArticle) {

		// code à implémenter

		// requête d'insert pour ajouter un commentaire'

		// utiliser pour cela executerRequete avec la requête SQL et $idArticle, $auteur, $contenu et $date en paramètre (attention les paramètres sont sous forme de tableau)
		$this->executerRequete("INSERT INTO php_commentaire (IdArticle, IdUtilisateur, Contenu) VALUES (:id, :idUtilisateur, :contenu)",
			array("id" => $idArticle, "idUtilisateur" => $_SESSION["utilisateur"]["Id"], "contenu" => $contenu));

	}
}

