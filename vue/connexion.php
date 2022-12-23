<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Identification</legend>
        <p>
            <label for="log">Login: </label>
            <input type="text" name="log" id="log" required>
        </p>
        <p>
            <label for="mdp">Mot de passe: </label>
            <input type="password" name="mdp" id="mdp">
        </p>
        <p> <input type="submit" value="Conneion"> </p>
        </fieldset>

    </form>

</body>
</html>