<?php

session_start();



include '../../src/common/DBConnection.php';

$conn=new DBConnection();

    $nom_tache=$_POST['nom_tache'];
    $nom_contributeur=$_POST['nom_contributeur'];
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    $etat_tache=$_POST['etat_tache'];
    $priorite_tache=$_POST['priorite_tache'];
    $description_tache=$_POST['description_tache'];
    $id_projet=$_POST['id_projet'];

    // $result=$conn->execute("INSERT INTO tache(nom_tache,nom_contributeur,date_debut,date_fin, etat_tache,priorite_tache,description_tache,id_projet) 
    //  VALUES('".$nom_tache."','".$nom_contributeur."','".$date_debut."','".$date_fin."','".$etat_tache."','". $priorite_tache."','".$description_tache."',".$id_projet.")");

    $result=$conn->execute('INSERT INTO tache(nom_tache,nom_contributeur,date_debut,date_fin, etat_tache,priorite_tache,description_tache,id_projet) 
     VALUES("'.$nom_tache.'","'.$nom_contributeur.'","'.$date_debut.'","'.$date_fin.'","'.$etat_tache.'","'. $priorite_tache.'","'.$description_tache.'",'.$id_projet.')');

    if($result) {
        header("Location: " ."../../vue/menu/creer_tache.php?message=success");
        die();
    } else {
        header("Location: " ."../../vue/menu/creer_tache.php?message=failed");
        die();
    }

// class NoticeStore
// {

// }
?>