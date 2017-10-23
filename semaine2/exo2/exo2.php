<!-- http://php.net/manual/fr/pdostatement.bindparam -->
<!-- https://openclassrooms.com/forum/sujet/hydrater-ses-objets-en-poo-61383 -->

<!-- Exercice 2 : gérer ses objets en base de données -->
<!-- dans cet exercice vous allez gérer une petite base de données en orienté objet, celle-ci vous
permettra de gérer des chats.
étape 1 :
Créez une classe chat avec les attributs suivants :
- Nom
- Age
- Sexe
- Couleur
N’oubliez que votre chat ne peut avoir que deux sexes différents, il s’agit donc d’une valeur
constante. Idem pour les couleurs.
N’oubliez également de forcer le typage des arguments dans vos fonctions avec le mode strict de
php.
Dans vos setters vérifiez entre autres que :
- Le nom ne dépasse pas 15 caractères
- L’age est compris entre 0 et 30
Etape 2 :
Créez un objet vous permettant de gérer vos chats en base de données. Cette objet vous permettra
notamment :
- d’enregistrer un objet chat
- de sélectionner tous les chats de votre base de données
Etape 3 :
Créez une petite vue contenant un formulaire, quand l’utilisateur remplit ce formulaire, un nouvel
objet chat est enregistré en base de données et il apparaît dans la vue qui liste tous les chats
enregistrés. -->

<?php

// Déclaration de la class et des attributs.

class cat{

  //
  //  private $donnees = (
  // 'id' => '1',
  // 'nom' => 'toto',
  // 'age' => 5,
  // 'sexe' => 'male',
//   // 'color' => 'ROUX',
// );

private $Name;
private $age;
private $sexe;
private $color;

// Déclarations des constantes en rapport avec le sexe du chat.


const female = 'female';
const male ='male';

// Déclarations des constantes en rapport avec la couleur.

const ORANGE= 'ROUX';
const GREY='GRIS';
const BLACK= 'NOIR';
const WHITE= 'blanc';


// définission du constructeur (la maquette)
public function __construct($valeurs)
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

public function setNom($name)

{
  if (is_string($name) && strlen($name) <= 50)
  {
    $this->name = $$name;




}
