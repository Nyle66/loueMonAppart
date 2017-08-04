<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign-Up</title>
</head>
<body>
    <center><img src="login.png" alt="cadenas" id="log"></center>
    <form action="signup" method="post">
    <div class="form-signup">
        <label>Username :</label>
        <input class="form-control" type="text" name="username" value=""/>
    </div><br>
    <div class="form-signup">
        <label>Email :</label>
        <input class="form-control" type="text" name="email" value="" />
    </div><br>
    <div class="form-signup">
        <label>Password :</label>
        <input class="form-control" type="password" name="password" value="" />
    </div><br>

    <button class="btn" type="submit">S'enregistrer</button>

    </form>
</body>
</html>