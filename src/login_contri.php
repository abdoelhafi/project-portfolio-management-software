<html >
    <head>
        <meta charset="UTF-8">
        <meta name="GPP">
        <title>Connectez-vous</title>
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

    <body >
            
                    <!-- bare de navigation -->
               
                <div >
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
                </div>
                    <!-- formulaire d'inscription -->
        <div>
            <style type="text/css">
                        section
                        {
                            background: url('img/back.jpg') no-repeat;
                            
                        }


            </style>

                 <section class="colored-section" id="main-login">
                     
                    <div >
                    <div class="login-form-content">

                        <div class="login-title">
                            <!-- <div id="logo_page" style="margin-top: -120px;"><img src="img/logo.png"/></div> -->
                            
                            <h3 class="login-header">
                                Rejoingnez-vous votre équipe !
                            </h3>

                        </div>
                       <form class="login-items" method="POST" action="verification_contri.php">

                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input
                                    type="email"
                                    id="login-email"
                                    class="email-class form-control"
                                    name="email"
                                    placeholder="Entrer votre email."
                                    required="required">

                            </div>

                            <div class="form-group">
                                <label for="pwd">Identifiant de connexion</label>
                                <input
                                    type="password"
                                    id="login-password"
                                    class="pwd-class form-control"
                                    name="id_connexion"
                                    placeholder="Entrer l'Id de connexion."
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input
                                    type="submit"
                                    class="submit-class form-control btn btn-primary"
                                    id="submit-id"
                                    value="Rejoindre">
                            </div>

                            </form>
                    </div>

                </div>
            </section>

           
            <footer class="white-section login-footer" id="footer">
                
                    <div class="container-fluid">
                        <i class="social-icon fab fa-facebook-f"></i>
                        <i class="social-icon fab fa-twitter"></i>
                        <i class="social-icon fab fa-instagram"></i>
                        <i class="social-icon fas fa-envelope"></i>
                        <p>© Copyright tous droits réservés</p>
                    </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>