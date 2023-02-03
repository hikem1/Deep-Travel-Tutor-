<?php
require_once './adminAuthentification.php';

$page = 'admin';
include_once '../partial/header.php';
?>

<div class="admin-container my-5">
    <h1 class="border-bottom copperplate white">Admin Panel : </h1>
    <table class="mt-5 copperplate">
        <tbody>
            <tr>
                <th>Utilisateur</th>
                <th class="text-center"><a href="./user/user_index.php"><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th class="text-center"><a class="m-auto" href="./user/user_add.php"><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Destination</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Vaisseaux</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Activités</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Sessions</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Commande</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
            <tr>
                <th>Media</th>
                <th  class="text-center"><a href=""><i class="fa-solid fa-eye fa-xl"></i></a></th>
                <th  class="text-center"><a href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></th>
            </tr>
        </tbody>
    </table>
</div>







<?php

include_once '../partial/footer.php'

?>