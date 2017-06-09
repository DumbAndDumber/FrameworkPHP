<?php namespace oss\FrameworkPHP\controllers;


use oss\FrameworkPHP\framework\Controller;
use oss\FrameworkPHP\modeles\Article;

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

		// générer la vue
		$this->genererVue(array("article" => $this->articleList));
	}

	public function index() {
		$this->accueil();
	}
}
