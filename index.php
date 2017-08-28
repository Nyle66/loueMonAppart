<?php

require 'flight/Flight.php';
require 'autoloader.php';
session_start();


Flight::route('/page', function(){
    Flight::render('page',array());
});

Flight::route('GET /signup', function(){
    Flight::render('signup',array());
});

Flight::route('GET /signin', function(){
    Flight::render('signin',array());
});

Flight::route('GET /annonces', function(){
    Flight::render('annonces',array());
});

Flight::route('/retour', function(){
    Flight::render('page',array());
});

Flight::route('GET /admin', function(){
    Flight::render('admin',array());
});

Flight::route('POST /serviceReservation', function(){
    $bdd = new BddManager();
    $annonce = new Annonces();
    $annonce-> setId($_POST['id']); 
    $annonce->reserve($bdd);
    Flight::redirect('page');
});

Flight::route('POST /servicedeReservation', function(){
    $bdd = new BddManager();
    $annonce = new Annonces();
    $annonce-> setId($_POST['id']); 
    $annonce->dereserve($bdd);
    Flight::redirect('admin');
});


Flight::route('/logout', function(){
    $_SESSION['user'] = "";
    session_destroy();
    Flight::redirect('page');
});

Flight::route('POST /signup',function(){

    $username = Flight::request()->data['username'];
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];

    $use = new User();
    $bdd = new BddManager();
    $use->setUsername($username);
    $use->setEmail($email);
    $use->setPassword($password);

    $use->save($bdd);

    Flight::redirect('page');


});

Flight::route('POST /signin',function(){

    $username = Flight::request()->data['username'];
    $password = Flight::request()->data['password'];

    $use = new User();
    $use->setUsername($username);
    $bdd = new BddManager();
    $user = $bdd->getUserById($use);
    
    if($user == false){
         Flight::redirect('signin');
    }
    else{
        $_SESSION['user']= $user;
         Flight::redirect('page');
    }

});

Flight::route('POST /annonces',function(){

    $titre = Flight::request()->data['titre'];
    $location = Flight::request()->data['location'];
    $prix = Flight::request()->data['prix'];
    $lieux = Flight::request()->data['lieux'];
    $locataire = Flight::request()->data['locataire'];

    $loc = new Annonces();
    $bdd = new BddManager();
    $loc->setTitre($titre);
    $loc->setLocation($location);
    $loc->setPrix($prix);
    $loc->setLieux($lieux);
    $loc->setLocataire($locataire);

    $loc->saveLoc($bdd);

    Flight::redirect('page');
});

Flight::route('POST /admin/delete/@id',function($id){

    $admin = new Annonces();
    $admin->setId($id);
    $bdd = new BddManager();

    $admin->delete($bdd);

    Flight::redirect('/admin');
});

Flight::start();