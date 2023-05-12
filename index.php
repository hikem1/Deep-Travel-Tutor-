<?php
session_start();
require 'vendor/autoload.php';


$page = 'accueil';
include './partial/header.php';
?>
<section id="planet-view">
    <div id="info">
        <div class="left-side">
            <i id='homeIcon' class="fa-solid fa-house fa-2xl"></i>
        </div>
        <div class="card-container" style="display: flex">
            <div class="card-header">
                <h1></h1>
                <span></span>
            </div>
            <div class="card-body">
                <p></p>
                <a href="#">Détails</a>
            </div>
            <div class="card-footer">
                <div class="countdown">
                    <i class="fa-solid fa-hourglass-half fa-2xl"></i>
                    <div>
                        <p>Prochain décolage dans : </p>
                        <h2></h2>
                    </div>
                </div>
                <div class="capacity">
                    <i class="fa-solid fa-shuttle-space fa-2xl"></i>
                    <div class="capacity-state">
                        <p>Place disponibles : </p>
                        <div id="progress-bar">
                            <div id="capacity-progress-bar">
                                <span><span id="reserved-place"></span>78 / <span id="starship-capacity"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

include './partial/footer.php';
?>