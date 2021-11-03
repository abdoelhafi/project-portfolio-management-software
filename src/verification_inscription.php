<?php
session_start();
//donnees:
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$nom_equipe=$_POST['nom_equipe'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmer_password=$_POST['confirmer_password'];

if (isset($nom) && isset($prenom) && isset($nom_equipe) && isset($email) && isset($password) && isset($confirmer_password))
{
	$nom=htmlspecialchars($nom);
	$prenom=htmlspecialchars($prenom);
	$nom_equipe=htmlspecialchars($nom_equipe);
	$email=htmlspecialchars($email);
	$password=htmlspecialchars($password);
	$confirmer_password=htmlspecialchars($confirmer_password);
	if ($password!=$confirmer_password)
	{
		header('Location: page_inscription.php?erreur=1');
	}
	else{
		if(strlen($password)<8){
			header('Location: page_inscription.php?erreur=2');
		}
		else{
			//connexion à la BD:
			try 
			{
				$connexionBD=new PDO('mysql:host=localhost;dbname=gpp_db','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
			}catch (Exception $e) 
			{
				die('Erreur : '.$e->getMessage());
			}
			//verifier que l'email n'existe pas deja:
			$requete1='select * from admin where email_admin=\''.$email.'\'';
			$donnee1=$connexionBD->query($requete1);
			if ($donnee1->fetch())
			{
				header('Location: page_inscription.php?erreur=3');
			}
			else
			{
				//l'insertion des donnees:
				$requete2="insert into admin (nom_admin,prenom_admin,nom_equipe,email_admin,password_admin) values(?,?,?,?,?)";
				$statment=$connexionBD->prepare($requete2);
				$statment->execute(array($nom,$prenom,$nom_equipe,$email,$password));
				$statment->closeCursor();
				//
				$_session['nom']=$nom;
				$_session['prenom']=$prenom;
				$_session['email']=$email;

				//
				header('Location: page_inscription.php?message=succes');
			}
				
		}
	}
}

?>