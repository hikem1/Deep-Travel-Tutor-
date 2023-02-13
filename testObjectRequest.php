<?php
require 'vendor/autoload.php';

use App\models\Order;
use App\models\User;
use App\models\Ticket;
use App\repository\OrderRepository;
use App\repository\UserRepository;
use App\repository\TicketRepository;
use App\repository\SpaceShipRepository;

//require_once './src/repository/SessionRepository.php';
//require_once './src/repository/SpaceShipRepository.php';
//require_once './src/repository/DestinationRepository.php';
//require_once './src/repository/TicketRepository.php';
//require_once './src/repository/OrderRepository.php';
//require_once './src/repository/UserRepository.php';

//$sessionRepo = new SessionRepository();
$spaceShipRepo = new SpaceShipRepository();
$spaceShips = $spaceShipRepo->findAll();
var_dump($spaceShips);
//$destinationRepo = new DestinationRepository();
//$ticketRepo = new TicketRepository();
//$orderRepo = new OrderRepository();
//$userRepo = new UserRepository();

//$destination = $destinationRepo->findOneById(1);
//$spaceShip = $spaceShipRepo->findOneById($destination->getSpaceShipId());
//$sessions = $sessionRepo->findBy('destination_id',$destination->getId());
//$tickets = $ticketRepo->findBy('session_id',1);
//$user = $userRepo->findOneById(24);
//var_dump($destination);
//echo '<hr>';
//var_dump($spaceShip);
//echo '<hr>';
//var_dump($sessions);
//echo '<hr>';
//var_dump($tickets);


//foreach ($sessions as $session){
//    $session->setSpaceShip($spaceShipRepo->findOneById($session->getSpaceshipId()));
//    $session->setDestination($destinationRepo->findOneById($session->getDestinationId()));
//}
// add orders (100)
//for( $i = 0; $i < 100; $i++){
//
//    $ord = new Order();
//    $orderRepo->addOrder(random_int(2,100));
//}


// add tickets (300)
//for( $i = 0; $i < 300; $i++){
//
//
//    $ticketRepo->addTicket(random_int(1,100),random_int(1,21));
//}

