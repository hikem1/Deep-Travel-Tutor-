<?php
require_once '../adminAuthentification.php';
require '../../vendor/autoload.php';
use App\repository\UserRepository;

$userRepo = new UserRepository();
$usersCount = $userRepo->getDataCount();


$paginator = new Nette\Utils\Paginator;
$paginator->setItemCount($usersCount);
$paginator->setItemsPerPage(10);

if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] <= $paginator->getPageCount()){
    $paginator->setPage($_GET['page']);
}else{
    $paginator->setPage(1);
}

$users = $userRepo->findAll($paginator->getLength(), $paginator->getOffset());

$page = 'admin';
include_once '../../partial/header.php';
?>
<div class="admin-container my-5">
    <a class="text-decoration-none text-light" href="../index.php"><i class="me-2 fa-sharp fa-solid fa-circle-chevron-left fa-xl"></i>Tableau de bord</a>
    <h1 class="title copperplate white mt-5">Utilisateurs : </h1>
    <table class="mt-5">
            <thead class="fs-6 copperplate ">
                <tr class="">
                    <th class="">Nom</th>
                    <th class="">Prénom</th>
                    <th class="">Email</th>
                    <th class="">Role</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($users as $user){?>
                <tr>
                    <td><?= $user->getLastname() ?></td>
                    <td><?= $user->getFirstname() ?></td>
                    <td><?= $user->getEmail() ?></td>
                    <td><?= $user->getRole() ?></td>
                    <td class="d-flex justify-content-center" >
                        <a class="action-icon bg-grey" href="./user_show.php?id=<?= $user->getId() ?>"><i id="login-icon" class="fa-solid fa-user-astronaut fa-sm"></i></a>
                        <a class="action-icon bg-blue mx-3" href="./user_update.php?id=<?= $user->getId() ?>"><i class="fa-solid fa-pen fa-xs"></i></a>
                        <a id="" user="<?= $user->getId() ?>" class="action-icon bg-red delete-btn" href="" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-trash fa-xs"></i></a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>

    <div class="d-flex justify-content-center pagination-cont">
        <?php if($paginator->getPageCount() > 1){?>
            <a class="action-icon bg-grey" href="user_index.php?page=<?= $paginator->getFirstPage() ?>"><i class="fa-solid fa-angles-left fa-lg"></i></a>
            <?php if($paginator->getPage() > 1){?>
                <a class="action-icon bg-grey" href="user_index.php?page=<?= $paginator->getPage() - 1 ?>"><?= $paginator->getPage() - 1 ?></a>
            <?php }?>
            <a class="border text-white action-icon bg-grey" href="user_index.php?page=<?= $paginator->getPage() ?>"><?= $paginator->getPage() ?></a>
            <?php if($paginator->getPage() < $paginator->getPageCount()){?>
                <a class="action-icon bg-grey" href="user_index.php?page=<?= $paginator->getPage() + 1 ?>"><?= $paginator->getPage() + 1 ?></a>
            <?php }?>
            <a class="action-icon bg-grey" href="user_index.php?page=<?=  $paginator->getPageCount() ?>"><i class="fa-solid fa-angles-right fa-lg"></i></a>
        <?php }?>
    </div>
</div>


<?php
$modalTextContent = 'Etes vous sur de vouloir supprimer l\'Utilisateur N° ';
include_once '../../partial/modalConfirm.php'
?>

<?php
include_once '../../partial/footer.php'
?>
