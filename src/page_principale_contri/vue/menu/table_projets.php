<?php

session_start();



include '../../src/common/DBConnection.php';

$conn=new DBConnection();
$id=$_SESSION['id_admin'];

$projets=$conn->getAll('SELECT * FROM projet where id_admin='.$id.';');

?>
<?php
    

    if(isset($_POST['supprimer'])){
        $id = $_POST['id_supp'];
        $requete0='select count(*) from tache where id_projet='.$id.';';
        $result0=$conn->getOne($requete0);
        $n=$result0['count(*)'];
        if($n!=0){
            $requete2='delete from tache where id_projet='.$id.';';
            $conn->execute($requete2);
        }
        $requete1='delete from projet where id_projet='.$id.';';
        $conn->execute($requete1);
         
         header('Location: table_projets.php');

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
                        <h3>Tables des projets</h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                              
                        
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom du projet</th>
                                        <th>Date de début</th>
                                        <th>Date de finition</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($projets as $projet){
                                        $id_projet=$projet['id_projet'];
                                    ?>
                                    <tr>
                                        <td><?=$projet['nom_projet']?></td>
                                        <td><?=$projet['date_debut']?></td>
                                        <td><?=$projet['date_fin']?></td>
                                        <td><?=$projet['description_projet']?></td>
                                        
                                        <td id="bou">
                                        <form method="POST" action="table_projets.php">
                                            <input type="hidden" name="id_supp" value="<?php echo $id_projet; ?>">
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
<script src="../../ressource/js/jszip.min.js"></script>
<script src="../../ressource/js/pdfmake.min.js"></script>
<script src="../../ressource/js/vfs_fonts.js"></script>
<script src="../../ressource/js/custom.js"></script>
</body>
</html>
