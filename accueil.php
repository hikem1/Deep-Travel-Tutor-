<?php
$page = 'acceuil';
include './partial/header.php';
?>
<section id="planet-view">
    <div id="info">
        <div class="left-side">
            <i id='homeIcon' class="fa-solid fa-house fa-2xl"></i>
        </div>
    

        <div class="card-container" style="display: flex">

            <div class="card-header">
            <h1>" La Lune "</h1>
            <span>Notre indispensable</span>
            </div>

            <div class="card-body">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus fugit eum reiciendis aspernatur veniam cum temporibus ex totam, dolorum praesentium maiores! Voluptas quibusdam laborum magni porro tempora voluptatibus non est doloremque, nemo delectus facere esse! Inventore vitae iste et reiciendis rem deleniti earum, eius necessitatibus, libero dolorum dicta, animi nobis?</p>
            <a href="#">Détails</a>
            </div>

            <div class="card-footer">
            <div class="countdown">
                <i class="fa-solid fa-hourglass-half fa-2xl"></i>
                <div>
                <p>Prochain décolage dans : </p>
                <h2>[ 23 Jours 11:14 Min. et 30 Sec. ]</h2>
                </div>
            </div>
            <div class="capacity">
                <i class="fa-solid fa-shuttle-space fa-2xl"></i>
                <div class="capacity-state">
                <p>Place disponibles : </p>
                <div id="progress-bar">
                    <div id="capacity-progress-bar">
                    <span><span id="reserved-place">76</span> / <span id="starship-capacity">157</span></span>
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