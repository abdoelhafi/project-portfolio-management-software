<?php

session_start();



include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$nom_projet=$_POST['nom_projet'];
$date_debut=$_POST['date_debut'];
$date_fin=$_POST['date_fin'];
$description_projet=$_POST['description_projet'];
$id_admin=$_SESSION['id_admin'];

// $result=$conn->execute("INSERT INTO projet (nom_projet,date_debut,date_fin,description_projet,id_admin) 
//      VALUES ('".$nom_projet."', '".$date_debut."', '".$date_fin."', '".$description_projet."', ".$id_admin.");");
$result=$conn->execute('INSERT INTO projet (nom_projet,date_debut,date_fin,description_projet,id_admin) 
     VALUES ("'.$nom_projet.'", "'.$date_debut.'", "'.$date_fin.'", "'.$description_projet.'", '.$id_admin.');');

if($result) {
    header("Location: " ."../../vue/menu/creer_projet.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/creer_projet.php?message=failed");
    die();
}

// class EventStore
// {

// }
?>