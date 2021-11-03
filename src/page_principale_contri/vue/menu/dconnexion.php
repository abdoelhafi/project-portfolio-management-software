<?php

session_start();

unset($_SESSION['id_admin']);
unset($_SESSION['nom_admin']);
unset($_SESSION['prenom_admin']);



session_destroy();

header("Location:../../../login_contri.php?");

?>