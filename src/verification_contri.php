<?php
session_start();
if (isset($_POST['email']) && isset($_POST['id_connexion']))
{
	$email=htmlspecialchars($_POST['email']);
	$id_connexion=htmlspecialchars($_POST['id_connexion']);
	try 
	{
		$connexionBD=new PDO('mysql:host=localhost;dbname=gpp_db','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	} catch (Exception $e) 
	{
		die('Erreur : '.$e->getMessage());
	}
 	if ($email!="" && $id_connexion!="")
 	{
 		$requete='select id_connexion from contributeur where email=\''.$email.'\'';
 		$reponse=$connexionBD->query($requete);
 		$donnee=$reponse->fetch();
 		$id=$donnee['id_connexion'];
 		if ($id==$id_connexion)
 		{
 			$_SESSION['email'] = $email;
 			//recuperer id_admin:
			$requete1='select * from contributeur where email=\''.$email.'\' and id_connexion=\''.$id_connexion.'\'';
			$reponse1=$connexionBD->query($requete1);
			$donnee1=$reponse1->fetch();
			$_SESSION['id_admin']=$donnee1['id_admin'];
			$_SESSION['nom_admin']=$donnee1['nom_contri'];
			$_SESSION['prenom_admin']=$donnee1['prenom_contri'];
           	header('Location: page_principale_contri/vue/menu/accueil.php');

 		}
 		else
 		{
 			header('Location: page_login.php?erreur=1');
		}
		
		
 	}
 	else
    {
       header('Location: page_login.php?erreur=2'); 
    }
}
else
{
	header('Location:page_login.php');
}

?>

