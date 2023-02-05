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
    <h1 class="title copperplate white mt-5">Details utilisateur :</h1>



    <div class="account-card mt-5">
        <div class="account-card-header">
            <div class="account-img">
            </div>
        </div>
        <div class="account-title">
            <h5 class="title mt-3 text-center"><?= $user->getEmail() ?></h5>
        </div>
        <div class="account-body mt-3 p-2">
            <div class="block-body">
                <span>informations</span><i class="fa-solid fa-chevron-down my-auto"></i>
            </div>
            <div class="collapse-information mt-1">
                <div>
                    <span>nom :</span>
                    <span><?= $user->getLastname() ?></span>
                </div>
                <div>
                    <span>prénom :</span>
                    <span><?= $user->getFirstname() ?></span>
                </div>
                <div>
                    <span>date de naissance :</span>
                    <span><?= $user->getDob() ?></span>
                </div>
                <div>
                    <span>role :</span>
                    <span><?= $user->getRole() ?></span>
                </div>
            </div>
            <div class="block-body">
                <span>contact</span><i class="fa-solid fa-chevron-down my-auto"></i>
            </div>
            <div class="collapse-contact mt-1">
                <div>
                    <span>adresse :</span>
                    <span><?= $user->getAddress() ?></span>
                </div>
                <div>
                    <span>tél :</span>
                    <span><?= $user->getPhone() ?></span>
                </div>
                <div>
                    <span>certificat :</span>
                    <span><?= $user->getMedicalCertificat() ?></span>
                </div>
            </div>
        </div>

        <div class="account-footer mt-3">
            <div class="d-flex flex-row w-100">
                <a class="action-icon bg-blue" href="./user_update.php?id=<?= $user->getId() ?>"><i class="fa-solid fa-pen fa-l"></i></a>
                <a id="" user="<?= $user->getId() ?>" href="" class="action-icon bg-red delete-btn mx-3" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-trash fa-l"></i></a>
            </div>
            <div>
                <i class="fa-solid fa-money-check-dollar fa-xl"></i>
            </div>
        </div>

</div>




    <div class="d-flex bg-grey border-dark justify-content-between text-light my-5 p-3 rounded">
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
            <div class="d-flex">

            </div>
        </div>
    </div>
    <h2 class="text-center white copperplate">Commandes : </h2>

    <?php foreach($orders as $order){?>
    <table class="mt-4">
        <thead class="copperplate">
        <tr>
            <th>N° Commande</th>
            <th>N° ticket</th>
            <th>Date session</th>
            <th>Destination</th>
            <th>Prix total</th>
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
                    <td><?= $totalOrder <= 0 ? $order->getId() : '' ?></td>
                    <td><?= $ticket->getId() ?></td>
                    <td><?= $session->getDate() ?></td>
                    <td><?= $destination->getName() ?></td>
                    <td class="text-end"><?= $destination->getUnitPrice() . ' €' ?></td>
                <tr>
                </tr>
            <?php
                $totalOrder += $destination->getUnitPrice();
            }?>

            <tr>
                <td class="text-end" colspan="5">Total commande : <?= $totalOrder . ' €';?></td>
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