<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password']))
{
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	try 
	{
		$connexionBD=new PDO('mysql:host=localhost;dbname=gpp_db','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	} catch (Exception $e) 
	{
		die('Erreur : '.$e->getMessage());
	}
 	if ($email!="" && $password!="")
 	{
 		$requete='select password_admin from admin where email_admin=\''.$email.'\'';
 		$reponse=$connexionBD->query($requete);
 		$donnee=$reponse->fetch();
 		$pass=$donnee['password_admin'];
 		if ($pass==$password)
 		{
 			$_SESSION['email'] = $email;
 			//recuperer id_admin:
			$requete1='select * from admin where email_admin=\''.$email.'\' and password_admin=\''.$password.'\'';
			$reponse1=$connexionBD->query($requete1);
			$donnee1=$reponse1->fetch();
			$_SESSION['id_admin']=$donnee1['id_admin'];
			$_SESSION['nom_admin']=$donnee1['nom_admin'];
			$_SESSION['prenom_admin']=$donnee1['prenom_admin'];
           	header('Location: page_principale/vue/menu/accueil.php');

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

