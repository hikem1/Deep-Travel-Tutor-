<?php
require '../vendor/autoload.php';

use App\repository\UserRepository;

$userRepo = new UserRepository();
$usersCount = $userRepo->getDataCount();


$paginator = new Nette\Utils\Paginator;
$paginator->setItemCount($usersCount);
$paginator->setItemsPerPage(6);
$paginator->setPage(38);

var_dump($paginator->getPageCount());
$users = $userRepo->findAll($paginator->getLength(), $paginator->getOffset());
var_dump($users);