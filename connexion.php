<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylec.css">
    <link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Major+Mono+Display&family=Press+Start+2P&family=Roboto:wght@300&family=VT323&family=Wallpoet&display=swap" rel="stylesheet">  
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href=".\assets\connexion.css">
       
        
        <script src="/ressources/js/header.js" defer></script>
        <script src="/ressources/js/three_deep_travel_project/three.js" type="module" defer></script>
        <script src="/ressources/js/acceuilThreeJs.js" type="module" defer></script>
    <title>connection formulaire</title>
</head>
<body>

<!-- ________________________________________________________sidebar______________________________________________ -->

        <div id="mySidenav" class="sidenav">
            <div id="header-sidenav">
                <i id="close-btn" class="fa fa-lightbulb fa-xmark fa-3x" aria-hidden="true"></i>
            </div>
            <nav id="sidenav-links">
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="accueil.php">Acceuil</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="destination.php">Destinations</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="lesVaisseaux.php">Nos vaisseaux</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="vieAbord.php">Vie à bord</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="information.php">Informations</a>
                </div>

                <div>
                    <div class="sidenav-link">
                        <i id="i-login" class="fa fa-chevron-right" aria-hidden="true"></i><a id="drop-link-login">Compte</a>
                    </div>

                    <div id="dropdown-log" class="dropdown">
                        <div class="dropdown-link d-flex">
                            <i class="fa-solid fa-circle fa-2xs"></i><a class="" href="connexion.php">Connexion</a>
                        </div>
                        <div class="dropdown-link d-flex">
                            <i class="fa-solid fa-circle fa-2xs"></i><a class="" href="connexion.php">Mon compte</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="sidenav-link">
                        <i id="i-langue" class="fa fa-chevron-right" aria-hidden="true"></i><a id="drop-link-langue" class="">Langue</a>
                    </div>

                    <div id="dropdown-langue" class="dropdown">
                        <div class="dropdown-link d-flex">
                            <img class="" src="/assets/img/france.png" alt=""></img><a class="" href="">Français</a>
                        </div>
                        <div class="dropdown-link d-flex">
                            <img class="" src="/assets/img/united-kingdom.png" alt=""><a class="" href="">English</a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>

<!-- ______________________________________________________header_____________________________________________________ -->

        <header>
            <img class="logo links" src="/assets/img/logoDetoureComp.png" alt="">
            <nav>
                <a href="accueil.php" >Acceuil</a>
                <a href="destination.php">Destinations</a>
                <a href="lesVaisseaux.php">Nos vaisseaux</a>
                <a href="vieAbord.php">Vie à bord</a>
                <a href="information.php">Informations</a>
            </nav>
            <div id="icons-login-language">
                <div>
                    <i id="login-icon" class="fa-solid fa-user-astronaut fa-xl links"></i>
                    <div id="dropdown-login" class="d-none">
                        <div class="dropdown-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="connexion.php">Connexion</a>
                        </div>
                        <div class="dropdown-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="connexion.php">Mon Compte</a>
                        </div>
                    </div>
                </div>
                <div>
                    <i id="langue-icon" class="fa-solid fa-earth-oceania fa-xl links"></i>
                    <div id="dropdown-language" class="d-none">
                        <img class="links" src="/assets/img/france.png" alt=""></img>
                        <img class="links" src="/assets/img/united-kingdom.png" alt=""></img>
                    </div>
                </div>
            </div>
            <div id="icon-burger">
                <i id="btn-burger" class="fa fa-bars fa-2x links" aria-hidden="true"></i>
            </div>
        </header>

    <div class="container">
        <!-- login form -->
        <div class="login-wrap active">
            <div class="title">
                <h1>connexion</h1>
            </div>

            <form action="#">
                <div class="input-area">
                    <input type="email" id="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" required>
                    <label for="password">mot de passe</label>
                </div>

                <div class="forgot-pass">
                    <a href="#">Mot de passe oublie ?</a>
                </div>

                <div class="button-area">
                    <button type="submit" class="login-btn">connexion </button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Vous n'êtes pas membre ? <span id="toggle-signup">S'inscrire maintenant</span></p>
            </div>
        </div>

        <!-- signup form -->
        <div class="signup-wrap">
            <div class="title">
                <h1>S'inscrire</h1>
            </div>

            <form action="#">
                <div class="input-area">
                    <input type="text" id="name" autocomplete="off" required>
                    <label for="name">nom</label>
                </div>

                <div class="input-area">
                    <input type="email" id="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" required>
                    <label for="password">mot de passe </label>
                </div>

                <div class="button-area">
                    <button type="submit" class="signup-btn">S'inscrire</button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Vous avez un compte ? <span id="toggle-login">Se connecter maintenant</span></p>
            </div>
        </div>
    </div>

    <script src="css/scriptc.js"></script>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col col-lg-2">
                    <h4 style="color:rgb(244, 7, 7);margin: 20px;">Deep Travel</h4>
                    <ul>
                        <li><a href="#">Horaire d'ouverture</a></li>
                        <li><a href="#">Numero de telephone</a></li>
                        <li><a href="#">Adresse</a></li>
                        <li><a href="#">Email</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-2">
                    <h4 style="color:rgb(244, 7, 7)">plan du site</h4>
                    <img id="plan" class="img1" src="/assets\img/ParkMap_July_wGateway_2022.jpg" alt="plan" style="margin:2px;"></a></li>
                </div>
                <div class="footer-col col-lg-2">
                    <h4 style="color:rgb(244, 7, 7)">Nom des vaisseaux</h4>
                    <ul>
                        <li><a href="#">Arcadia</a></li>
                        <li><a href="#">Serinity</a></li>
                        <li><a href="#">Avalon</a></li>
                        <li><a href="#">Moya</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-2">
                    <h4 style="color:rgb(244, 7, 7)">les voyages</h4>
                    <ul>
                        <li><a href="#">Lune</a></li>
                        <li><a href="#">Mars</a></li>
                        <li><a href="#">Mercure</a></li>
                        <li><a href="#">Venus</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-2">
                    <h4 style="color:rgb(244, 7, 7)">information legal</h4>
                    <ul>
                        <li><a href="#">RGPD</a></li>
                        <li><a href="#">CVG</a></li>
                        <li><a href="#">MENTION LEGAL</a></li>
                    </ul>
                </div>
                <div class="footer-colc col-lg-2">
                    <h4 style="color:rgb(244, 7, 7)">carte de paiement accepter</h4>
                    <ul>
                       <li><a href="#"><img src="/assets\img/moyens-paiements.png" alt="img1"></a></li>
                    </ul>
                    <div class="footer-col ">
                        <h4 style="color:rgb(244, 7, 7)">reseaux sociaux</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
            <div class="footer-bottom">
                <div class="row justify-content-between">
                    <div class="col-md-6 my-auto">
                        <p class="copyright-footer">©Copyright Deep Travel 2022</p>
                    </div>
                </div>                                                                
            </div>
    </body>
</html>


