<?php

namespace Router;

class Router {
    public $url;
    public $routes = [];


//On envoie l'url que l'on récupère dans la variable $url
    public function __construct($url)
    {//retire les / en début et en fin d'url
        $this->url =trim($url, '/');
    }

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action); 
    }

    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run()
    {//Rercherche automatique de la méthode GET ou POST de façon dynamique
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            //Si la route match avec l'Url alors on appelle notre route
            if ($route->matches($this->url)) {
                //Appel du bon contrôleur avec la bonne fonction
                return $route->execute();
            }
        }

    return header('HTTP/1.0 404 Not Found');

        }
    } 




?>