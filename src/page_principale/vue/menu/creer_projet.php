<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../../img/icone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                                    Projet crée
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
                        <h3>Créer un projet</h3>
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

                                <form action="../../vue/menu/projetBD.php" method="post" class="form-horizontal form-label-left" novalidate>

                                    <span class="section">Informations du projet</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventSubject">Nom de projet<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventSubject" class="form-control col-md-7 col-xs-12" name="nom_projet" placeholder="Nom de projet" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventDate">Date de début<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventDate" class="form-control col-md-7 col-xs-12" name="date_debut" placeholder="" required="required" type="date">
                                        </div>
                                    </div>

                                     <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventDate">Date de finition<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventDate" class="form-control col-md-7 col-xs-12" name="date_fin" placeholder="" required="required" type="date">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventDesc">Description du projet<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" id="eventDesc" name="description_projet"  placeholder="Description du projet" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Annuler</button>
                                            <button name="btn-notice" id="btn-notice" type="submit" class="btn btn-success">Confirmer</button>
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
