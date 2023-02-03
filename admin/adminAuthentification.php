<?php
session_start();

if(empty($_SESSION) || $_SESSION['role'] != 'ROLE_ADMIN'){
    header('location: /login.php');
}

