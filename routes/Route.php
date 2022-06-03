<?php

namespace Router;

use Database\DBConnection;

class Route {

    public $path;
    public $action;
    public $matches;

    public function __construct($path, $action)
    {//retire les / en début et en fin d'url
        $this->path = trim($path, '/');
        $this->action = $action;
    }
        //On récupère l'Url
    public function matches(string $url)
    {//On remplace tout ce qui commence par : et qui serait un caractère alpha numérique qui ne soit pas un / et qui serait répété plusieurs fois (dans le path)
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);

        $pathToMatch = "#^$path$#";
//
        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }
    }


    public function execute()
    {// Délimiteur de notre action
        $params = explode('/', $this->action);
        //Première clé du tableau params est notre controller
        $controller = new $params[0](new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD));
        //Deuxième clé du talbeau params : notre méthode
        $method = $params[1];
        //                                      on appelle la métode avec un paramètre sinon sans paramètre
        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}