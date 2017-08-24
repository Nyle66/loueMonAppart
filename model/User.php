<?php

class User{

    private $id;
    private $username;
    private $email;
    private $password;
   
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }
                                                                                
    function setPassword($password) {
        $this->password = $password;
    }

    public function save(BddManager $bddManager){
      $bddManager->insertUser($this);
    }

    

}