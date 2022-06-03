<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/public/css/style.css" rel="stylesheet">
    <title>Corner Shop</title>
</head>

<body>


    <container>

        <h4>Modifiez de votre annonce </h4>
        <?php if ($_POST) { error_log("formulairemail.php avec POST");  ?>

            <span>Ville : <?= $_POST['ville'] ?></span><br>
            <span>Catégorie :<?= $_POST['categorie'] ?></span><br>
            <span>Nom : <?= $_POST['nom'] ?></span><br>
            <span>Prix : <?= $_POST['prix'] ?></span><br>
            <span>Description : <?= $_POST['description'] ?></span><br>

            <span><img src="http://localhost/annonces/public/images/<?= ($_FILES['photo1']) ? $_FILES['photo1']['name'] : $donnees[6] ?>"></span><br>
            <span><img src="http://localhost/annonces/public/images/<?= ($_FILES['photo2']) ? $_FILES['photo2']['name'] : "image vide" ?>"></span><br>
            <span><img src="http://localhost/annonces/public/images/<?= ($_FILES['photo3']) ? $_FILES['photo3']['name'] : "image vide" ?>"></span><br>
            <span><img src="http://localhost/annonces/public/images/<?= ($_FILES['photo4']) ? $_FILES['photo4']['name'] : "image vide" ?>"></span><br>
            <span><img src="http://localhost/annonces/public/images/<?= ($_FILES['photo5']) ? $_FILES['photo5']['name'] : "image vide" ?>"></span><br>

        <?php } else if (empty($_POST)) {

error_log("formulairemail.php SANS POST");

            $tmp = str_replace("formulairemail/", "", $_GET['url']);

            //Decrypte l'ensemble des données récupérées dans l'url
            $slugcrypter_modif = base64_decode($tmp);
            $donnees = explode("/", $slugcrypter_modif);
        ?>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idTmp" value="<?= $donnees[0] ?>">
                <div class="partie1">
                    <fieldset>
                <legend>Informations annonces</legend>
                    <label for="ville">Où </label>
                    <select name="ville" id="ville">
                        <option value="<?= $donnees[1] ?>"><?= $donnees[1] ?></option>
                        <option value="Chambery">Chambéry</option>
                        <option value="Grenoble">Grenoble</option>
                        <option value="Annecy">Annecy</option>
                        <option value="Lyon">Lyon</option>
                    </select>

                    <label for="categorie">Quoi </label>
                    <select name="categorie" id="">
                        <option value="<?= $donnees[2] ?>"><?= $donnees[2] ?></option>
                        <option value="immobilier">Immobilier</option>
                        <option value="vehicule">Vehicules</option>
                        <option value="loisirs">Loisirs</option>
                        <option value="meubles">Meubles</option>
                        <option value="telephonie">Téléphonie</option>
                        <option value="mode">Mode</option>
                        <option value="emplois">Emplois</option>
                        <option value="multimedia">Multimédia</option>
                    </select>

                    <div>
                        <label for="logement">Titre : </label>
                        <input type="text" value="<?= $donnees[3] ?>" id="logement" name="nom" required placeholder="Ex : Une superbe voiture">
                    </div>

                    <div>
                        <label for="prix">Prix : </label>
                        <input type="number" value="<?= $donnees[4] ?>" id="wifi" name="prix" required placeholder="Ex : Un prix correct">
                    </div>
                    <div>
                        <label for="description">Desciption : </label>
                        <input type="text" id="parking" value="<?= $donnees[5] ?>" name="description" required placeholder="Ex : Détails sur le produit">
                    </div>
                    </fieldset>
                </div>
                
                <div class="partie2">
                <fieldset>
                <legend>Photos</legend>
                    <?php
                    $test = 'photo';
                    for ($i = 7; $i <= 11; $i++) {
                        $j = $i - 6;
                        $test = 'photo' . $j;
                    ?><div>
                        <label for="file" > Ajouter photo <?= $j ?> <?php echo '<img src= "' . 'http://localhost/annonces/public/images/' . $donnees[$i] . '" alt="photo hébergement">'; ?>   <input type="file" name="<?= $test ?>"> </label>
                     </div>

                    <?php }  /* $slug=$donnees[0].'/'.$donnees[1].'/'.$donnees[2].'/'.$donnees[3].'/'.$donnees[4].'/'.$donnees[5].'/'.$donnees[6].'/'.$donnees[7].'/'.$donnees[8].'/'.$donnees[9].'/'.$donnees[10].'/'.$donnees[11].'/';
$slugcrypter_valid=base64_encode($slug.'valid');
*/ ?>
                    <div>

                        <input type="hidden" id="mail" value="<?= $donnees[6] ?>" name="mail">
                    </div>
                    </fieldset>
                    <div id="submit">
                        <button type="submit" name="modifier">Modifier</button><br>

                    </div>

                    <input type="reset">
                  
                    </div>
            </form>
            <a href="/annonces/" ><button class="btn btn-secondary">Retour</button></a>

        <?php echo $donnees[6];
        }


        if ($_POST) {



            $slug = $_POST['idTmp'] . '/' . $_POST['ville'] . '/' . $_POST['categorie'] . '/' . $_POST['nom'] . '/' . $_POST['prix'] . '/' . $_POST['description'] . '/' . $_POST['mail'] . '/' . $_FILES['photo1']['name'] . '/' . $_FILES['photo2']['name'] . '/' . $_FILES['photo3']['name'] . '/' . $_FILES['photo4']['name'] . '/' . $_FILES['photo5']['name'] . '/';

            $slugcrypter_valid = base64_encode($slug . "valid");
            $slugcrypter_update = base64_encode($slug . "update");

        ?>
            <button type="submit" name="envoyer"><a href="http://localhost/annonces/valid/<?= $slugcrypter_valid ?>">Valider</a></button><br>
            <button type="submit" name="envoyer"><a href="http://localhost/annonces/formulairemail/<?= $slugcrypter_update ?>">Modifier</a></button><br>
            </form>
        <?php    } ?>
        <a href="/annonces/" ><button class="btn btn-secondary">Retour</button></a>
    </container>
</body>

</html>