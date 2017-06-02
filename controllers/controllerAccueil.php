<?php
require_once 'modeles/article.php';
require_once 'framework/vue.php';
require_once 'framework/controller.php';

class ControllerAccueil extends Controller {
	private $article;
	private $articleList;
	private $vue;

	public function __construct() {
		$this->article = new Article();
	}

	// Affiche la liste de tous les articles du blog
	public function accueil() {

		// code à implémenter

		// récupérer la liste des articles
		$this->articleList = $this->article->getArticles();

		// créer la vue Accueil
		$this->vue = new Vue("index", "accueil");

		// générer la vue
		$this->genererVue(array("article" => $this->articleList));
	}

	public function index() {
		$this->accueil();
	}
}
?>