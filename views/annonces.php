<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>Annonces</title>
</head>
<body>

<center><img src="pokedex.png" alt="pokedex" id="pokedex" class='animated rotateIn' ></center>
    <center><h2>Ajoutez une annonce</h2></center>

    <center><form action="annonces" method="post">
    <div class="form-annonce">
    <label>Lieux :</label>
        <select id="titre" name="titre">
        <option value="Studio">Studio</option>
        <option value="Appartement">Appartement</option>
        <option value="Maison">Maison</option>
        <option value="Villa">Villa</option>
        </select>
       
    </div><br>

    <div class="form-annonce">
        <label>Lieux :</label>
        <select id="loca" name="lieux">
        <option value="Bourg-palette">Bourg-Palette</option>
        <option value="Argenta">Argenta</option>
        <option value="Azuria">Azuria</option>
        <option value="Carmin-sur-Mer">Carmin-sur-Mer</option>
        <option value="Céladopole">Céladopole</option>
        <option value="Safrania">Safrania</option>
        <option value="Jadielle">Jadielle</option>
        </select>
    </div><br>

    <div class="form-annonce">
        <label>Description :</label>
        <input class="form-control" type="text" name="location" value="" placeholder="Ajoutez une description" size="50"/>
    </div><br>

    <div class="form-annonce">
        <label>Loyer:</label>
        <input class="form-control" type="text" name="prix" value="" placeholder="Indiquez le prix" />
    </div><br>

    <div class="form-annonce">
        <label>Image:</label>
        <input class="form-control" type="text" name="image" value="" placeholder="Entrez l'URL de l'image" size="50"/>
    </div><br>

    <button class="btn" type="submit">Envoyer l'annonce</button>

    </form></center>
   
    <br>
    <br>
    
    <center><a href='retour'>Retour à l'Acceuil</a></center>

</body>
</html>