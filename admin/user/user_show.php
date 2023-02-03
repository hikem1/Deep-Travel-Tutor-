<?php
require_once '../adminAuthentification.php';
require_once '../getValidation.php';
require '../../vendor/autoload.php';

use App\repository\UserRepository;
use App\repository\OrderRepository;
use App\repository\TicketRepository;
use App\repository\DestinationRepository;
use App\repository\SessionRepository;

$userRepo = new UserRepository();
$orderRepo = new OrderRepository();
$ticketRepo = new TicketRepository();
$destinationRepo = new DestinationRepository();
$sessionRepo = new SessionRepository();

$user = $userRepo->findOneById($id);
$orders = $orderRepo->findByUserId($id);

$page = 'admin';
include_once '../../partial/header.php';
?>

<div class="admin-container my-5">
    <a class="text-decoration-none text-light" href="./user_index.php"><i class="me-2 fa-sharp fa-solid fa-circle-chevron-left fa-xl"></i>Liste utilisateurs</a>

    <div class="d-flex bg-black border border-dark justify-content-between text-light my-5 p-3 rounded">
        <div>
            <span class="copperplate border-bottom">Informations :</span>
            <p class="mt-5"><?= $user->getLastname() ?></p>
            <p><?= $user->getFirstname() ?></p>
            <p><?= $user->getEmail() ?></p>
            <p><?= $user->getRole() ?></p>
            <p><?= $user->getDob() ?></p>
        </div>
        <div>
            <span class="copperplate border-bottom"">Contact :</span>
            <p class="mt-5"><?= $user->getAddress() ?></p>
            <p><?= $user->getPhone() ?></p>
            <p><?= $user->getMedicalCertificat() ?></p>
        </div>
        <div class="d-flex flex-column justify-content-end">
            <div>
                <a class="btn btn-primary me-1" href="./user_update.php?id=<?= $user->getId() ?>"><i class="fa-solid fa-pen fa-lg"></i></a>
                <a id="" user="<?= $user->getId() ?>" class="btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-trash fa-xl"></i></a>
            </div>
        </div>
    </div>
    <h2 class="text-center white copperplate">Commandes : </h2>

    <?php foreach($orders as $order){?>
    <table class="mt-4">
        <thead>
        <tr>
            <th class="bg-dark">N° Commande</th>
            <th class="bg-dark">N° ticket</th>
            <th class="bg-dark">Date session</th>
            <th class="bg-dark">Destination</th>
            <th class="bg-dark text-end">Prix total</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $totalOrder = 0;
            $TotalTickets = $ticketRepo->countTicketsByOrderId($order->getId());
            $tickets = $ticketRepo->findByOrderId($order->getId());
            foreach ($tickets as $ticket) {
                $session = $sessionRepo->findOneById($ticket->getSessionId());
                $destination = $destinationRepo->findOneById($session->getDestinationId());
                ?>
                <tr>
                    <th><?= $totalOrder <= 0 ? $order->getId() : '' ?></th>
                    <th><?= $ticket->getId() ?></th>
                    <th><?= $session->getDate() ?></th>
                    <th><?= $destination->getName() ?></th>
                    <th class="text-end"><?= $destination->getUnitPrice() . ' €' ?></th>
                <tr>
                </tr>
            <?php
                $totalOrder += $destination->getUnitPrice();
            }?>

            <tr>
                <th class="bg-dark text-end" colspan="5">Total commande : <?= $totalOrder . ' €';?></th>
            </tr>

        <?php }?>
        </tbody>
    </table>
</div>

<?php
$modalTextContent = 'Etes vous sur de vouloir supprimer l\'Utilisateur N° ';
include_once '../../partial/modalConfirm.php'
?>

<?php
include_once '../../partial/footer.php'
?>