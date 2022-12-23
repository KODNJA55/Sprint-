<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directeur</title>
</head>
<body>

    <!-- code ajout d'employe-->
    <!--A CODER EN JS "UNE CASE APPARAIT QUAND POSTE MEDECIN SÉLECTIONNER-->
    <form method="post" action="index.php" id="newEmp">
        <fieldset>
            <legend>Ajouter Employé</legend>

            <p>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" >
            </p>

            <p>
                <label for="surname">Prenom: </label>
                <input type="text" name="surname" id="surname" >
            </p>

            <p>
                Poste: 
                <select name="post" >
                    <option value="agent" selected>Agent</option>
                    <option value="medecin" >Medecin</option>
                    <option value="directeur">Directeur</option>
                </select>
            </p>

            <p>
                <input type="submit" value="Valider">
            </p>
        </fieldset>
    </form>

    <!--CODE RECHERCHE ID EMPLOYÉ AVEC LE NOM , PRENOM ET LE POSTE-->
    <form action="index.php" method="post" id="searchIdEmp">
        <fieldset>
            <legend>Recherche Id employé</legend>
            
            <p>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" >
            </p>

            <p>
                <label for="surname">Prenom: </label>
                <input type="text" name="surname" id="surname" >
            </p>

            <p>
                Poste: 
                <select name="post" >
                    <option value="agent" selected>Agent</option>
                    <option value="medecin" >Medecin</option>
                    <option value="directeur">Directeur</option>
                </select>
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>

            <?php echo $contenu ?>

        </fieldset>

    </form>

    <!--CODE SUPPRESSION EMPLOYE AVEC LE ID EMP-->
    <form method="post" action="index.php" id="deleteEmp">
        <fieldset>
            <legend>Supprimer Employé</legend>
            
            <p>
                <label for="idEmp">id employé: </label>
                <input type="number" name="idEmp" id="idEmp" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE MODIFICATION DES IDENTIFIANTS AVEC LE ID-->
    <form method="post" action="index.php" id="newLog">
        <fieldset>
            <legend>Modifier Identifiants de Connexion</legend>

            <p>
                <label for="idEmp">Id employé: </label>
                <input type="number" name="idEmp" id="idEmp" >
            </p>

            <p>
                <label for="log">Nouveau login: </label>
                <input type="text" name="log" id="log" >
            </p>

            <p>
                <label for="mdp">Nouveau mdp: </label>
                <input type="password" name="mdp" id="mdp" >
            </p>

            <p>
                <input type="submit" value="Valider">
            </p>
        </fieldset>
    </form>

    <!--CODE AJOUT DE PIECES-->
    <!--A CODER EN JS AJOUT DE CASE SELON NOMBRE RENTRÉ -->
    <form method="post" action="index.php" id="newPc">
        <fieldset>
            <legend>Ajouter des pieces</legend>

            <p>
                <label for="nbrPc">Nombre de Pieces: </label>
                <input type="number" name="nbrPc" id="nbrPc" >
            </p>

            <p>
                <label for="pc">Piece: </label>
                <input type="text" name="pc" id="pc" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE SUPPRESSION DE PIECE AVEC LE ID-->
    <form method="post" action="index.php" id="deletePc">
        <fieldset>
            <legend>Supprimer Piece</legend>
            
            <p>
                <label for="idPc">id Piece: </label>
                <input type="number" name="idPc" id="idPc" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE AJOUT DE CONSIGNE-->
        <!--A CODER EN JS AJOUT DE CASE SELON NOMBRE RENTRÉ -->
    <form method="post" action="index.php" id="newOrder">
        <fieldset>
            <legend>Ajouter des Consignes</legend>

            <p>
                <label for="nbrOrder">Nombre de Consignes: </label>
                <input type="number" name="nbrOrder" id="nbrOrder" >
            </p>

            <p>
                <label for="order">Nouvelle consigne: </label>
                <textarea name="order" id="order" cols="45" rows="3"> </textarea>
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE SUPPRESSION DES CONSIGNES-->
    <form method="post" action="index.php" id="deleteOrder">
        <fieldset>
            <legend>Supprimer Consigne</legend>
            
            <p>
                <label for="idOrder">id consigne: </label>
                <input type="number" name="idOrder" id="idOrder" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE AJOUT DE MOTIF LIBELLE MOTIF, PRIX MOTIF-->
    <!--A CODER EN JS AJOUT DE CASE SELON NOMBRE RENTRÉ -->
    <form method="post" action="index.php" id="newMotif">
        <fieldset>
            <legend>Ajouter Motifs</legend>

            <p>
                <label for="nbrMotif">Motif: </label>
                <input type="text" name="nbrMotif" id="nbrMotif" >
            </p>

            <p>
                <label for="prixMotif">Prix Motif: </label>
                <input type="number" name="prixMotif" id="prixMotif" >
            </p>

            <p> coder la liste de pieces</p> <!--A CODER-->
            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

    <!--CODE SUPPRESION DE MOTIF AVEC LE ID-->
    <form method="post" action="index.php" id="deleteMotif">
        <fieldset>
            <legend>Supprimer Motifs</legend>
            
            <p>
                <label for="idMotif">id Motif: </label>
                <input type="number" name="idMotif" id="idMotif" >
            </p>

            <p>
                <input type="submit" value="Valider" >
            </p>
        </fieldset>
    </form>

</body>
</html>