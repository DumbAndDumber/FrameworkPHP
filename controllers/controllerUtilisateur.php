<?php
require_once 'modeles/utilisateur.php';
require_once 'framework/vue.php';
require_once 'framework/controller.php';

class ControllerUtilisateur extends Controller {
	private $utilisateur;

	public function __construct() {
		$this->utilisateur = new Utilisateur();
	}

	public function utilisateur() {
		$this->genererVue();
	}

	public function index() {
		$this->utilisateur();
	}

	public function login() {
		$login = $this->utilisateur->logIn($this->requete->getParametre("email"), 
			$this->requete->getParametre("motDePasse"))->fetch();

		if (!$login) {
			header("Location: index.php?controller=utilisateur&loginError=Email ou mot de passe invalide.");
		}
		else {
			$_SESSION["user"] = $login;
			header("Location: index.php");
		}
	}

	public function signin() {
		try {
			$signin = $this->utilisateur->signIn($this->requete->getParametre("email"), 
			$this->requete->getParametre("pseudo"), 
			$this->requete->getParametre("motDePasse"))->fetch();

			header("Location: index.php?controller=utilisateur&signinError=Vous pouvez désormais vous connecter.");
		}
		catch( PDOException $Exception ) {
			if ($Exception->getCode() == 23000)
				header("Location: index.php?controller=utilisateur&signinError=Cet email ou nom de compte est déjà utilisé");
			else
				header("Location: index.php?controller=utilisateur&signinError=Vous pouvez désormais vous connecter.");
		}
	}
}
?>