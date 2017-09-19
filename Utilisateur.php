<?php
// Brief
/**
* Se connecter à la base de données
* Vérifier l'existance de l'utilisateur
* Sélectionner et afficher les recettes de l'utilisateur
*/
/**
*CONCEPTION

*CONNEXION A LA BASE DE DONNEES

*Utiliser un attribut $mysqli qui permettra de stocker la connexion à la base de données
*Ici, le constructeur servira à créer la connexion à la base de données et à l'assigner à l'attribut $mysqli grâce à la méta-variable "$this" qui sera utilisée comme suit:
*$this->mysqli
*La connexion à la base sera établie une fois et pourra être simplement modifiable.

*METHODE verifyUser

*Vérification de l'existance de l'utilisateur dans la base de donner

* @param $email, $password
* @return array
*On utilise l'attribut mysqli pour récupérer la connexion à la base de données au moyen de la meta-variable $this ($this->mysqli)

*METHODE redirect

*Redirection de l'utilisateur vers la page de login au cas où ce dernier n'est pas retrouvé dans la base de données
*@param $url
*/

// Déclaration de la classe
Class Utilisateur
{
  private $mysqli ; // cet attribut sert à stocker la connexion à la base de données

  public function __construct() //methode de connexion à la base de données
  {
      $this->mysqli = new mysqli('localhost', 'root', '', 'cuisine_et_moi');
      $this->mysqli->query("SET NAMES 'utf8'");
  }

  public function verifyUser($email, $password) // déclaration de la méthode verifyUser. Elle vérifie l'existance de l'utilisateur dans la base de données.
  {
      // Création de la requête MySQL
      $sql = 'SELECT id_utilisateur, name, email, photo_utilisateur FROM utilisateur WHERE email ="' . $email . '"&& password ="' . $password . '"';

      //connexion à la base de données avec l'attribut mysqli  et au moyen de la méta-variable this.
      $result = $this->mysqli->query($sql);
      $row    = $result->fetch_array();

      if(is_null($row))
      {
        return FALSE;
      }

      else
      {
        $data_utilisateur['name']              = $row['name'];
        $data_utilisateur['email']             = $row['email'];
        $data_utilisateur['id_utilisateur']    = $row['id_utilisateur'];
        $data_utilisateur['photo_utilisateur'] = $row['photo_utilisateur'];
      }
      return $data_utilisateur;
  }

  public function redirect($url) //déclaration de la méthode redirect. Elle renvoit à la valeur de l'url au cas où l'utilisateur n'existe pas dans la base de données.
    {
        header('Location:' . $url);
    }
} // Fin de la déclaratino de la méthode



?>
