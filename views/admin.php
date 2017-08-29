<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>admin</title>
</head>
<body>
<center><img src="master.png" alt="masterball" id="master" class='animated wobble'></center>
<center class='animated fadeInRightBig'><h2 id='h2admin'>Panneau d'administration</h2></center>
    <?php

if($_SESSION["user"]->getAdmin() == 0){

    Flight::redirect("page"); }


        $annonces = new Annonces();
        $bdd = new BddManager();
        $post = $annonces->show($bdd);

        foreach($post as $l):
        
        echo "<hr><center class='animated fadeInLeftBig'><h2>" . $l['titre'] . "</a></h2>";
        echo "<p>" . substr($l['location'],0,1000) . "</p>";
        echo "<h3>" . $l['prix'] . " euros/mois" . "</a></h3></center>";
        echo "<center class='animated fadeInLeftBig'><form method='post' action='admin/delete/".$l['id']."' ><input class='btn' type='submit' value='Supprimer'/></form></center>";

        if($l['locataire']==1){
        echo "<center class='animated fadeInLeftBig'><form method='post' action='servicedeReservation/' ><input type='hidden' name='id' value='".$l['id']."'/><input class='btn' type='submit' value='Dé-réserver'/></form></center>";
        }
        echo "<br>";
       
    
        endforeach;?>

        <hr>
        <center><a href='retour'>Retour à l'Acceuil</a></center>

        <br>
        <br>
        <br>
        <br>

</body>
</html>