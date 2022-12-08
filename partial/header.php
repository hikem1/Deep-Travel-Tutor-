<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Major+Mono+Display&family=Press+Start+2P&family=Roboto:wght@300&family=VT323&family=Wallpoet&display=swap" rel="stylesheet">  
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/header.css">
        <link rel="stylesheet" href="/assets/footer.css">
        <link rel="stylesheet" href="/assets/destinations.css">
        
        <script src="/ressources/js/header.js" defer></script>
        <title>Deep Travel</title>
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

