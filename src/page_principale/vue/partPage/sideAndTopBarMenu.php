<div class="col-md-3 left_col" id="nav">
    <style type="text/css">
        #nav{
            position: fixed;
        }
    </style>
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../menu/table_taches.php" class="site_title"><h3>GPP <span>FACILE </span></h3></a>
            <style type="text/css">
                .site_title span{
                    color: #19B3D3;
                }
                .site_title h3{
                  color: #fff;
                  margin-top: 16px;
                  text-transform: uppercase;
                  font-size: 22px;
                  font-weight: 900;

                }
            </style>
        </div>

        <div class="clearfix"></div>


        <!-- menu de gauche -->
        <div class="profile clearfix">
            <div class="profile_pic">

                <img src="../../ressource/images/icone.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenue</span>
                <?php 
                    if(isset($_SESSION['prenom_admin']) && isset($_SESSION['nom_admin'])){
                ?>
                     <h2><?php echo $_SESSION['prenom_admin'].' '.$_SESSION['nom_admin'] ?></h2>
                <?php
                    }
                ?>
               
            </div>
        </div>
        <br />
        <!-- menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            
            <div class="menu_section">
                <h3><span>MENU PRINCIPAL</span></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="../menu/accueil.php"><i class="fa fa-home"></i>Accueil</span></a>
                        
                    </li>
                    <li class="father">
                        <a><i class="fa fa-edit"></i> Espace de travail <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../menu/membres_equipe.php">Membres de l'équipe</a></li>

                            <li><a href="../menu/table_projets.php">Table des projets</a></li>
                            <li><a href="../menu/table_taches.php">Table des tâches</a></li>
                            <li><a href="../menu/statistiques.php">Statistiques</a></li>
                        </ul>
                    </li>
 
                    <li  class="father">
                        <a><i class="fa fa-edit"></i> Ajouter <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../menu/creerContributeur.php">Ajouter un membre à l'équipe</a></li>
                            <li><a href="../menu/creer_projet.php">Ajouter un projet</a></li>
                            <li><a href="../menu/creer_tache.php">Ajouter une tâche</a></li>

                        </ul>

                    </li>
                </ul>
            </div>
            
        </div>
        
    </div>
</div>

        <!-- la bare et la gauche de la page -->
<div class="top_nav">
    <div class="nav_menu">

        <nav>
            
            

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="../../ressource/images/icone.png" alt="">MON COMPTE
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li class="bt1">
                            <a href="https://zoom.us/join" class="user-profile dropdown-toggle"  aria-expanded="false" target="Black">
                                Rejoindre Zoom   <img src="../../ressource/images/zoom.png" alt="">
                        
                            </a>
                        </li>
                         <li class="bt2">
                            <a href="mailto:"   class="user-profile dropdown-toggle" >
                                 Envoyer un Email <img src="../../ressource/images/outlook.png" alt="">
                            </a>
                        </li>
                        <style type="text/css">
                            .bt1 img{
                                margin-left: 65px;

                            }
                            .bt2 img{
                                margin-left: 55px;

                            }
                        </style>
                        <li><a href="../../vue/menu/déconnexion.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a></li>
                    </ul>
                </li>
                
            </ul>

        </nav>

    </div>
</div>
