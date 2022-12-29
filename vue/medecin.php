<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecin</title>
</head>
<body>
    <!--CODE POUR BLOQUER DES CRÉNEAUX-->
        <!--A CODER EN JS AJOUT DE CASE SELON NOMBRE RENTRÉ -->

    <form method="post" action="index.php" id="creneau">
        <fieldset>
            <legend>Planning</legend>

            <p>
                <label for="nbrCr">Nombre de Créneau: </label>
                <input type="date" name="nbrCr" id="nbrCr" >
            </p>

            <p>
                <label for="dateCr">Créneau: </label>
                <input type="date" name="dateCr" id="dateCr" >
                <input type="time" name="timeCr" id="timeCr">
            </p>

            <p>
                <input type="submit" name="newCreneau" value="Valider" >
            </p>
        </fieldset>
    </form>
</body>
</html>