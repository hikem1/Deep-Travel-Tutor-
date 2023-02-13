let loginFormCont = document.querySelector('#login-wrap');
let signUpFormCont = document.querySelector('#signup-wrap');
let title = document.querySelector('title');

let signupToggleBtn = document.querySelector('#toggle-signup');
let loginToggleBtn = document.querySelector('#toggle-login');

let signUpForm = document.querySelector('#sign-up-form');
let passConfirmInput = document.querySelector('#pass-confirm');
let passInput = document.querySelector('#password-signup');
let signUpBtn = document.querySelector('#signup-btn');
let passLabelConfirm = document.querySelector('#pass-confirm-label');




signupToggleBtn.onclick = () => {
    signUpFormCont.classList.add('active-input');
    loginFormCont.classList.remove('active-input');

}

loginToggleBtn.onclick = () => {
    signUpFormCont.classList.remove('active-input');
    loginFormCont.classList.add('active-input');
}

signUpBtn.addEventListener('click', () => {
    if(passConfirmInput.value === passInput.value && passInput.value != ''){
        signUpForm.submit();
    }
    else{
        passLabelConfirm.textContent = ' Vos mots de passe sont différents !'
        passLabelConfirm.style.color = 'red';
    }
})

if(signUpForm.getAttribute('validity') === 'valid'){
    loginFormCont.classList.add('active-input');
    signUpFormCont.classList.remove('active-input');
} else{
    signUpFormCont.classList.add('active-input');
    loginFormCont.classList.remove('active-input');
}


