<?php 

use Router\Router; 
// A chaque nouvelle instance d'une classe pas besoin de require
require '../vendor/autoload.php'; 

define ('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define ('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'projet4');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');


$router = new Router($_GET['url']);
        //      $path        namespace                      $action
//$router->get('/annonces', 'App\Controllers\AnnonceController/accueil');
$router->get('/genpdf', 'App\Controllers\AnnonceController/genPdf');

$router->get('/', 'App\Controllers\AnnonceController/index');
$router->post('/', 'App\Controllers\AnnonceController/search');

$router->get('/annonces/public/images/:id','App\Controllers\AnnonceController/image');
$router->get('/annonces/:id', 'App\Controllers\AnnonceController/show'); 

$router->get('/annonces/delete/:id', 'App\Controllers\AnnonceController/sup'); 
$router->get('/formulaire', 'App\Controllers\AnnonceController/form'); 
       //post cart Récupération de données     
$router->post('/formulaire', 'App\Controllers\AnnonceController/create'); 

$router->get('/formulaire/:id', 'App\Controllers\AnnonceController/edit');
$router->post('/formulaire/:id', 'App\Controllers\AnnonceController/updateMail');
//Lien du mail 
$router->get('/valid/:slug', 'App\Controllers\AnnonceController/valid');
$router->post('/valid/:id', 'App\Controllers\AnnonceController/valid');
// $router->get('/formulairemodif/:slug', 'App\Controllers\AnnonceController/formUpdate');
$router->get('/formulairemail/:slug', 'App\Controllers\AnnonceController/formUpdate');
$router->post('/formulairemail/:slug', 'App\Controllers\AnnonceController/updateMail');

$router->get('/annonces/:page', 'App\Controllers\AnnonceController/pagination');
$router->get('/annonces', 'App\Controllers\AnnonceController/search');



//$router->post('/formulaire.modif', 'App\Controllers\AnnonceController/valid');
//Vérifie si quelque chose match sur notre route
$router->run();

?>