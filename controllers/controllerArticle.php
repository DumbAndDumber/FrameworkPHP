<?php namespace oss\FrameworkPHP\controllers;
use oss\FrameworkPHP\framework\Controller;
use oss\FrameworkPHP\modeles\Article;
use oss\FrameworkPHP\modeles\Commentaire;

class ControllerArticle extends Controller {
	private $article;
	private $commentaire;
	private $vue;

	private $articleObject;
	private $commentaireList;

	public function __construct() {
		$this->article = new Article();
		$this->commentaire = new Commentaire();
	}

	// Affiche les détails sur un article
	public function article($idArticle) {

		// code à implémenter

		// récupérer l'article
		$this->articleObject = $this->article->getArticle($idArticle);

		// récupérer la liste des commentaires
		$this->commentaireList = $this->commentaire->getCommentaires($idArticle);

		// générer la vue
		$this->genererVue(array("articleObject" => $this->articleObject->fetch(), "commentaireList" => $this->commentaireList));

	}

	// Ajoute un commentaire à un article
	public function commenter($contenu, $idArticle) {

		// code à implémenter

		// Sauvegarde du commentaire
		$this->commentaire->ajouterCommentaire($contenu, $idArticle);

		// Actualisation de l'affichage du l’article
		header("Location: index.php?controller=article&idArticle=$idArticle");
	}

	public function index() {
		$this->article($this->requete->getParametre("idArticle"));
	}

	public function post() {
		$this->commenter($this->requete->getParametre("contenu"), $this->requete->getParametre("id"));
	}
}
