<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Votre annonce a bien été publié, voici le lien :</p>
    <a href="http://localhost/annonces/annonces/<?=$result?>" ><button class="btn btn-secondary">Afficher</button></a><br>

        
    <p>Vous pouvez la modifier à tout moment en cliquant sur le lien suivant </p>

    <a href="http://localhost/annonces/formulaire/<?=$result?>" ><button class="btn btn-secondary">Modifier</button></a><br>

    <p>ou la supprimer en suivant ce lien </p>

 
    <a href="http://localhost/annonces/annonces/delete/<?=$result?>" ><button class="btn btn-secondary">Supprimer</button></a><br>

 

</body>
</html>