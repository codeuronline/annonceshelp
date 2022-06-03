<?php
// PAGINATION

//Si elle n'existe pas 1 s'affiche 
/*$currentPage=(int)($_GET['page'] ?? 1);
if($currentPage <=0) {
  throw new Exception('Numéro de page invalide'); 
}*/
//Sous forme de tableau numérique, on récupère la première colonne
$count = (int)  $this->db->getPDO()->query('SELECT COUNT(id)FROM annonces ')->fetch(PDO::FETCH_NUM)[0];
//Arrondir à la virgule supérieur
/*$perpage=3;
$pages = ceil($count/ $perpage);

if($currentPage > $pages) {
  throw new Exception('Cette page n\'existe pas'); 
}

$offset = $perpage * ($currentPage - 1);
$sql= $this->db->getPDO()->query("SELECT * FROM annonces ORDER BY nom DESC LIMIT $perpage OFFSET $offset");
    $result= $sql->fetchAll(); */

//Si l'utilisateur a tardé à valider l'annonce ce message s'affichera en le redirigeant sur la page d'accueil
if (isset($_GET['cookie'])) {
  echo "Le délais d'une heure est écoulé, recommencez votre saisie";
}

/*if(($currentPage>1) && ($currentPage<=$pages)):
  
?> 
<div class="pagination">
<div class="precedent"><a  href="/annonces/?page=<?=$currentPage-1?>"> Page précédente</a></div>
<?php endif ?>
<?php if(($currentPage>=1) && ($currentPage<$pages)):
  ?> <div class="suivant"><a  href="/annonces/?page=<?=$currentPage+1?>"> Page suivante </a>
  <?php endif 
*/ ?>

<a href="/annonces/formulaire"><button class='boutton'>Ajouter une annnonce</button></a>
<div class="recherche">
<form action="" method="post">
  <label for="recherche">Recherche</label>
  <select name="recherche" id="recherche">
  <option value= "" disabled selected hidden>Catégorie</option>
    <option value="Immobilier">Immobilier</option>
    <option value="Vehicule">Vehicule</option>
    <option value="Loisirs">Loisirs</option>
    <option value="Meuble">Meuble</option>
    <option value="Téléphonie">Téléphonie</option>
    <option value="Mode">Mode</option>
    <option value="Multimédia">Multimédia</option>
  </select>
  <button class="boutton" type="search">Envoyer</button>
</form>
</div>

<h1>Les dernières annonces</h1>

<header><?= $count ?> Enregistrements au total</header>


<div class="liste">

  <?php
  if (!isset($params['resultat'])) {

    foreach ($params['annonces'] as $annonce) :
      //foreach ($result as $annonce) :
  ?>


      <div class="annonce">
        <span>
          <div class="nom">
            <h2>Non : <?= $annonce->nom // on récupère en objet
                  ?></h2>
            <p>Catégorie : <?= $annonce->categorie // on récupère en objet
                ?></p>
          </div>
          <img src="<?= $annonce->photo1 ?>" alt="photo annonce">

          <a href="/annonces/annonces/<?= $annonce->id ?>"><button class='plus'>Lire plus</button></a>
        </span>

      </div>


    <?php endforeach;  ?>
</div>

<?php
  } else {


    foreach ($params['resultat'] as $annonce) :
      //foreach ($result as $annonce) :
?>


  <div class="annonce">
    <span>
      <div class="nom">
        <h2> <?= $annonce->nom // on récupère en objet
              ?></h2>
        <p><?= $annonce->categorie // on récupère en objet
            ?></p>
      </div>
      <img src="<?= $annonce->photo1 ?>" alt="photo annonce">

      <a href="/annonces/annonces/<?= $annonce->id ?>"><button class='plus'>Lire plus</button></a>
    </span>

  </div>


<?php endforeach;
  } ?>
</div>