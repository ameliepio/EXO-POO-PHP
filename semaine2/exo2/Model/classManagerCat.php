<?php

// class manager sert a faire le lien entre la class chat et la bdd
class CatManager {
  // Instance de PDO
  //attibuts bdd
  private $_db;

  public function __construct($db) {
    $this->setDb($db);
  }


// Methods
  public function setDb(PDO $db) {
    $this->_db = $db;
  }

// function qui ajoute le cat a la bdd via le CatManager
  public function add(Cat $cat) {
    $q = $this->_db->prepare('INSERT INTO class_cat( name, age,sexe,color)
                               VALUES (:name, :age, :sexe,:color)');
              $q->bindValue(':name', $cat->getName(), PDO::PARAM_STR);
              $q->bindValue(':age', $cat->getAge(), PDO::PARAM_INT);
              $q->bindValue(':sexe', $cat->getSexe(), PDO::PARAM_STR);
              $q->bindValue(':color', $cat->getColor(), PDO::PARAM_STR);


$q->execute();
}

// récupération de la liste des chats

public function getCat()
  {

// requête qui va chercher les donnees dans la bdd
    $q = $this->_db->query('SELECT * FROM class_cat');


// appel de la fonction hydrate
$donnees=$q->fetchAll();

  return $donnees;
  }
}
