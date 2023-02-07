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

<div class="admin-container my-5 col-lg-12">
    <a class="text-decoration-none text-light" href="./user_index.php"><i class="me-2 fa-sharp fa-solid fa-circle-chevron-left fa-xl"></i>Liste utilisateurs</a>
    <h1 class="title copperplate white mt-5">Details utilisateur :</h1>


    <div class="account-container mt-5 d-flex">
        <div class="account-card">
            <div class="account-card-header">
                <div class="account-img">
                </div>
                <div class="account-title">
                    <h5 class="title mt-3 text-center"><?= $user->getEmail() ?></h5>
                </div>
            </div>
            <div class="account-body ">
                <div class="block-body">
                    <span>informations</span><i class="fa-solid fa-chevron-down my-auto"></i>
                </div>
                <div class="collapse-information mt-1">
                    <div>
                        <span>nom :</span>
                        <span class="fw-bold white"><?= $user->getLastname() ?></span>
                    </div>
                    <div>
                        <span>prénom :</span>
                        <span class="fw-bold white"><?= $user->getFirstname() ?></span>
                    </div>
                    <div>
                        <span>date de naissance :</span>
                        <span class="fw-bold white"><?= $user->getDob() ?></span>
                    </div>
                    <div>
                        <span>role :</span>
                        <span class="fw-bold white"><?= $user->getRole() ?></span>
                    </div>
                </div>
                <div class="block-body">
                    <span>contact</span><i class="fa-solid fa-chevron-down my-auto"></i>
                </div>
                <div class="collapse-contact mt-1">
                    <div>
                        <span>adresse :</span>
                        <span class="fw-bold white"><?= $user->getAddress() ?></span>
                    </div>
                    <div>
                        <span>tél :</span>
                        <span class="fw-bold white"><?= $user->getPhone() ?></span>
                    </div>
                    <div>
                        <span>certificat :</span>
                        <span class="fw-bold white"><?= $user->getMedicalCertificat() ?></span>
                    </div>
                </div>
            </div>

            <div class="account-footer mt-3">
                <div class="d-flex flex-row w-100">
                    <a class="action-icon bg-blue" href="./user_update.php?id=<?= $user->getId() ?>"><i class="fa-solid fa-pen fa-l"></i></a>
                    <a id="" user="<?= $user->getId() ?>" href="" class="action-icon bg-red delete-btn mx-3" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-trash fa-l"></i></a>
                </div>
                <div class="position-relative">
                    <div class="badge-notification"><?= $orderRepo->getCountOrdersByUserId($user->getId())?></div>
                    <i id="order-icon" class="fa-solid fa-bag-shopping fa-2xl"></i>
                </div>
            </div>
        </div>
        <div class="order-container d-flex">
            <div class="order-content">

            </div>
            <div class="left-drop d-flex">
                <i class="fa-solid fa-chevron-left m-auto"></i>
            </div>
        </div>
    </div>
</div>
<?php
$modalTextContent = 'Etes vous sur de vouloir supprimer l\'Utilisateur N° ';
include_once '../../partial/modalConfirm.php'
?>

<?php
include_once '../../partial/footer.php'
?>