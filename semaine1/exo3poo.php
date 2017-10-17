<!-- 
 Exercice 3:
Créez une classe représentant une personne. Elle doit avoir les
 propriétés nom,prénom et adresse, ainsi qu’un constructeur et un
 destructeur.
 Une méthode getPersonne() doit retourner les coordonnées complètes
 de la personne.
 Une méthode setAdresse() doit permettre de modifier l’adresse de
 la personne.
 Créez  des objets personne, et utilisez l’ensemble des méthodes. -->


<?php

class Person{

public $prenom;
public $nom;
public $adresse;
private static $age= 0;
public function __construct($prenom,$nom,$adresse)
  {
$this->prenom=$prenom;
$this->nom=$nom;
$this->adresse=$adresse;

static::$age++;


  }
  public static  function gettotalage(){


return static::$age;


  }

  public function getPersonne(){

return' je suis' . $this->prenom . ' .' .$this->nom ;

  }

  public function setAdresse(){

return ' J\'habite '.$this->adresse=' en thaillande'.'<br>' ;

  }

}

$fille1=new Person(' amelie',' blabla','sur  mars');
$garcon1=new Person(' gaston','lagaffe',' aux pays imaginaire');

$garcon1complet=$garcon1->getPersonne();
$fille1complet=$fille1->getPersonne();

$garcon1adresse=$garcon1->setAdresse();
$fille1adresse=$fille1->setAdresse();

echo $garcon1complet,',',$garcon1adresse;

echo $fille1complet.'.'.$fille1adresse;

echo Person ::gettotalage();



?>
