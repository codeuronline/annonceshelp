<h1><?= $params['annonce']->nom ?></h1>
<p><?= $params['annonce']->description ?></p>
<div id="slider">
  
        <img src="<?= $params['annonce']->photo1 ?>" alt="photo1" id="slide">
   
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
</div>
<a href="/annonces/"><button class="btn btn-secondary">Retour</button></a>

<script>
var slide = new Array("<?= $params['annonce']->photo1 ?>", "<?= $params['annonce']->photo2 ?>", "<?= $params['annonce']->photo3 ?>", "<?= $params['annonce']->photo4 ?>","<?= $params['annonce']->photo5 ?>");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
setInterval("ChangeSlide(1)", 3000);
</script>

<!--<a href="/annonces/annonces/delete/<?= $params['annonce']->id ?>" ><button class="btn btn-secondary">Supprimer</button></a>
<a href="/annonces/formulaire/<?= $params['annonce']->id ?>" ><button class="btn btn-secondary">Modifier</button></a> ->

