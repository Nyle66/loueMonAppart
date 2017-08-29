<?php

class Annonces{

    private $id;
    private $titre;
    private $location;
    private $prix;
    private $lieux;
    private $locataire;
    private $image;
   
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

    function getLieux() {
        return $this->lieux;
    }

    function getLocataire() {
        return $this->locataire;
    }

    function getImage() {
        return $this->image;
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

    function setLieux($lieux) {
        $this->lieux = $lieux;
    }

    function setLocataire($locataire) {
        $this->locataire = $locataire;
    }

    function setImage($image) {
        $this->image = $image;
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

    public function reserve(BddManager $bddManager){
        $bddManager->reservation($this);
      }

      public function dereserve(BddManager $bddManager){
        $bddManager->dereservation($this);
      }

}