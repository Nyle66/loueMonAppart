

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <title>Ma Page</title>
</head>
<body>

    <center><h1>Mon site de Location</h1></center>
    
    <nav>
       
        <ul id="test">
            <?php 

            if(empty($_SESSION["user"])):
                echo "<li><a href='signin'>Sign-In</a></li><br>
                <li><a href='signup'>Sign-Up</a></li><br>";
                else:
                echo "<li><a href='annonces'>Annonces</a></li><br>
                <li><a href='logout'>Logout</a></li><br>";endif;?>

            <?php if(!empty($_SESSION["user"]) && $_SESSION["user"]->getAdmin() == 1):
                echo "<li><a href='admin'>Admin</a></li><br>";
            endif;?>
        </ul>

    </nav>

    <center><img src="clash.png" alt="image" id="clash" ></center>

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
        
        for($i=0; $i<count($post); $i++){
            echo "<hr><center id='center'><h2>" . $post[$i]['titre'] . "</a></h2>";
            echo "<p>" . substr($post[$i]['location'],0,1000) . "</p>";
            echo "<h3>" . $post[$i]['prix'] . " euros/mois" . "</a></h3></center>";

            if(!empty($_SESSION["user"])){
                echo "<center><button class='btn-form' type='submit' onclick='masquer_img(" . $i . ");'>Réserver</button></center>";
                echo "<center><img src='reserved.png' class='reserved' alt='image' style='display:none;' id='" . $i . "'></center>";
                echo "<br>";
            }
        }
    ?>
</body>
</html>