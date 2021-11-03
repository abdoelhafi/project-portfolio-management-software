<?php

session_start();

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$nom_contri=$_POST['nom'];
$prenom_contri=$_POST['prenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$id_connexion=$_POST['id_connexion'];
$id_admin=$_SESSION['id_admin'];

$result=$conn->execute('INSERT INTO contributeur (nom_contri,prenom_contri,email,telephone,id_connexion,id_admin) 
     VALUES ("'.$nom_contri.'", "'.$prenom_contri.'", "'.$email.'", "'.$telephone.'", "'.$id_connexion.'", '.$id_admin.');');

if($result) {
    header("Location: " ."../../vue/menu/creerContributeur.php?message=success");
    die();
} else {
    header("Location: " ."../../menu/creerContributeur.php?message=failed");
    die();
}
