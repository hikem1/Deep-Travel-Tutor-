<?php
session_start();
require 'vendor/autoload.php';

use App\models\User;
use App\repository\UserRepository;
$className = (new \ReflectionClass(new User()))->getShortName();


if(isset($_POST)){
    if(isset($_POST['action']) && !empty($_POST['action'])){
        if($_POST['action'] === 'signIn'){
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $login = $_POST['email'];
                $password = $_POST['password'];
                $userRepo = new UserRepository();
                $usersObject = $userRepo->findAll();

                foreach($usersObject as $user){

                    if($user->getEmail() === $login && password_verify($password,$user->getPass())){
                        $_SESSION['login'] = $login;
                        $_SESSION['password'] = $user->getPass();
                        $_SESSION['role'] = $user->getRole();
                        header('location: accueil.php');

                    } else {
                        $ErrorSignIn = 'utilisateur ou password inconnu';
                    }
                }
            }
            else {
                $ErrorSignIn = 'post est vide ou pas totalement renseigné';
            }
        }
        elseif ($_POST['action'] === 'signUp'){
            if($_POST['pass'] === $_POST['pass-confirm']){
                $userRepo = new UserRepository();
                if(!$userRepo->findIfExist($_POST['email'])){
                    $newUser = new User();
                    $newUser->setEmail($_POST['email']);
                    $newUser->setPass($_POST['pass']);
                    $_POST =[];

                    $userRepo->addUser($newUser);
                    header('location: ./login.php');
                }
                else{
                    $ErrorSignUp = 'Cet utilisateur existe déjà !';
                }
            }
        }
    }
}

$page ='login';
include_once './partial/header.php';
?>

<div class="cont">
    <div class="form-cont mt-5">
        <!-- login form -->
        <div id="login-wrap">
            <div class="title">
                <h1>Connexion</h1>
            </div>

            <form method="post" action="">

                <input type="hidden" name="action" value="signIn">
                <?= isset($ErrorSignIn) ? '<p class="text-danger text-center">' . $ErrorSignIn . '</p>' : '' ?>
                <div class="input-area">
                    <input type="email" id="email" name="email" autocomplete="on" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password-login" name="password" required>
                    <label for="password">Mot de passe</label>

                </div>

                <div class="forgot-pass">
                    <a href="#">Mot de passe oublié ?</a>
                </div>

                <div class="button-area">
                    <button type="submit" class="login-btn">Se connecter</button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Pas encore membre ? <span id="toggle-signup">S'enregister</span></p>
            </div>
        </div>

        <!-- signup form -->

        <div id="signup-wrap">
            <div class="title">
                <h1>Inscription</h1>
            </div>
            <form <?= isset($ErrorSignUp) ? 'validity="invalid"' : 'validity="valid"' ?> id="sign-up-form" method="post" action="#">

                <input type="hidden" name="action" value="signUp">

                <?= isset($ErrorSignUp) ? '<p class="text-danger text-center">' . $ErrorSignUp . '</p>' : '' ?>
                <div class="input-area">
                    <input type="email" id="email-signup" name="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password-signup" name="pass" required>
                    <label for="password">Mot de passe</label>
                </div>

                <div class="input-area">
                    <input type="password" id="pass-confirm" name="pass-confirm" required>
                    <label id="pass-confirm-label" for="pass-confirm">Confirmation mot de passe</label>
                </div>

            </form>
            <div class="button-area">
                <button id="signup-btn" class="signup-btn">Inscription</button>
            </div>

            <div class="form-toggle-area">
                <p>Déjà un compte ? <span id="toggle-login">Se connecter</span></p>
            </div>
        </div>
    </div>

</div>

<?php
include_once './partial/footer.php';
?>
