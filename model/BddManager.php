<?php

class BddManager {
    private $connexion;

    public function __construct(){
        
    }

    public function getConnexion()
    {
      if(empty($this->connexion)){
        $this->connexion = new PDO('mysql:host=localhost;dbname=location;charset=UTF8','root','root');
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }
    }

    public function insertUser(User $user){
      $this->getConnexion();
      $query="INSERT INTO user SET username=:username, email=:email, password=:password";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'username'=>$user->getUsername(),
            'email' => $user->getEmail(),
            'password'=>$user->getPassword()
      
        ));
        return $pdo->rowCount();
    }

    public function insertLoc(Annonces $annonces){
      $this->getConnexion();
      $query="INSERT INTO annonce SET titre=:titre, location=:location, prix=:prix, lieux=:lieux, locataire=:locataire";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'titre'=>$annonces->getTitre(),
            'location' => $annonces->getLocation(),
            'prix'=>$annonces->getPrix(),
            'lieux'=>$annonces->getLieux(),
            'locataire'=>'0'
      
        ));
        return $pdo->rowCount();
    }

    public function getUserById(User $user){
        $this->getConnexion();

        $object = $this->connexion->prepare('SELECT * FROM user WHERE username=:username');
        $object->execute(array(
            'username'=>$user->getUsername()
        ));
        $userdata = $object->fetch(PDO::FETCH_ASSOC);

        if(!empty($userdata)){
          return new User($userdata);
        }
        return false;
    }

    public function getAnnonces(Annonces $annonces)
      {
        $this->getConnexion();
        $req = $this->connexion->prepare('SELECT * FROM annonce');
        $req->execute();
        $data = $req->fetchAll();
        return $data;
        $req->closeCursor();
      }

      public function deleteAnnonces(Annonces $annonces){
      $this->getConnexion();
      $query="DELETE FROM annonce WHERE id=:id"; 
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$annonces->getId()
        ));
        return $pdo->rowCount();
    }

    public function reservation(Annonces $annonces){
        $this->getConnexion();
        $query="UPDATE annonce SET locataire=:locataire WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$annonces->getId(),
            'locataire'=>"1"
        ));
        return $pdo->rowCount();
    }

    public function dereservation(Annonces $annonces){
        $this->getConnexion();
        $query="UPDATE annonce SET locataire=:locataire WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$annonces->getId(),
            'locataire'=>"0"
        ));
        return $pdo->rowCount();
    }


}