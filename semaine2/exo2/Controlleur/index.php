<?php


require_once('../Model/classManagerCat.php');
require('../Entities/classCat.php');

$db = new PDO('mysql:host=localhost;dbname=Cat;charset=utf8','root','root');



// JE CRÉE MON MANAGER pour puvoir me connecter a la base de donnée
$manager = new CatManager($db);

// si on rempli le formulaire
if (isset($_POST['name']) AND isset($_POST['age']) AND isset($_POST['sexe']) AND isset($_POST['color'])){

//on crée un chat
  $cat =new Cat([
  'name'=>htmlspecialchars($_POST['name']),
  'age'=>htmlspecialchars($_POST['age']),
  'sexe'=>htmlspecialchars($_POST['sexe']),
  'color'=>htmlspecialchars($_POST['color']),
  ]);

// inserer mon chat crée en bdd
$manager->add($cat);

 // je recupere et j'affiche ma liste de chat



  }
$cat=$manager->getCat();
  require('../Vue/form.php');
