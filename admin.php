<?php 

include_once './partial/header.php';
?>

<?php
include_once './repository/MainRepository.php';
$connect = new MainRepository;
var_dump($connect->testFind());


include_once './models/User.php';
$user = new User();
$user->setFirstname($_POST['firstname']);
$user->setLastname($_POST['lastname']);
$user->setAddress($_POST['address']);
$user->setEmail($_POST['email']);
$user->setPhone($_POST['phone']);
$user->setMedicalCertificat($_POST['medicalCertificat']);
$user->setDob($_POST['dob']);
$user->setPass($_POST['pass']);
var_dump($user);
?>

<div class="container">
    <label style="color: white" class="mt-2" for="add-data">Choisissez du contenu à ajouter</label>
    <select class="form-select" name="add-data" id="">
        <option value="">Utilisateur</option>
        <option value="">Activité</option>
        <option value="">Destination</option>
        <option value="">Vaisseaux</option>
        <option value="">Photo</option>
    </select>

    <form class="mt-5" action="" method="post">
        <div>
            <label style="color: white" for="firstname">Prénom :</label>
            <input class="form-control" type="text" name="firstname" id="firstname" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="lastname">Nom :</label>
            <input class="form-control" type="text" name="lastname" id="lastname"required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="address">Adresse :</label>
            <input class="form-control" type="text" name="address" id="address"required> 
        </div>
        <div class="mt-2">
            <label style="color: white" for="email">Email :</label>
            <input class="form-control" type="email" name="email" id="email" required> 
        </div>
        <div class="mt-2">
            <label style="color: white" for="phone">Téléphone :</label>
            <input class="form-control" type="tel" name="phone" id="phone" required> 
        </div>
        <div class="mt-2">
            <label style="color: white" for="medicalCertificat">Certificat Médical :</label>
            <input class="form-control" type="file" name="medicalCertificat" id="medicalCertificat" required>
        </div>
        <div>
            <label style="color: white" for="dob">Date de Naissance :</label>
            <input class="form-control" type="date" name="dob" id="dob" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="firstname">Mot de Passe :</label>
            <input class="form-control" type="password" name="pass" id="pass" required> 
        </div">
        <div class="mt-2">
            <label style="color: white" for="firstname">Confirmez le mot de Passe :</label>
            <input class="form-control" type="password" name="pass" id="pass" required> 
        </div>
        <div class="mt-2">
            <input class="success"type="submit" value="Valider">
        </div>
</form>

</div>




<?php 

include_once './partial/footer.php'

?>