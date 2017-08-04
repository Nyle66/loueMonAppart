<?php
session_start();
require 'flight/Flight.php';
require 'autoloader.php';


Flight::route('/page', function(){
    Flight::render('page',array());
});

Flight::route('/signup', function(){
    Flight::render('signup',array());
});

Flight::route('/signin', function(){
    Flight::render('signin',array());
});


Flight::route('POST /signin',function(){

    // $nom = Flight::request()->data['nom'];
    // $prenom = Flight::request()->data['prenom'];
    // $numero = Flight::request()->data['numero'];

    $_SESSION['dataIn'] = $_POST;
    Flight::redirect('page');


});
Flight::route('POST /signup',function(){

    // $nom = Flight::request()->data['nom'];
    // $prenom = Flight::request()->data['prenom'];
    // $numero = Flight::request()->data['numero'];

    $_SESSION['dataUp'] = $_POST;
    Flight::redirect('page');


});

Flight::start();