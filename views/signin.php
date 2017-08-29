<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign-In</title>
</head>
<body>

<center><img src="login.png" alt="cadenas" class="log"></center>

    <center><form action="signin" method="post">
    <div class="form-signin">
        <label>Username :</label>
        <input class="form-control" type="text" name="username" value=""/>
    </div><br>

    <div class="form-signin">
        <label>Password :</label>
        <input class="form-control" type="password" name="password" value="" />
    </div><br>

    <button class="btn" type="submit">Se connecter</button>

    </form></center>

    <br>
    <br>
    
    <center><a href='retour'>Retour à l'Acceuil</a></center>
</body>
</html>