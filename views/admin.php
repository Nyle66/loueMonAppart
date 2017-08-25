<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>admin</title>
</head>
<body>
    
    <?php
        $annonces = new Annonces();
        $bdd = new BddManager();
        $post = $annonces->show($bdd);

        foreach($post as $l):
        
        echo "<hr><center><h2>" . $l['titre'] . "</a></h2>";
        echo "<p>" . substr($l['location'],0,1000) . "</p>";
        echo "<h3>" . $l['prix'] . " euros/mois" . "</a></h3></center>";
        echo "<form method='post' action='admin/delete/".$l['id']."' ><button class='btn' type='submit'>Supprimer</button></form>";
        echo "<br>";
    
        endforeach;?>

        <hr>
        <center><a href='retour'>Retour à l'Acceuil</a></center>

</body>
</html>