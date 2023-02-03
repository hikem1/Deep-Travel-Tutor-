<?php
session_start();
require 'vendor/autoload.php';

use App\models\User;
use App\repository\UserRepository;
$className = (new \ReflectionClass(new User()))->getShortName();
dump($className);
if(isset($_POST)){
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
                $message = 'vous etes connecté';
                header('location: accueil.php');


            } else {

                $message = 'utilisateur ou password inconnu';

            }

        }
    }
    else {
        $message = 'post est vide ou pas totalement renseigné';
    }
}

$page ='login';
include_once './partial/header.php';
?>

<div class="cont">
    <div class="form-cont mt-5">
        <!-- login form -->
        <div class="login-wrap active-input">
            <div class="title">
                <h1>Login</h1>
            </div>

            <form method="post" action="">
                <div class="input-area">
                    <input type="email" id="email" name="email" autocomplete="on" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                    
                </div>

                <div class="forgot-pass">
                    <a href="#">Forgot password?</a>
                </div>

                <div class="button-area">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Not a member? <span id="toggle-signup">Signup now</span></p>
            </div>
        </div>

        <!-- signup form -->

        <div class="signup-wrap">
            <div class="title">
                <h1>Signup</h1>
            </div>

            <form method="post" action="#">
                <div class="input-area">
                    <input type="text" id="name" name="name" autocomplete="off" required>
                    <label for="name">Name</label>
                    
                </div>

                <div class="input-area">
                    <input type="email" id="email" name="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="button-area">
                    <button type="submit" class="signup-btn">Signup</button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Have an account? <span id="toggle-login">Login now</span></p>
            </div>
        </div>
    </div>

    <script src="ressources/js/login.js"></script>
</div>

<?php
include_once './partial/footer.php';
?>
