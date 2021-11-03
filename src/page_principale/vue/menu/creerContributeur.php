<?php

session_start();


include '../../src/common/DBConnection.php';

$conn=new DBConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../img/icone.png">

    <title>GPP facile</title>

    <link href="../../ressource/css/bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/font-awesome.css" rel="stylesheet">
    <link href="../../ressource/css/nprogress.css" rel="stylesheet">
    <link href="../../ressource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- la bare et la gauche de la page -->
        <?php include '../partPage/sideAndTopBarMenu.php' ?>

        <!-- contentenu de la page -->
        <div class="right_col" role="main">
            
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                         <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="success") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Membre ajouté à l'équipe
                                    </div>";
                                } else if($_GET['message']=="failed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Erreur,réessayer une autre fois
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <h3>Ajouter un membre à l'équipe</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Remplir le formulaire</h2>
                             
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" method="POST" action="../../vue/menu/contributeurBD.php" novalidate>

                                    
                                    <span class="section">Informations de contributeur</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">Prénom <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="prenom" placeholder="Entrer ton prénom" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Nom <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" name="nom" placeholder="Entrer ton nom" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Adresse email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email2" name="email"  required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Téléphone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="tel" id="telephone" name="telephone" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    
                                    
                                   
                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">ID de Connexion  <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" type="text" name="id_connexion"  class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Annuler</button>
                                            <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bas de page -->
        <?php include '../partPage/footer.html' ?>
    </div>
</div>
        <!-- les scripts -->

<script src="../../ressource/js/jquery.min.js"></script>
<script src="../../ressource/js/bootstrap.min.js"></script>
<script src="../../ressource/js/fastclick.js"></script>
<script src="../../ressource/js/nprogress.js"></script>
<script src="../../ressource/js/validator.js"></script>
<script src="../../ressource/js/custom.js"></script>
</body>
</html>
