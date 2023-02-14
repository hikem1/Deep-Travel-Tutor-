<?php
require_once '../adminAuthentification.php';
require_once '../getValidation.php';
require '../../vendor/autoload.php';

use App\repository\UserRepository;
$userRepo = new UserRepository();

$user = $userRepo->deleteOneById($id);
header('location: user_index.php');


