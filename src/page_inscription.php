<html >
    <head>
        <meta charset="UTF-8">
        <meta name="GPP">
        <title>Inscrivez-vous</title>
        <!-- <i class="fas fa-lightbulb"></i> -->
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="img/icone.png">

        <!-- icons de font awesome -->
        <script src="https://kit.fontawesome.com/ea65b06043.js" crossorigin="anonymous"></script>

        <!-- script jquery - boatstrap -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

        <!-- lien du boatstrap -->

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">

        <!-- font exterieurs -->

        <link
            href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,100&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,100&family=Quicksand:wght@700&display=swap"
            rel="stylesheet">
    </head>

    <body>
            <div class="colored-section" id="main-signUp">
                <div >

                    <!-- bare de navigation -->

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <!-- <img src="img/logo2.png" alt="logo" id="logo"/> -->
                        <a class="navbar-brand" id="brand" href="premier_page.php">GPP facile</a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarTogglerDemo02">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                            <ul class="navbar-nav ml-auto">
                                
                                <!-- <li class="nav-item"> <a class="nav-link nav-txt" href="premier_page.php">ACCUEIL</a> </li> -->
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="premier_page.php#about">A PROPOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="#footer">CONTACTEZ-NOUS</a>
                                </li>
                            </ul>

                        </div>
                    </nav>

                    <!-- formulaire d'inscription -->
                <section>
                    <style type="text/css">
                        section
                        {
                            background: url('img/t.jpeg') no-repeat;
                            margin-bottom: -20px;
                            
                        }


                    </style>
                    <div class="signUp-form-content">

                        <div class="signUp-title">
                           <!--   <div id="logo_page1"><img src="img/logo.png"/></div> -->
                            <h3 class="signUp-header">
                                Créer un compte !
                                <style type="text/css">
                                    h3{
                                        margin-top: 30px;
                                    }
                                </style>
                            </h3>

                        </div>
                        <form class="signUp-items" method="POST" action="verification_inscription.php">
                            <div class="form-group">
                                <label for="text">Nom.</label>
                                <input
                                    type="text"
                                    id="signUp-fst-name"
                                    class="name-class form-control"
                                    name="nom"
                                    placeholder="Entrer votre Nom."
                                    required="required">

                            </div>
                            <div class="form-group">
                                <label for="text">Prénom.</label>
                                <input
                                    type="text"
                                    id="signUp-lst-name"
                                    class="name-class form-control"
                                    name="prenom"
                                    placeholder="Entrer votre Prénom."
                                    required="required">

                            </div>
                            <div class="form-group">
                                <label for="text">Nom d'Equipe.</label>
                                <input
                                    type="text"
                                    id="signUp-enterprise-name"
                                    class="name-class form-control"
                                    name="nom_equipe"
                                    placeholder="Entrer votre Nom d'Equipe."
                                    required="required">

                            </div>

                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input
                                    type="email"
                                    id="signUp-email"
                                    class="email-class form-control"
                                    name="email"
                                    placeholder="Entrer votre email."
                                    required="required">

                            </div>

                            <div class="form-group">
                                <label for="pwd">Mot de passe</label>
                                <input
                                    type="password"
                                    id="signUp-password"
                                    class="pwd-class form-control"
                                    name="password"
                                    placeholder="Entrer votre mot de passe."
                                    required="required">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Confirmer le mot de passe</label>
                                <input
                                    type="password"
                                    id="signUp-password"
                                    class="pwd-class form-control"
                                    name="confirmer_password"
                                    placeholder="Confirmer votre mot de passe."
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input
                                    type="submit"
                                    class="submit-class form-control btn btn-primary"
                                    id="submit-id"
                                    value="joindre">
                            </div>
                            <?php
                                if(isset($_GET['erreur']))
                                {
                                    $erreur = $_GET['erreur'];
                                    switch ($erreur) {
                                        case 1:
                                            echo "<div style='text-align:center;'><p style='color:rgb(250,0,0);'>Mot de passe non confirmer</p></div>";
                                            break;
                                        case 2:
                                            echo "<div style='text-align:center;'><p style='color:rgb(250,0,0);'>Mot de passe doit contenir au mois 8 caractères</p></div>";
                                            break;
                                        case 3:
                                             echo "<div style='text-align:center;'><p style='color:rgb(250,0,0);'>l'email tapé est déjà existe</p></div>";
                                    }
                                }
                                if(isset($_GET['message'])){
                                    if($_GET['message']=='succes'){
                                        echo "<div style='text-align:center;'><p style='color:rgb(0,250,0);'>Vous êtes inscrit dans l'application</p></div>";
                                    }
                                }
                            ?>
                            <div class="form-group">
                                <p>vous avez déjà un compte ?</p>
                                
                                <a href="page_login.php">
                                    Connectez-vous</a>
                                <style type="text/css">
                                        .form-group a:hover
                                        {
                                            color: rgb(16,230,44);
                                            border-bottom: 3px solid rgb(16,230,44) ;
                                        }
                                        .form-group a
                                        {
                                            color: rgb(0,0,255);
                                            
                                        }
                                        .form-group p
                                        {
                                            color: rgb(0,0,0);
                                            
                                        }
                                </style>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
            <footer class="white-section signUp-footer" id="footer">
                    <div class="container-fluid">
                        <i class="social-icon fab fa-facebook-f"></i>
                        <i class="social-icon fab fa-twitter"></i>
                        <i class="social-icon fab fa-instagram"></i>
                        <i class="social-icon fas fa-envelope"></i>
                        <p>© Copyright tous droits réservés</p>
                    </div>
            </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>