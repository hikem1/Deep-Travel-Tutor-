<?php
require_once '../adminAuthentification.php';
require_once '../getValidation.php';
require '../../vendor/autoload.php';

use App\models\User;
use App\repository\UserRepository;

$userRepo = new UserRepository();
$user = $userRepo->findOneById($id);

if(isset($_POST) && !empty($_POST)){
    if(($_POST['email'] != $user->getEmail() && !$userRepo->findIfExist($_POST['email'])) || $_POST['email'] === $user->getEmail()){
        $userToUpdate = new User();
        $userToUpdate->setId($id);
        $userToUpdate->setFirstname($_POST['firstname']);
        $userToUpdate->setLastname($_POST['lastname']);
        $userToUpdate->setAddress($_POST['address']);
        $userToUpdate->setEmail($_POST['email']);
        $userToUpdate->setPhone($_POST['phone']);
        $userToUpdate->setMedicalCertificat($_POST['medicalCertificat']);
        $userToUpdate->setDob($_POST['dob']);
        $userToUpdate->setRole($_POST['role']);
        $_POST =[];
        $userRepo->updateOneById($userToUpdate);
        header('location: user_index.php');
    }else{
        $userToUpdateError = 'Ce compte existe déjà !';
        }
}

$page = 'admin';
include_once '../../partial/header.php';
?>

<?php
include_once './user_formTemplate.php';
?>

<?php
$modalTextContent = 'Etes vous sur de vouloir modifier l\'Utilisateur N° ';
include_once '../../partial/modalConfirm.php';
?>

<?php
include_once '../../partial/footer.php'
?>