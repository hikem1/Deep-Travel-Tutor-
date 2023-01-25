<?php
include './partial/header.php';
?>

<?php
require_once './models/Destination.php';
require_once './repository/DestinationRepository.php';

$destinationsRepo = new DestinationRepository();
$destinations = $destinationsRepo->findAll();

for($i = 0; $i < count($destinations); $i++){
    include './partial/_destination-block.php';
}

?>

<?php
include './partial/footer.php';
?>