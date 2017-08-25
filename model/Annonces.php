<?php

class Annonces{

    private $id;
    private $titre;
    private $location;
    private $prix;
   
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getLocation() {
        return $this->location;
    }

    function getPrix() {
        return $this->prix;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setLocation($location) {
        $this->location = $location;
    }
                                                                                
    function setPrix($prix) {
        $this->prix = $prix;
    }

    public function saveLoc(BddManager $bddManager){
      $bddManager->insertLoc($this);
    }

    public function show(BddManager $bddManager){
      return $bddManager->getAnnonces($this);
    }

    public function delete(BddManager $bddManager){
      return $bddManager->deleteAnnonces($this);
    }

}