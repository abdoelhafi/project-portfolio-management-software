<html >
    <head>

        <meta charset="UTF-8">
        <meta name="GPP">
        <title>GPP facile</title>
        <link rel="shortcut icon" href="img/icone.png">
        <!-- <i class="fas fa-lightbulb"></i> -->
        <link rel="stylesheet" href="style.css">
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
        <div class="row">
            <section class="col-lg-12 colored-section" id="main">
                <div >
                    
                    <!-- bare de navigation -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <!-- <img src="img/logo2.png" alt="logo" id="logo"/> -->
                        <a class="navbar-brand" id="brand" href="">GPP facile</a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarTogglerDemo02">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="premier_page.php">ACCUEIL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="page_inscription.php">INSCRIPTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="page_chef_contr.php">CONNEXION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="#about">A PROPOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-txt" href="#footer">CONTACTEZ-NOUS</a>
                                </li>
                                
                            </ul>

                        </div>
                    </nav>

                    <!-- titre et image principales -->

                    <div class="row top-row">

                        <div class="col-lg-6 ">
                            <h1 class="title">Une gestion efficace pour des résultats extraordinaires.</h1>

                            <button
                                type="button"
                                class="btn btn-dark btn-lg start-btn"
                                onclick="window.location.href = 'page_chef_contr.php';">Commencer dès maintenant
                                <i class="fas fa-chevron-right "></i>
                            </button>
                        </div>

                        <div class="col-md-6"></div>

                    </div>

                </div>
            </section>

            <section class=" col-lg-12 white-section" id="features">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" features-box col-lg-4">
                            <img src="img/computer.png" alt="" srcset="">
                            <h3 class="feature-title">Entièrement interactif.</h3>
                            <p>Très accessible à l'utilisation.</p>
                        </div>

                        <div class="features-box col-lg-4">
                            <img src="img/pencil.png" alt="" srcset="">
                            <h3 class="feature-title">Facile à personnaliser</h3>
                            <p>Gérer vos projets en gagnant plus de temps.</p>
                        </div>

                        <div class="features-box col-lg-4">
                            <img src="img/book.png" alt="" srcset="">
                            <h3 class="feature-title">Bien organisée.</h3>
                            <p>Vos données étiquetées et bien organisées.</p>
                        </div>
                    </div>

                </div>

            </section>
        </div>
        <section class="colored-section" id="about">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 ">
                        <p class="about-text">
                            connectez votre équipe afin que vous puissiez continuer à collaborer, gérer et
                            suivre le travail sur une seule plate-forme facile à utiliser, où que vous
                            soyez.Gérer votre projet et définissez les dépendances en temps réel .
                            Facilement réglable pour garder tout le monde sur la bonne voie et à l'heure.
                        </p>

                    </div>

                    <div class="col-lg-6 about-img ">
                        <img class="team-img" src="img/team.png" alt="">

                    </div>

                </div>

            </div>

        </section>

        <footer class="white-section" id="footer">
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