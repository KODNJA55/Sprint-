<?php 
	require_once('modele/modele.php');
	require_once('vue/vue.php');


// Premiere connection
	function CtlLogin($login,$mdp){
		if(!(empty($login)||empty($mdp))){
			$idEmploye=getIdEmploye($login,$mdp);
			if($idEmploye !null){
				$role=getRole($idEmploye);			
			}else{
				throw new Exception ("Login ou mot de passe incorrect"); 
			}
			if ($role=="Agent"){
				require_once('vue/vueAgent.php');
			}
			if ($role=="Medecin"){
				require_once('vue/vueMedecin.php');
			}
			if ($role=="Directeur"){
				require_once('vue/vueDirecteur.php');
			}
		}else{
			throw new Exception ("Un champ est vide"); 
		}
	}
	
//Pour Directeur	

	function CtlNouvelEmploye($nomP,$prenomP,$login,$mdp,$role,$specialite){
		if(!(empty($nomP)||empty($prenomP)||empty($login)||empty($mdp)||empty($role))){
			ajouterPers($nomP,$prenomP,$login,$mdp);
			$idNE=getIdPers($login,$mdp);
			ajouterRole($idNE;$role);
		}else{
			throw new Exception ("Un champ est vide");
		}
		if (!empty($specialite)){
			ajouterSpecialite($specialite,$idNE);
		}
	}
	
	function CtlNouvellePiece($piece){
		if(!(empty($piece))){
			ajouterPiece($piece);
		}else{
			throw new Exception ("Un champ est vide");
		}
	}
	function CtlNouvelleConsigne($consigne){
		if(!(empty($consigne))){
			ajouterConsigne($consigne);
		}else{
			throw new Exception ("Un champ est vide");
		}
	}
	
	function CtlCreationMotif($motif,$prix){
		$liste=getMotif();
		for (int $i=0 ; $i<$liste.length ;$i++){
			if ($motif==$liste[0]){
				throw new Exception ("Motif déjà existant");
			}
		}
		ajouterMotif($motif,$prix);
	}

	function CtlModifierMotif($motif,$prix,){
		$liste=getMotif();
		for (int $i=0 ; $i<$liste.length ;$i++){
			if ($motif==$liste[0]){
				modifierPrix($motif,$prix);
			}
		}
		throw new Exception ("Motif déjà inexistant");
	}

	

// Pour Agent

	function CtlAjouterClient($nom,$prenom,$adresse,$numTel,$dateNais,$departNaiss,$NSS,$solde){
		if(!(empty($nom)||empty($prenom)||empty($adresse)||empty($dateNais)||empty($departNaiss))){
			if(empty($solde)){
				$solde=0;
				nouveauClient($nom,$prenom,$adresse,$numTel,$dateNais,$NSS,$departNaiss,$solde);
			}else{
				nouveauClient($nom,$prenom,$adresse,$numTel,$dateNais,$NSS,$departNaiss,$solde);
			}
		}else{
			throw new Exception ("Un champ est vide");
		}
	}

	function CtlRechercherClient($nom,$dateNaiss){
		if(!(empty($nom)||empty($dateNais))){
			$client=rechercheClient($nom,$dateNais);
		}else{
			throw new Exception ("Un champ est vide");
		}
	}
	
	function CtlAjoutSolde($NSS,$ajout){
		if(!(empty($NSS)||empty($ajout))){
			$idClient=rechercherIdClient($NSS);
			$solde=getSolde($idclient);
			$ajout+=$solde;
			ajoutSolde($idClient,$ajout);
		}
	}

	function CtlPrendreRDV($motif,$client,$medecin,$specialite,$dateRDV){
		if(!(empty($motif)||empty($client)||empty($medecin)||empty($specialite)||empty($dateRDV))){
			if(getRole(getIdPers($medecin))=='medecin'){
				if(getTacheAdmin($medecin)==$dateRDV){
					if(getSpecialite($medecin)==$specialite){
						if(getClient($client)!=null){
							$etat='impaye';
							nouveauRDV($motif,$client,$medecin,$specialite,$dateRDV,$etat);
						}else{
							throw new Exception ("Client inconnu");
						}
					}else{
						throw new Exception ("Le médecin ne possède pas la spécialité ");
					}
				}else{
					throw new Exception ("Le médecin est occupé à ce créneau");
				}
			}else{
				throw new Exception ("Ce n'est pas un medecin");
			}
		}else{
			throw new Exception ("Un champ est vide");
		}
	}

// Pour Medecin

	function CtlTacheAdmin($Date,$libelle,$medecin){
		if(!(empty($Date)||empty($libelle)||empty($medecin))){
			nouvelleTache($Date,$libelle,$medecin);
		}else{
			throw new Exception ("Un champ est vide")
		}
	}