<?php
    if(isset($_GET) && !empty($_GET)){
        if(isset($_GET['id']) && (int)$_GET['id']) {
            $id = $_GET['id'];
        }else {
            $error = 'id manquant ou non valide';
        }
    }
    else{
        $error = 'veuillez contacter votre administrateur';
        header('location: ../ErrorPage.php');
    }

