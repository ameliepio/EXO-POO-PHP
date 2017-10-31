<?php

// Déclaration de la class et des attributs.

class Cat{

private $name;
private $age;
private $sexe;
private $color;

// Déclarations des constantes en rapport avec le sexe du chat.

const FEMALE = 'FEMALE';
const MALE ='MALE';

// Déclarations des constantes en rapport avec la couleur.

const ORANGE= 'ROUX';
const GREY='GRIS';
const BLACK= 'NOIR';
const WHITE= 'BLANC';


// définission du constructeur (la maquette)
public function __construct(array $valeurs)
 {
         $this->hydrate($valeurs);
 }
 // function hydratation qui appelle les setters
 public function hydrate(array $donnees) {
     // on fait une boucle avec le tableau de données
     foreach ($donnees as $key => $value) {
       // on récupère le nom des setters correspondants
       // si la clef est placesTotales son setter est setPlacesTotales
       // il suffit de mettre la 1ere lettre de key en Maj et de le préfixer par set
       $method = 'set'.ucfirst($key);

       // on vérifie que le setter correspondant existe
       if (method_exists($this, $method)) {
         // si il existe, on l'appelle
         $this->$method($value);
       }
     }
   }

public function getName()
{
       return $this->name;
}
  public function getAge()
{
        return $this->age;
}
public function getSexe()
{
        return $this->sexe;
}
public function getColor()
{
        return $this->color;
}
public function setName($name)
{
          if (is_string($name) && strlen($name) <= 15)
          {
            $this->name = $name;
          }
  }
public function setAge($age)
{
            if ($age &&  $age<=30){

              $this->age = $age;
          }
}
public function setSexe ($sexe)
{
            if (in_array($sexe,[self::FEMALE, self::MALE])){

            $this->sexe = $sexe;
            }
}
public function setColor ($color)
{
            if (in_array($color,[self::ORANGE, self::GREY, self::BLACK, self::WHITE,])){

            $this->color = $color;
            }
}
}
