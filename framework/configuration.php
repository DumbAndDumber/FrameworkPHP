<?php namespace oss\FrameworkPHP\framework;

class Configuration {
	private static $parameters;

	// Renvoie la valeur d'un paramètre de configuration
	public static function get($nom, $valeurParDefaut = null) {
        self::setParameters();
		if (isset(self::$parameters[$nom])) {
			$valeur = self::$parameters[$nom];
		}
		else {
			$valeur = $valeurParDefaut;
		}
		return $valeur;
	}

	// Renvoie le tableau des paramètres en le chargeant au besoin
	public static function setParameters($env = 'dev') {
		if (self::$parameters == null) {
		    if ($env !== 'prod') {
		        $env = 'dev';
            }

			$cheminFichier = "config/$env.ini";

			if (!file_exists($cheminFichier)) {
				throw new \Exception("Aucun fichier de configuration trouvé");
			}
            self::$parameters = parse_ini_file($cheminFichier);
		}
		return self::$parameters;
	}
}
