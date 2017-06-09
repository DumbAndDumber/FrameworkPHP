<?php

namespace oss\FrameworkPHP\framework;


class Router {
	// Route une requête entrante : exécute l'action associée
	public function routerRequete() {
		try {
			// Fusion des paramètres GET et POST de la requête
			$requete = new requete($_REQUEST);
			$controller = $this->creerController($requete);
			$action = $this->creerAction($requete);
			$controller->executerAction($action);
		}
		catch (\Exception $e) {
			$this->gererErreur($e);
		}
	}

	// Crée le contrôleur approprié en fonction de la requête reçue
	private function creerController(Requete $requete) : Controller {
		$controllerName = "Accueil"; // Contrôleur par défaut
		if ($requete->existeParametre('controller')) {
            $controllerName = $requete->getParametre('controller');
			// Première lettre en majuscule
            $controllerName = ucfirst(strtolower($controllerName));
		}

		if ($this->needLogin($controllerName)) {
			$controller = "Utilisateur";
		}

		// Création du nom du fichier du contrôleur
		$classeController = 'oss\FrameworkPHP\controllers\controller' . $controllerName;
		// Instanciation du contrôleur adapté à la requête
        /** @var Controller $controller */
        $controller = new $classeController();
        $controller->setRequete($requete);
        return $controller;
	}

	// Détermine l'action à exécuter en fonction de la requête reçue
	private function creerAction(Requete $requete) {
		$action = "index"; // Action par défaut
		
		if ($requete->existeParametre('action')) {
			$action = $requete->getParametre('action');
		}
		return $action;
	}

	// Gère une erreur d'exécution (exception)
	private function gererErreur(\Exception $exception) {
		$vue = new Vue('erreur');
		$vue->generer(array('msgErreur' => $exception->getMessage()));
	}

	private function needLogin($controller) {
		return !isset($_SESSION["utilisateur"]) && 
			in_array($controller, explode(",", Configuration::get("controllersNeedLogin")));
	}
}
?>