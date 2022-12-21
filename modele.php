<?php

	require_once('connect.php');
	function getConnect(){
		$connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
		$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$connexion->query('SET NAMES UTF8');
		return $connexion;
	}
	
	function getIdPers($login,$mdp){
		$connexion=getConnect();
		$resultat= "select idPers from Personnel where Login='$login' and Mdp='$mdp' "
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$idPers=$resultat->fetchall();
		return $idPers ;
	}
	
	function getRole($idPers){
		$connexion=getConnect();
		$resultat= "select libelleCat from Categorie where IdPers='$idPers'"
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$role=$resultat->fetchall();
		$resultat->closeCursor();
		return $role ;
	}
	
	// Pour directeur
	
	function ajouterPers($nomP,$prenomP,$login,$mdp){
		$connexion=getConnect();
		$requete="INSERT INTO Personnel VALUES('$nomP','$prenomP','$login','$mdp')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function ajouterRole($idNE,$role){
		$connexion=getConnect();
		$requete="INSERT INTO Categorie VALUES('$role','$idNE')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function ajouterSpecialite($specialite,$idNE){
		$connexion=getConnect();
		$requete="INSERT INTO specialite VALUES('$specialite','$idNE')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function ajouterPiece($piece){
		$connexion=getConnect();
		$requete="INSERT INTO Piece VALUES('$piece')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	function ajouterConsigne($consigne){
		$connexion=getConnect();
		$requete="INSERT INTO Consigne VALUES('$consigne')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function ajouterMotif($motif,$prix){
		$connexion=getConnect();
		$requete="INSERT INTO Motif VALUES('$motif','$prix')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function getMotif(){
		$connexion=getConnect();
		$requete="select LibelleMo from Motif";
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$liste=$resultat->fetchall();
		$resultat->closeCursor();
		return $liste;
	
	function modifierPrix($motif,$prix){
		$connexion=getConnect();
		$requete="update Motif set PrixMo='$prix' WHERE LibelleMo='$motif'";
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$resultat->closeCursor();
	}
	
//Pour agent 
	function nouveauClient($nom,$prenom,$adresse,$numTel,$dateNais,$NSS,$departNaiss,$solde){
		$connexion=getConnect();
		$requete="INSERT INTO Client VALUES('$nom','$prenom','$adresse','$numTel','$dateNais','$NSS','$departNaiss','$solde')";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
	}

	function rechercheClient($nom,$dateNais){
		connexion=getConnect();
		$requete="select * from Client where nom='$nom' and dateNaiss='$dateNaiss'";
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$liste=$resultat->fetchall();
		$resultat->closeCursor();
		return $client;
	}

	function 