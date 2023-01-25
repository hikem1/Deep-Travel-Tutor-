

<body>
<?php
include_once './partial/header.php';
?>
<div class="cont">
    <div class="form-cont mt-5">
        <!-- login form -->
        <div class="login-wrap active-input">
            <div class="title">
                <h1>Login</h1>
            </div>

            <form action="#">
                <div class="input-area">
                    <input type="email" id="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" required>
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

            <form action="#">
                <div class="input-area">
                    <input type="text" id="name" autocomplete="off" required>
                    <label for="name">Name</label>
                </div>

                <div class="input-area">
                    <input type="email" id="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" required>
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

</body>
<?php
include_once './partial/footer.php';
?>
</html>