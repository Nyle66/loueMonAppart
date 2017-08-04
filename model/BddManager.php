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

}