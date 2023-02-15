<?php
require_once './adminAuthentification.php';

$page = 'admin';
include_once '../partial/header.php';
?>

<div class="admin-container my-5">
    <h1 class="title copperplate white">Tableau de bord : </h1>
    <table class="mt-5">
        <thead class="copperplate">
            <tr>
                <th>Catégorie</th>
                <th class="text-center w-25">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Utilisateur</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue" href="./user/user_index.php"><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue" href="./user/user_add.php"><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Destination</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue"href=""><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue"href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Vaisseaux</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue"href=""><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue"href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Activités</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue"href=""><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue"href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Sessions</td>
                <td  class="d-flex"><a class="m-auto action-icon bg-blue"href="./session/session_index.php"><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue" href="./session/session_add.php"><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Commande</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue"href=""><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue"href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
            <tr>
                <td>Media</td>
                <td class="d-flex"><a class="m-auto action-icon bg-blue"href=""><i class="fa-solid fa-eye fa-xl"></i></a><a class="m-auto action-icon bg-blue"href=""><i class="fa-sharp fa-solid fa-circle-plus fa-xl"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>







<?php

include_once '../partial/footer.php'

?>