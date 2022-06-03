<?php //session_start(); 
?>

<h1> <?= (isset($params['annonce']->id) && !empty($params['annonce']->id)) ? "Modifier " : "Ajouter" ?> une annonce</h1>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public\css\style.css" rel="stylesheet">
    <title>Corner Shop</title>
</head>

<body>

    <?php $idtmp = rand(10000, 99999);;
    setcookie("idTmp", $idtmp, time() + 3600);  /* expire dans 1 heure */
    ?>
    <container>
  

        <form action="" method="post" enctype="multipart/form-data">
            <div class="partie1">
                <input type="hidden" name="id" value="<?php if (isset($params['annonce']->id)) {
                                                            echo  $params['annonce']->id;
                                                        } ?>">
                <input type="hidden" name="idTmp" value="<?= $idtmp ?>">
                <fieldset>
                <legend>Informations annonces</legend>
                <label for="logement">Où </label>
                <select name="ville" id="ville">
                    <?= (isset($params['annonce']->id)) ?  "<option>" . $params['annonce']->ville . "</option>" : "<option disabled selected hidden>Ville</option>"; ?>
                    <option value="Chambery">Chambéry</option>
                    <option value="Grenoble">Grenoble</option>
                    <option value="Annecy">Annecy</option>
                    <option value="Lyon">Lyon</option>
                </select>

                <label for="categorie">Quoi </label>
                <select name="categorie" id="pet-select">
                    <?= (isset($params['annonce']->id)) ?  "<option>" . $params['annonce']->categorie . "</option>" : "<option disabled selected hidden>Catégorie</option>"; ?>"
                    <option value="immobilier">Immobilier</option>
                    <option value="vehicule">Vehicules</option>
                    <option value="loisirs">Loisirs</option>
                    <option value="meubles">Meubles</option>
                    <option value="telephonie">Téléphonie</option>
                    <option value="mode">Mode</option>
                    <option value="multimedia">Multimédia</option>
                </select>


                <label for="logement">Titre : </label>
                <input type="text" value="<?php
                                            if (isset($params['annonce']->id)) {
                                                echo  $params['annonce']->nom;
                                            } ?>" id="logement" name="nom" required placeholder="Ex : Une superbe voiture">



                <label for="prix">Prix : </label>
                <input type="number" value="<?php
                                            if (isset($params['annonce']->id)) {
                                                echo  $params['annonce']->prix;
                                            } ?>" id="wifi" name="prix" required placeholder="Ex : Un prix correct">

                <label for="description">Desciption : </label>
                <input type="text" id="parking" value="<?php
                                                        if (isset($params['annonce']->id)) {
                                                            echo  $params['annonce']->description;
                                                        } ?>" name="description" required placeholder="Ex : Détails sur le produit">



            </div>
            </fieldset>
            <div class="partie2">
            <fieldset>
                <legend>Photos</legend>
                <?php
                $test = 'photo';
                for ($i = 1; $i <= 5; $i++) {

                    $test = 'photo' . $i;
                ?>
                    <label for="file">Ajouter photo <?= $i ?> <?php
                                                                if (isset($params['annonce']->id)) {
                                                                    echo '<img src= "../public/images/' . $params['annonce']->$test . '" alt="photo hébergement">';
                                                                } ?></label>
                    <input type="file" name="<?= $test ?>">

                <?php }
                if (!isset($params['annonce']->id)) { ?>

                    <div>
                        <label for="email">Entrer votre email:</label>
                        <input type="email" id="email" value=" " size="30" name="mail" id="mail" placeholder="Entrer le mail" required>

                    </div>
                <?php } ?>
                </fieldset>
                <div id="submit">
                    <input type="submit" name="envoyer" value="<?php
                                                                if (isset($params['annonce']->id)) {
                                                                    echo  'Modifier une annonce';
                                                                } else {
                                                                    echo 'Ajouter une annonce';
                                                                } ?>">
                </div>

                <input type="reset">
            </div>
        </form>
        <a href="/annonces/" ><button class="btn btn-secondary">Retour</button></a>
    </container>