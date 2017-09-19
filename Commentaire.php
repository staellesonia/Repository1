<?php
// Brief
/**
* Se connecter à la base de données
* Sélectionner et afficher les commentaires associés à une recette
* Sélectionner et afficher la note à une recette
*/
/**
*CONCEPTION

*CONNEXION A LA BASE DE DONNEES

*Utiliser un attribut $mysqli qui permettra de stocker la connexion à la base de données
*Ici, le constructeur servira à créer la connexion à la base de données et à l'assigner à l'attribut $mysqli grâce à la méta-variable "$this" qui sera utilisée comme suit:
*$this->mysqli
*La connexion à la base sera établie une fois et pourra être simplement modifiable.

*METHODE commentRecette

*Sélectionne et affiche les commentaires  et la note associés à une recette

*@param string $id
*@return array or false

*/

Class Commentaire //Déclaration de la classe
{
  public function __construct() //methode de connexion à la base de données
  {
      $this->mysqli = new mysqli('localhost', 'root', '', 'cuisine_et_moi');
      $this->mysqli->query("SET NAMES 'utf8'");
  }

  public function commentRecette($id_recette) // Déclaration de la méthode commentRecette. Elle affiche les commentaires associés à une recette.
  {
      // création de la requete MySQL
      $sql = 'SELECT  id_commentaire, commentaire, note FROM commentaire WHERE id_recette ' . $id_recette ;

      //connexion à la base de données avec l'attribut mysqli  et au moyen de la méta-variable this.
      $result = $this->mysqli->query($sql);
      $row = $result->fetch_array();

      if(is_null($row))
      {
        return FALSE;
      }
      else
      {
          $data_commentaire_commentaire['note']            = $row['note'];
          $data_commentaire['commentaire']     = $row['commentaire'];
          $data_commentaire['id_commentaire']  = $row['id_commentaire'];
      }
    return $data_commentaire ;
  }

} // Fin de la déclaratino de la méthode







 ?>
