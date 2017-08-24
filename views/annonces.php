<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Annonces</title>
</head>
<body>
    <center><h3>Ajoutez une annonce</h3></center>

    <form action="annonces" method="post">
    <div class="form-annonce">
        <label>Titre :</label>
        <input class="form-control" type="text" name="titre" value="" placeholder="Choisissez un titre"/>
    </div><br>

    <div class="form-annonce">
        <label>Description :</label>
        <input class="form-control" type="text" name="location" value="" placeholder="Ajoutez une description"/>
    </div><br>

    <div class="form-annonce">
        <label>Loyer:</label>
        <input class="form-control" type="text" name="prix" value="" placeholder="Indiquez le prix" />
    </div><br>

    <button class="btn" type="submit">Envoyer l'annonce</button>

    </form>

    <br>
    <br>
    <center><a href='retour'>Retour à l'Acceuil</a></center>

</body>
</html>