<div class="table-res <?= ($destinationObject->getId()%2 == 1) ? 'table-reservation-left' : 'table-reservation-right'?>">
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
            <th><?= $destinationObject->getUnitPrice()?> €</th>
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