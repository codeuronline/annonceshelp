<?php
//echo 'salut';

require '../vendor/autoload.php';
use Dompdf\Dompdf;
 //require_once '../../includes/dompdf/src/Options.php';

 $dompdf= new Dompdf(); //il faut passer les options

// ob_start();//buffer pour stocker des données dans une variable le temps d'exécuter le code /Départ
// include_once 'accueil.php'; 
 
// $html=ob_get_contents();//pour avoir le contenu dans la variable $html
// ob_end_clean();//on efface le html que l'on a généré

// var_dump($html);

// $options= new Options();
// $options->set('defaultFont','Courier');//police

$dompdf= new Dompdf(); //il faut passer les options

$dompdf->loadHtml("brouette");//je veux du html
$dompdf->setPaper('A4','portrait '); //format
$dompdf->render();//Pour générer le pdf (rendu en mémoire)
$fichier='mon-pdf.pdf';//changer le nom du fichier
//$dompdf->stream();//Envoie du pdf en tant que fichier à télécharger / on passe le nom du fichier en paramètre
?>