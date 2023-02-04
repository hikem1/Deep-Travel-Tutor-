<?php
namespace App\repository;

use App\models\Session;
use \PDO;
class SessionRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Session::class);
    }

}