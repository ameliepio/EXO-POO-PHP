
<strong><p>Exercice 1:
Écrivez une classe représentant une ville.
 Elle doit avoir les propriétés:
-nom
-département
Une méthode affichant « la ville X est dans le département Y ».
Créez des objets ville, affectez leurs propriétés, et utilisez la
méthode d’affichage.</p></strong> <br>
<strong><p>
Exercice 2:
Modifiez la classe précédente en la dotant d’un constructeur.
Réalisez les mêmes opérations de création d’objets et d’affichage.
</p></strong>
<?php
class Ville
{
private $nom=' lille';

private $depart=' nord';
public function Afficher()
{
echo $this->nom ,'  est dans le  ', $this->depart,'. ';

}
// public function AfficherVille(){
// }
}
$town=new Ville;
$town->Afficher();

?>
