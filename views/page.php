

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <title>Ma Page</title>
</head>
<body>

    <center><div class="animated fadeInLeftBig"><h1>K<span style='color: orangered;'>a</span>nto - Loc<span style='color: orangered;'>a</span>tion</h1></div></center>
    
    <nav class="animated rotateInDownLeft">
       
        <ul id="test">
            <?php 

            if(empty($_SESSION["user"])):
                echo "<li><a href='signin'>ϟ Sign-In</a></li><br>
                <li><a href='signup'>ϟ Sign-Up</a></li><br>";
                else:
                echo "<li><a href='annonces'>ϟ Annonces</a></li><br>
                <li><a href='logout'>ϟ Logout</a></li><br>";endif;?>

            <?php if(!empty($_SESSION["user"]) && $_SESSION["user"]->getAdmin() == 1):
                echo "<li><a href='admin'>ϟ Admin</a></li><br>";
            endif;?>
        </ul>

    </nav>

    <center><img src="badge.png" alt="image" id="clash" class="animated fadeInRightBig" ></center>

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
           
            echo "<hr><center id='center'><div id='fond' class='animated fadeInLeft'><h2>" . $post[$i]['titre'] . "</a></h2>";
            echo "<h3><span style='color: orangered;'>" . $post[$i]['lieux'] . "<span></h3>";
            echo "<p>" . substr($post[$i]['location'],0,1000) . "</p>";
            echo "<h3>" . $post[$i]['prix'] . " euros/mois" . "</a></h3></center>";

            if(!empty($_SESSION["user"]) && $post[$i]['locataire']==0){
            
                echo "<center><form action='serviceReservation' method='post' ><input type='hidden' name='id' value=' " . $post[$i]['id'] . "' /><input class='btn-form' type='submit' value='Réserver'></form></center>";
                echo "<br>";
            }
            elseif($post[$i]['locataire']==1){
                echo "<center><img src='reserved.png' id='rese'" . $i . "' alt='reserve' ></center></div>";
            }
            
        }
    ?>
</body>
</html>