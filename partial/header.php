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
        <script src="/ressources/js/header.js" defer></script>
        <link rel="stylesheet" href="/assets/footer.css">
        <?='<link rel="stylesheet" href="/assets/'.$page.'.css">'?>

        <?php if($page === 'acceuil'){?>
                <script src="/ressources/js/three_deep_travel_project/three.js" type="module" defer></script>
                <script src="/ressources/js/acceuilThreeJs.js" type="module" defer></script>
        <?php }?>

        <title>Deep Travel</title>
    </head>
    <body>

<!-- ________________________________________________________sidebar______________________________________________ -->

        <div id="mySidenav" class="sidenav">
            <div id="header-sidenav">
                <a href="accueil.php"><img class="logo" src="/assets/img/logoDetoureComp.png" alt=""></a>
                <i id="close-btn" class="fa fa-lightbulb fa-xmark fa-3x icon" aria-hidden="true"></i>
            </div>
            <nav id="sidenav-links">
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a class="links" href="accueil.php">Acceuil</a>
                </div>
                <div class="">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <a class="menu-link links" id="dropdownMenuButtonNav" data-bs-toggle="dropdown" ">Destinations</a>
                    <div id="dropdown-sideNav" class="d-none">
                        <ul class="bg-black p-3" aria-labelledby="dropdownMenuButtonNav">
                            <li class="p-2"><a class="text-white links" href="lune.php">Lune</a></li>
                            <li class="p-2"><a class="text-white links" href="venus.php">Venus</a></li>
                            <li class="p-2"><a class="text-white links" href="mars.php">Mars</a></li>
                            <li class="p-2"><a class="text-white links" href="mercure.php">Mercure</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a class="links" href="lesVaisseaux.php">Nos vaisseaux</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a class="links" href="vieAbord.php">Vie à bord</a>
                </div>
                <div class="sidenav-link"><i class="fa fa-chevron-right" aria-hidden="true"></i><a class="links" href="information.php">Informations</a>
                </div>

                <div>
                    <div class="sidenav-link">
                        <i id="i-login" class="fa fa-chevron-right" aria-hidden="true"></i><a class="links" href="login.php" id="drop-link-login">Connexion</a>
                    </div>
                </div>
            </nav>
        </div>

<!-- ______________________________________________________header_____________________________________________________ -->

        <header>
            <a href="accueil.php"><img class="logo icon" src="/assets/img/logoDetoureComp.png" alt=""></a>
            <nav>
                <a class="menu-link" href="accueil.php" >Acceuil</a>
                <a class="menu-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" ">Destinations</a>
                <div class="dropdown">
                    <ul class="dropdown-menu bg-black border border-dark" aria-labelledby="dropdownMenuButton1">
                        <li class="p-2"><a class="text-white links" href="lune.php">Lune</a></li>
                        <li class="p-2"><a class="text-white links" href="venus.php">Venus</a></li>
                        <li class="p-2"><a class="text-white links" href="mars.php">Mars</a></li>
                        <li class="p-2"><a class="text-white links" href="mercure.php">Mercure</a></li>
                    </ul>
                </div>
                <a class="menu-link" href="lesVaisseaux.php">Nos vaisseaux</a>
                <a class="menu-link" href="vieAbord.php">Vie à bord</a>
                <a class="menu-link" href="information.php">Informations</a>
            </nav>
            <div id="icon-login">
                <div>
                    <a href="login.php"><i id="login-icon" class="fa-solid fa-user-astronaut fa-xl icon"></i></a>
                </div>
            </div>
            <div id="icon-burger">
                <i id="btn-burger" class="fa fa-bars fa-2x icon" aria-hidden="true"></i>
            </div>
        </header>

