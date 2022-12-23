<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent</title>
</head>
<body>

    <!--CODE AJOUT DE CLIENT-->
    <form id="newClient" action="index.php" method="post">
        <fieldset>
            <legend>Ajouter Client</legend>
            <p>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" >
            </p>

            <p>
                <label for="surname">Prenom: </label>
                <input type="text" name="surname" id="surname" >
            </p>

            <p>
                <label for="birthday">Date de naissance: </label>
                <input type="date" name="birthday" id="birthday" >
            </p>

            <p>
                <label for="NSS">Numéro de sécurité sociale: </label>
                <input type="number" name="NSS" id="NSS" maxlength="13" >
            </p>

            <p>
                <label for="adress">Adresse: </label>
                <input type="text" name="adress" id="adress" placeholder="Adresse + complement d'adresse" >
            </p>

            <p>
                <label for="region">Région: </label>
                <input type="text" name="region" id="region" >
            </p>

            <p>
                <label for="phone">Téléphone: </label>
                <input type="tel" pattern="^0[0-9][0-9]{8}$" maxlength="10" name="phone" id="phone" >
            </p>
            
            <p>
                <input type="submit" value="Ajouter" >
                <input type="reset" value="Effacer">
            </p>

        </fieldset>

    </form>

    <!--CODE RECHERCHE NSS CLIENT QVEC NOM ET DATE DE NAISSANCE-->
    <form action="index.php" method="post" id="searchNSS">
        <fieldset>
            <legend>Recherche NSS Client</legend>
            
            <p>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" >
            </p>

            <p>
                <label for="birthday">Date de naissance: </label>
                <input type="date" name="birthday" id="birthday" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>

            <?php echo $contenu ?>

        </fieldset>

    </form>

    <!--CODE AFFICHAGE SYNTHESE CLIENT + RDV VALIDÉS AVEC LE NSS DU CLIENT-->
    <form method="post" action="index.php" id="synthese">
        <fieldset>
            <legend>Synthèse</legend>

            <p>
                <label for="NSS">NSS: </label>
                <input type="number" name="NSS" id="NSS" maxlength="13" >
            </p>

            <p>
                <input type="submit" value="Sunthèse" >
            </p>

            <?php echo $contenu ?>

        </fieldset>
    </form>
    
    <!--CODE INCREMENTATION DU SOLDE CLIENT AVEC LE ID CLIENT + MONTANT-->
    <form method="post" action="index.php" id="recharge">
        <fieldset>
            <legend>Recharge Solde</legend>

            <p>
                <label for="idClient">id Client: </label>
                <input type="number" name="idClient" id="idClient" >
            </p>

            <p>
                <label for="balance">Montant: </label>
                <input type="number" name="balance" id="balance" >
            </p>

            <p>
                <input type="submit" value="Valider">
            </p>
        </fieldset>
    </form>

    <!--code prendre un rdv pr le client -->
    <form action="index.php" method="post" id="takeRdv">
        <fieldset>
            <legend>Prendre RDV</legend>
            <!--a coder-->
        </fieldset>
    </form>

    <!--code paiement et validation des rdv-->
    <form method="post" action="index.php" id="payRdv">
        <fieldset>
            <legend>Paiement des Rdv</legend>
            <!--A CODER EN VUE-->
            <?php echo $contenu ?>
        </fieldset>
    </form>

</body>
</html>