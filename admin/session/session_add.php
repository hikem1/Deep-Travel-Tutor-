<?php
require_once '../adminAuthentification.php';
require '../../vendor/autoload.php';

use App\models\Session;
use App\repository\SessionRepository;

$userRepo = new SessionRepository();

/*if(isset($_POST) && !empty($_POST)){
    if($_POST['pass'] === $_POST['pass-confirm']){
        if(!$userRepo->findIfExist($_POST['email'])){
            $newUser = new User();
            $newUser->setFirstname($_POST['firstname']);
            $newUser->setLastname($_POST['lastname']);
            $newUser->setAddress($_POST['address']);
            $newUser->setEmail($_POST['email']);
            $newUser->setPhone($_POST['phone']);
            $newUser->setMedicalCertificat($_POST['medicalCertificat']);
            $newUser->setDob($_POST['dob']);
            $newUser->setPass($_POST['pass']);
            $newUser->setRole($_POST['role']);
            $_POST =[];
            $userRepo->addUser($newUser);
            header('location: ./user_index.php');
        }
        else{
            $newUserError = 'Cet utilisateur existe déjà !';
        }
    }
    else{
        $newUserError = 'vos mot de passes ne correspondent pas !';
    }
}*/

$page = 'admin';
include_once '../../partial/header.php';
?>

<?php
include_once './session_formTemplate.php';
?>


<?php
include_once '../../partial/footer.php'
?>