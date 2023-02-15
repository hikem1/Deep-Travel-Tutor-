<?php
require_once '../adminAuthentification.php';
require_once '../getValidation.php';
require '../../vendor/autoload.php';

use App\models\Session;
use App\repository\SessionRepository;

$sessionRepo = new SessionRepository();
$session = $sessionRepo->findSessionById($id);

if(isset($_POST) && !empty($_POST)){
    $sessionToUpdate = new Session();
    $sessionToUpdate->setId($id);
    $sessionToUpdate->setDestinationId($_POST['destination-id']);
    $sessionToUpdate->setSpaceshipId($_POST['spaceship-id']);
    $sessionToUpdate->setDate($_POST['date']);
    $_POST =[];
    $sessionToUpdate->updateOneById($sessionToUpdate);
    header('location: session_index.php');

}



$page = 'admin';
include_once '../../partial/header.php';
?>

<?php
include_once './session_formTemplate.php';
?>

<?php
$modalTextContent = 'Etes vous sur de vouloir modifier la session N° ';
include_once '../../partial/modalConfirm.php';
?>

<?php
include_once '../../partial/footer.php'
?>