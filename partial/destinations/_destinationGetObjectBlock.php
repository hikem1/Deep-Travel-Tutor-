<?php
require_once './models/Destination.php';
require_once './repository/DestinationRepository.php';
$destinationRepo = new DestinationRepository();
$destinationObject = $destinationRepo->findByName($destination);