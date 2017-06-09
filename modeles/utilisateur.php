<?php
require_once 'framework/modele.php';

class Utilisateur extends Modele {
	// Renvoie l'utilisateur connecté
	public function getUtilisateur($idUtilisateur) {
		return $this->executerRequete("SELECT * FROM php_utilisateur WHERE Id = :id",
			array("id" => $idUtilisateur))->fetch();
	}

	// Renvoie le résultat de la connexion
	public function logIn($email, $motDePasse) {
		return $this->executerRequete("SELECT * FROM php_utilisateur WHERE Email = :email
			AND MotDePasse = :motDePasse", array("email" => $email, "motDePasse" => $motDePasse))->fetch();
	}

	// Renvoie le résultat de l'inscription
	public function signIn($email, $pseudo, $motDePasse) {
		return $this->executerRequete("INSERT INTO php_utilisateur (Email, Pseudo, MotDePasse) VALUES (:email, :pseudo, :motDePasse)",
			array("email" => $email, "pseudo" => $pseudo, "motDePasse" => $motDePasse));
	}
}

?>