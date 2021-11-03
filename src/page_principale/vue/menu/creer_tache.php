<?php

session_start();


include '../../src/common/DBConnection.php';

$conn=new DBConnection();
$id=$_SESSION['id_admin'];
$projets=$conn->getAll("SELECT * FROM projet where id_admin=".$id."");

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
                                    Tâche ajoutée au projet concerné
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
                        <h3>Ajouter une tâche</h3>
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

                                <form action="../../vue/menu/tacheBD.php" method="post" class="form-horizontal form-label-left" novalidate>

                                    <span class="section">Informations de la tâche</span>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="taskStatus">Nom du projet<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="custom-select" name="id_projet" id="project_name"  required>
                                                <option value="">Choisir le projet concerné </option>
                                                <?php
                                                    foreach ($projets as $projet) {
                                                ?>
                                                        <option value="<?php echo $projet['id_projet']?>"><?php echo $projet['nom_projet']?> </option>
                                                <?php
                                                    }
                                                ?>
                                                    
                                                    
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="taskName">Nom de la tâche<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="taskName" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="nom_tache" placeholder="Nom de la tâche" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contributerName">Nom de contributeur<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="contributerName" class="form-control col-md-7 col-xs-12" name="nom_contributeur" placeholder="Nom de contributeur" required="required" type="text">
                                        </div>
                                    </div>

                                   

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="startDate">Date de début<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="startDate" class="form-control col-md-7 col-xs-12" name="date_debut" placeholder="Date de début de la tâche" required="required" type="date">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finishDate">Date de finition<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="finishDate" class="form-control col-md-7 col-xs-12" name="date_fin" placeholder="Date de finition de la tâche" required="required" type="date">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="taskStatus">Etat de la tâche<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="custom-select" name="etat_tache" id="taskStatus" required>
                                                    <option selected="selected">Choisir l'état de la tâche</option>
                                                    <option value="En cours">En cours</option>
                                                    <option value="Coincée">Coincée</option>
                                                    <option value="Terminée">Terminée</option>
                                                    <option value="En attente">En attente</option>
                                            </select>
                                            <style type="text/css">
                                                
                                                select{
                                                    
                                                   
                                                    border : 1px solid ;
                                                    border-radius : 5px;
                                                    padding : 3px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="taskPriority">Priorité de la tâche<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="custom-select" name="priorite_tache" id="taskPriority" >
                                                <option selected="selected">Choisir la priorité de la tâche</option>
                                                <option value="Urgente">Urgente</option>
                                                <option value="Haute">Haute</option>
                                                <option value="Moyenne">Moyenne</option>
                                                <option value="Faible">Faible</option>
                                            </select>
                                      </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="taskDesc">Description de la tâche<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" id="taskDesc" name="description_tache"  placeholder="Description de la tâche" class="form-control col-md-7 col-xs-12"></textarea>
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
