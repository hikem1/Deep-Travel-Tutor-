let loginForm = document.querySelector('.login-wrap');
let signupForm = document.querySelector('.signup-wrap');
let title = document.querySelector('title');

let signupToggleBtn = document.querySelector('#toggle-signup');
let loginToggleBtn = document.querySelector('#toggle-login');

signupToggleBtn.onclick = () => {
    loginForm.classList.remove('active-input');
    signupForm.classList.add('active-input');
}

loginToggleBtn.onclick = () => {
    signupForm.classList.remove('active-input');
    loginForm.classList.add('active-input');
}