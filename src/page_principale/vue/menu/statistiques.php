<?php

session_start();


include '../../src/common/DBConnection.php';

$conn=new DBConnection();
$id=$_SESSION['id_admin'];
$projets=$conn->getAll('SELECT * FROM projet where id_admin='.$id.';');

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
    <script src="../../ressource/js/chart.min.js"></script>
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
                        <h3>Statistiques</h3>
                    </div>

                   
                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                              
                                <h4>Statistiques par projet </h4>
                                <div class="clearfix"></div>
                            </div>
                           


                            <div class="x_content">

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom du projet</th>
                                        <th>Tâches en attente</th>
                                        <th>Tâches en cours</th>
                                        <th>Tâches coincées</th>
                                        <th>Tâches terminées</th>
                                        <th>Pourcentage d'avancement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                   
                                        foreach ($projets as $projet){
                                            $id=$projet['id_projet'];
                                            //en cours:
                                            $requete1='select count(*) from tache where id_projet='.$id.' and etat_tache=\'En cours\';';
                                            $result1=$conn->getOne($requete1);
                                            $en_cours=$result1['count(*)'];     
                                            //terminée:      
                                            $requete2='select count(*) from tache where id_projet='.$id.' and etat_tache=\'Terminée\';';
                                            $result2=$conn->getOne($requete2);
                                            $terminee=$result2['count(*)']; 
                                            // //coincée:
                                            $requete3='select count(*) from tache where id_projet='.$id.' and etat_tache=\'Coincée\';';
                                            $result3=$conn->getOne($requete3);
                                            $coincee=$result3['count(*)'];  
                                            // //en attente:
                                            $requete4='select count(*) from tache where id_projet='.$id.' and etat_tache=\'En attente\';';
                                            $result4=$conn->getOne($requete4);
                                            $en_attente=$result4['count(*)']; 
                                            //pourcentage:

                                            $total=$en_cours+$en_attente+$coincee+$terminee;
                                            if($total!=0){
                                                $pourcentage=round(($terminee*100)/$total,3).' %';
                                            }
                                            else{
                                                $pourcentage='Aucun avancement';
                                            }

                                            
                                    ?>
                                    <tr>
                                        <td><?=$projet['nom_projet']?></td>
                                        <td><?=$en_attente ?></td>
                                        <td><?=$en_cours ?></td>
                                        <td><?=$coincee ?></td>
                                        <td><?=$terminee ?></td>
                                        <td><?=$pourcentage ?></td>
                                          
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
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                              
                                <h4>Diagramme d'avancement des tâches de projets </h4>
                                <div class="clearfix"></div>
                            </div>
                           


                            <div class="x_content">

                                <p class="text-muted font-13 m-b-30">

                                </p>
                                 <div class="diagram-div">
                    <div class="container stat-diagram">

                        <canvas id="statChart"></canvas>
                        <?php
                            $id=$_SESSION['id_admin'];
                            //en cours:                            
                            $req1='select count(*) from tache,projet where tache.id_projet=projet.id_projet and projet.id_admin='.$id.' and tache.etat_tache=\'En cours\'' ;
                            $res1=$conn->getOne($req1);
                            $en_cours1=$res1['count(*)'];     
                            //terminée:      
                            $req2='select count(*) from tache,projet where tache.id_projet=projet.id_projet and projet.id_admin='.$id.' and tache.etat_tache=\'Terminée\';';
                            $res2=$conn->getOne($req2);
                            $terminee1=$res2['count(*)']; 
                            // //coincée:
                            $req3='select count(*) from tache,projet where tache.id_projet=projet.id_projet and projet.id_admin='.$id.' and tache.etat_tache=\'Coincée\';';
                            $res3=$conn->getOne($req3);
                            $coincee1=$res3['count(*)'];  
                            // //en attente:
                            $req4='select count(*) from tache,projet where tache.id_projet=projet.id_projet and projet.id_admin='.$id.' and tache.etat_tache=\'En attente\';';
                            $res4=$conn->getOne($req4);
                            $en_attente1=$res4['count(*)']; 
                        ?>   
                                <script type="text/javascript">


                                        var myData = {
                                            labels: [
                                                'En cours', "En attente", 'Terminées', 'Coincées'
                                            ],

                                            datasets: [
                                                {
                                                    label: 'Tâches',
                                                    backgroundColor: [
                                                        'rgb(255, 154, 53,0.8)', 'rgb(62, 158, 255,0.8)', 'rgb(0, 196, 0,0.8)', 'rgb(255, 30, 30,0.8)'
                                                    ],
                                                    borderColor: 'rgb(255, 154, 53,0.3)',
                                                    data: [
                                                        <?php echo $en_cours1;?>, <?php echo $en_attente1;?>, <?php echo $terminee1;?>, <?php echo $coincee1;?>
                                                    ],
                                                    borderWidth: 1,
                                                    borderColor: '#777',
                                                    hoverBorderWidth: 3,
                                                    hoverBorderColor: '#000'

                                                }
                                            ]

                                        };
                                        var myOptions = {
                                            title: {
                                                display: true,
                                                text: "Diagramme des tâches",
                                                fontSize: 16,
                                                fontColor: '#111'
                                            },
                                            legend: {
                                                display: false
                                            },
                                            scales: {
                                                xAxes: [
                                                    {
                                                        ticks: {
                                                            maxRotation: 90
                                                        }
                                                    }
                                                ],
                                                yAxes: [
                                                    {
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                ]
                                            }
                                        };

                                        //Diagramme
                                        var ctx = document.getElementById('statChart').getContext('2d');
                                        Chart.defaults.global.defaultFontFamily = 'Lato';
                                        Chart.defaults.global.defaultFontSize = 18;
                                        Chart.defaults.global.defaultFontColor = '#777';
                                        var Barchart = new Chart(ctx, {
                                            type: 'bar', 
                                            data: myData,
                                            options: myOptions

                                        });
                                </script>
                    </div> 
                    <div class="diagram-btn">
                        <button class="btn btn-outline-secondary d-btn" id="pieD">Secteur</button>
                        <button class="btn btn-outline-warning d-btn" id="doughnutD">Beignet</button>
                        <button class="btn btn-outline-info d-btn" id="barD">Barres</button>

                    </div>  
                </div>                
                                
                             
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