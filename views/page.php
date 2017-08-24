

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ma Page</title>
</head>
<body>

    <center><h1>Mon site de Location</h1></center>
    
    <nav>
       
        <ul id="test">
            <?php if(empty($_SESSION["user"])):
            echo "<li><a href='signin'>Sign-In</a></li><br>
            <li><a href='signup'>Sign-Up</a></li><br>";
             else:
            echo "<li><a href='annonces'>Annonces</a></li><br>
            <li><a href='admin'>Admin</a></li><br>
            <li><a href='logout'>Logout</a></li><br>";
             endif;?>
        </ul>
        

    </nav>

    <center><div id="loca"><img src="lock.png" alt="image" ></div></center>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php
        $annonces = new Annonces();
        $bdd = new BddManager();
        $post = $annonces->show($bdd);

        foreach($post as $l):
        
        echo "<hr><center><h2>" . $l['titre'] . "</a></h2>";
        echo "<p>" . substr($l['location'],0,1000) . "</p>";
        echo "<h3>" . $l['prix'] . " euros/mois" . "</a></h3></center><hr>";
        
        
        endforeach;?>

</body>
</html>