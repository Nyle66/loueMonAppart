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
      $query="INSERT INTO annonce SET titre=:titre, location=:location, prix=:prix";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'titre'=>$annonces->getTitre(),
            'location' => $annonces->getLocation(),
            'prix'=>$annonces->getPrix()
      
        ));
        return $pdo->rowCount();
    }


    public function getUserById(User $user){
        $this->getConnexion();

        $object = $this->connexion->prepare('SELECT * FROM user WHERE username=:username');
        $object->execute(array(
            'username'=>$user->getUsername()
        ));
        $users = $object->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($users)){
          return $users;
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
}