<div class="admin-container my-5">
    <a class="text-decoration-none text-light" href="./user_index.php"><i class="me-2 fa-sharp fa-solid fa-circle-chevron-left fa-xl"></i>Liste utilisateurs</a><br>
    <?php if(isset($newUserError)){?>
        <span class="text-danger"><?= $newUserError?></span>
    <?php }?>

    <form id="user-form" class="mt-5" action="" method="post">
        <div>
            <label style="color: white" for="firstname">Prénom :</label>
            <input <?= isset($user) ? 'value="' . $user->getFirstname() . '"' : ''?> class="form-control" type="text" name="firstname" id="firstname" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="lastname">Nom :</label>
            <input <?= isset($user) ? 'value="' . $user->getLastname() . '"' : ''?> class="form-control" type="text" name="lastname" id="lastname"required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="address">Adresse :</label>
            <input <?= isset($user) ? 'value="' . $user->getAddress() . '"' : ''?> class="form-control" type="text" name="address" id="address"required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="email">Email :</label>
            <input <?= isset($user) ? 'value="' . $user->getEmail() . '"' : ''?> class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="phone">Téléphone :</label>
            <input <?= isset($user) ? 'value="' . $user->getPhone() . '"' : ''?> class="form-control" type="tel" name="phone" id="phone" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="medicalCertificat">Certificat Médical :</label>
            <input <?= isset($user) ? 'value="' . $user->getMedicalCertificat() . '"' : ''?> class="form-control" type="file" name="medicalCertificat" id="medicalCertificat" >
        </div>
        <div>
            <label style="color: white" for="dob">Date de Naissance :</label>
            <input <?= isset($user) ? 'value="' . $user->getDob() . '"' : ''?> class="form-control" type="date" name="dob" id="dob" >
        </div>
        <?php if(!isset($user)){?>
            <div class="mt-2">
                <label style="color: white" for="pass">Mot de Passe :</label>
                <input class="form-control" type="password" name="pass" id="pass" required>
            </div">
            <div class="mt-2">
                <label style="color: white" for="pass-confirm">Confirmez le mot de Passe :</label>
                <input class="form-control" type="password" name="pass-confirm" id="pass-confirm" required>
            </div>
        <?php }?>
        <div class="mt-2">
            <label style="color: white" for="role"> <?= isset($user) ? 'Role : <span class="text-danger fw-bold">' . $user->getRole() . '</span>' : 'Role :' ?></label>
            <select class="form-select" type="text" name="role" id="role">

                <?php
                $roles = $userRepo->findRolesList();
                foreach ($roles as $role) {?>
                    <option
                    <?php
                        if(!isset($user) && $role['role'] === 'ROLE_USER'){
                            echo 'selected';
                        }elseif (isset($user) && $role['role'] === $user->getRole()){
                            echo 'selected';
                        }else{
                            echo '';
                        }?>><?= $role['role'] ?></option>
                <?php }?>
        </div>
        <div>
            <input <?= isset($user) ? 'type="hidden"': 'type="submit" class="btn btn-primary success mt-4"' ?> >
        </div>
    </form>
    <?php
    if(isset($user)){?>
        <button user="<?= $user->getId() ?>" id="submit-btn" class="btn btn-primary success mt-4" data-bs-toggle="modal" data-bs-target="#myModal">Modifier</button>
    <?php }?>
</div>
</div>