<div class="container gridCont" >
    <div id="<?= $destinations[$i]->getName()?>" class="carousel slide <?= ($i%2 == 1) ? 'carousel-right-side' : 'carousel-left-side'?>" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#<?= $destinations[$i]->getName()?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#<?= $destinations[$i]->getName()?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#<?= $destinations[$i]->getName()?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/lune/ComputerHotline_-_Sud-lune_(by).jpg" class="position-absolute h-65" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Distance Terre <?= $destinations[$i]->getName()?></h5>
                    <p class="text-center"><?= $destinations[$i]->getDistance()?> km</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/lune/surface-lune-seismes.jpeg" class="position-absolute h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Durée du voyage</h5>
                    <p class="text-center"><?= $destinations[$i]->getTripDuration()?> ms</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/lune/natural-moon-half-moon-night-preview.jpg" class="position-absolute h-100 left-70" alt="...">
                <img src="./assets/img/spaceships/moon-spaceship.png" class="position-absolute w-25 top-40 left-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vaisseaux "Moya"</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#<?= $destinations[$i]->getName()?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?= $destinations[$i]->getName()?>" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h2 class="title <?= ($i%2 == 1) ? 'title-left' : 'title-right'?>">" <?= $destinations[$i]->getName()?> "</h2>
    <div class="info vaisseaux <?= ($i%2 == 1) ? 'vaisseaux-left' : 'vaisseaux-right'?>">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus molestias sequi ducimus enim exercitationem corporis ratione corrupti aliquid obcaecati, minima, rerum sed voluptatibus atque voluptatum nesciunt labore assumenda iste officia ipsum! Nobis non officia illo, ex voluptatibus rem cum reprehenderit aliquid, impedit consectetur magni veniam architecto sint laboriosam iure assumenda.</p>
        <a class="link-left" href="#">Le vaisseaux</a>
    </div>
    <div class="info activities <?= ($i%2 == 1) ? 'activities-left' : 'activities-right'?>">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus molestias sequi ducimus enim exercitationem corporis ratione corrupti aliquid obcaecati, minima, rerum sed voluptatibus atque voluptatum nesciunt labore assumenda iste officia ipsum! Nobis non officia illo, ex voluptatibus rem cum reprehenderit aliquid, impedit consectetur magni veniam architecto sint laboriosam iure assumenda.</p>
        <a class="link-right" href="#">Les activités</a>
    </div>
    <div class="table <?= ($i%2 == 1) ? 'table-reservation-left' : 'table-reservation-right'?>">
        <table>
            <thead>
                <tr>
                    <th>Date session</th>
                    <th>Places disponible</th>
                    <th>Tarifs / pers.</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>24/12/2022</th>
                    <th>0</th>
                    <th><?= $destinations[$i]->getUnitPrice()?> €</th>
                    <th><a class="full" href="#">Complet</a></th>
                </tr>
                <tr>
                    <th>24/12/2022</th>
                    <th>167</th>
                    <th>8999 €</th>
                    <th><a href="#">Réserver</a></th>
                </tr>
                <tr>
                    <th>24/12/2022</th>
                    <th>230</th>
                    <th>8999 €</th>
                    <th><a href="#">Réserver</a></th>
                </tr>
                <tr>
                    <th>24/12/2022</th>
                    <th>230</th>
                    <th>8999 €</th>
                    <th><a href="#">Réserver</a></th>
                </tr>
                <tr>
                    <th>24/12/2022</th>
                    <th>230</th>
                    <th>8999 €</th>
                    <th><a href="#">Réserver</a></th>
                </tr>
            </tbody>
        </table>
    </div>
</div>