<?php

session_start();


include '../../src/common/DBConnection.php';

$conn=new DBConnection();
if (isset($_POST['id_projet']) && $_POST['id_projet']!='1'){
    $taches=$conn->getAll("SELECT * FROM tache where id_projet=".$_POST['id_projet'].";");

}
$id=$_SESSION['id_admin'];
$projets=$conn->getAll("SELECT * FROM projet where id_admin=".$id.";");

?>
<?php
    

    if(isset($_POST['supprimer'])){
         $id = $_POST['id_supp'];
         $requete='delete from tache where id_tache='.$id.';';
         $conn->execute($requete);
         header('Location: table_taches.php');

    }






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
    <link href="../../ressource/css/green.css" rel="stylesheet">
    <link href="../../ressource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/scroller.bootstrap.css" rel="stylesheet">
    <link href="../../ressource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- la bare et la gauche de la page -->

        <?php include '../partPage/sideAndTopBarMenu.php' ?>
        <!-- contentenu de la page -->

        <div class="right_col" role="main">
            <style type="text/css">
                .right_col{
                    height: 640px;
                }
            </style>
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                        <h3>Tables des tâches</h3>
                    </div>

                    
                    <div>
                        
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                              
                
                                <div class="clearfix"></div>
                            </div>
                            <form method="POST" action="../menu/table_taches.php">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label id="label" >Choisir un projet :</label>
                                    <select class="custom-select" name="id_projet" id="project_name">
                                        <option value='1'>Choisir le projet concerné </option>
                                        <?php
                                            foreach ($projets as $projet) {
                                                $id_projet=$projet['id_projet'];
                                        ?>
                                                <option value="<?php echo $projet['id_projet']?>"><?php echo $projet['nom_projet']?> </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <style type="text/css">
                                        select{
                                            height: 32px;
                                            background : #DAEAF9;
                                            border : 1px solid #DAEAF9;
                                            border-radius : 5px;
                                            padding : 3px;
                                        }
                                        #label{
                                            
                                            font-size: 1.2em;
                                        }


                                    </style>
                                </div>

                                <div class="col-md-6 col-md-offset-3" id="bouton">
                                    <style type="text/css">
                                        #bouton{
                                            margin-top: -32px;
                                            margin-left: 330px;
                                            margin-bottom: 55px;

                                        }
                                        
                                    </style>
                                    <button name="btn" id="btn" type="submit" class="btn btn-success">Confirmer</button>
                                    <style type="text/css">
                                        #btn{
                                            height: 32px;
                                        }
                                    </style>
                                </div>
                            </form>


                            <div class="x_content">

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom de la tâche</th>
                                        <th>Contributeur</th>
                                        <th>Date de début</th>
                                        <th>Date de finition</th>
                                        <th>Etat de la tâche</th>
                                        <th>Priorité</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($_POST['id_projet']) &&  $_POST['id_projet']!='1'){
                                        foreach ($taches as $tache){
                                            $id_tache=$tache['id_tache'];
                                    ?>
                                    <tr>
                                        <td><?=$tache['nom_tache']?></td>
                                        <td><?=$tache['nom_contributeur']?></td>
                                        <td><?=$tache['date_debut']?></td>
                                        <td><?=$tache['date_fin']?></td>
                                        <td><?=$tache['etat_tache']?></td>
                                        <td><?=$tache['priorite_tache']?></td>
                                        <td><?=$tache['description_tache']?></td>
                                        <td id="bou">
                                        <form method="POST" action="table_taches.php">
                                            <input type="hidden" name="id_supp" value="<?php echo $id_tache; ?>">
                                            <button type="submit" name="supprimer" class="btn btn-danger btn-xs delete" >Supprimer</button>
                                        </form>
                                            <style type="text/css">
                                                #bou{
                                                    display: flex;
                                                }
                                            </style>
                                        </td>
                                       
                                    </tr>
                                    <?php
                                }
                                   }
                                    ?>
                                    </tbody>
                                </table>
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
<script src="../../ressource/js/icheck.min.js"></script>
<script src="../../ressource/js/jquery.dataTables.min.js"></script>
<script src="../../ressource/js/dataTables.bootstrap.min.js"></script>
<script src="../../ressource/js/dataTables.buttons.min.js"></script>
<script src="../../ressource/js/buttons.bootstrap.min.js"></script>
<script src="../../ressource/js/buttons.flash.min.js"></script>
<script src="../../ressource/js/buttons.html5.min.js"></script>
<script src="../../ressource/js/dataTables.fixedHeader.min.js"></script>
<script src="../../ressource/js/dataTables.keyTable.min.js"></script>
<script src="../../ressource/js/dataTables.responsive.min.js"></script>
<script src="../../ressource/js/responsive.bootstrap.js"></script>
<script src="../../ressource/js/dataTables.scroller.min.js"></script>
<script src="../../ressource/js/custom.js"></script>
</body>
</html>
