<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="assets/footer.css">
        <script src="header.js" defer></script>
        <title>Deep Travel</title>
    </head>
    <body>

<!-- ________________________________________________________sidebar______________________________________________ -->

        <div id="mySidenav" class="sidenav">
            <div id="header-sidenav">
                <i id="close-btn" class="fa fa-lightbulb fa-xmark fa-3x" aria-hidden="true"></i>
            </div>
            <nav id="sidenav-links">
                <div class="sidenav-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="">Acceuil</a>
                </div>
                <div class="sidenav-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a  href="">Destinations</a>
                </div>
                <div class="sidenav-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a  href="">Nos vaisseaux</a>
                </div>
                <div class="sidenav-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a  href="">Vie à bord</a>
                </div>
                <div class="sidenav-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a  href="">Informations</a>
                </div>

                <div>
                    <div class="sidenav-link links">
                        <i id="i-login" class="fa fa-chevron-right" aria-hidden="true"></i><a id="drop-link-login">Compte</a>
                    </div>

                    <div id="dropdown-log" class="dropdown">
                        <div class="dropdown-link d-flex links">
                            <i class="fa-solid fa-circle fa-2xs"></i><a class="" href="">Connexion</a>
                        </div>
                        <div class="dropdown-link d-flex links">
                            <i class="fa-solid fa-circle fa-2xs"></i><a class="" href="">Mon compte</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="sidenav-link links">
                        <i id="i-langue" class="fa fa-chevron-right" aria-hidden="true"></i><a id="drop-link-langue" class="">Langue</a>
                    </div>

                    <div id="dropdown-langue" class="dropdown">
                        <div class="dropdown-link d-flex links">
                            <img class="" src="assets/icon/france.png" alt=""></img><a class="" href="">Français</a>
                        </div>
                        <div class="dropdown-link d-flex links">
                            <img class="" src="assets/icon/united-kingdom.png" alt=""><a class="" href="">English</a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>

<!-- ______________________________________________________header_____________________________________________________ -->

        <header>
            <img class="logo links" src="/assets/img/logoDetoureComp.png" alt="">
            <nav>
                <a >Acceuil</a>
                <a >Destinations</a>
                <a >Nos vaisseaux</a>
                <a >Vie à bord</a>
                <a >Informations</a>
            </nav>
            <div id="icons-login-language">
                <div>
                    <i id="login-icon" class="fa-solid fa-user-astronaut fa-xl links"></i>
                    <div id="dropdown-login" class="d-none">
                        <div class="dropdown-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a>Connexion</a>
                        </div>
                        <div class="dropdown-link links"><i class="fa fa-chevron-right" aria-hidden="true"></i><a>Mon Compte</a>
                        </div>
                    </div>
                </div>
                <div>
                    <i id="langue-icon" class="fa-solid fa-earth-oceania fa-xl links"></i>
                    <div id="dropdown-language" class="d-none">
                        <img class="links" src="assets/icon/france.png" alt=""></img>
                        <img class="links" src="assets/icon/united-kingdom.png" alt=""></img>
                    </div>
                </div>
            </div>
            <div id="icon-burger">
                <i id="btn-burger" class="fa fa-bars fa-2x links" aria-hidden="true"></i>
            </div>
        </header>

