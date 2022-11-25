'use strict';

// ____________________________________________________________________________ header & sidenav




// ____________________________________________________________________________ variables

const headerNavA = document.querySelectorAll('header nav a');
const headerLogo = document.querySelector('header img');
const loginIcon = document.querySelector('#login-icon');
const langueIcon = document.querySelector('#langue-icon');
const dropdownLogin = document.querySelector('#dropdown-login');
const connexionLink = dropdownLogin.children[0];
const myAccountLink = dropdownLogin.children[1];
const dropdownLanguage = document.querySelector('#dropdown-language');
const frenchFlagIcon = dropdownLanguage.children[0];
const EnglishFlagIcon = dropdownLanguage.children[1];
const btnBurger = document.querySelector('#btn-burger');
const mySidenav = document.querySelector('#mySidenav');
const closeBtn = document.querySelector('#close-btn');
const clickableEl = document.querySelectorAll('links');
const dropLinkLogin = document.querySelector('#drop-link-login'); 
const dropLinkLangue = document.querySelector('#drop-link-langue');
const dropDownLog = document.querySelector('#dropdown-log');
const dropDownLangue = document.querySelector('#dropdown-langue');
const dropDown = document.querySelector('.dropdown');
const iLogin = document.querySelector('#i-login');
const iLangue = document.querySelector('#i-langue');

// ____________________________________________________________________________ functions

function toggleLoginContent() {

    dropdownLogin.classList.toggle('d-none');
    dropdownLanguage.classList.remove('d-flex');
    dropdownLanguage.classList.add('d-none');

};

function toggleLangueContent() {

    dropdownLanguage.classList.toggle('d-none');
    dropdownLanguage.classList.toggle('d-flex');
    dropdownLogin.classList.add('d-none');

    
};

function showSidebar() {

    mySidenav.style.width = '300px';
    closeBtn.style.opacity = '100';
    closeBtn.style.transitionDelay = '0.3s';
    btnBurger.style.display = 'none';

};

function hideSidebar() {

    mySidenav.style.width = '0';
    closeBtn.style.opacity = '0';
    closeBtn.style.transitionDelay = '0s';
    btnBurger.style.display = 'initial';

};

function toggleDropdownAndIcon(elementTodrop, iconToRotate) {

    if (elementTodrop.offsetHeight === 0) {

        elementTodrop.style.height = '80px';
        iconToRotate.style.transform = 'rotate(90deg)'

    } else {

        elementTodrop.style.height = '0';
        iconToRotate.style.transform = 'rotate(0deg)'

    };

};

function hideBorderBottomNavA() {

    headerNavA.forEach(element => {

        element.style.borderBottom = '';
    
    });
}



// ____________________________________________________________________________ events

headerLogo.addEventListener('click', () => {

    hideBorderBottomNavA();
    headerNavA[0].style.borderBottom = '0.5px solid white';
    
})

headerNavA.forEach(element => {


    element.addEventListener('click', () => {

        hideBorderBottomNavA();
        element.style.borderBottom = '0.5px solid white';

    });

});

dropLinkLogin.addEventListener('click', () => {

    toggleDropdownAndIcon(dropDownLog, iLogin);

});

dropLinkLangue.addEventListener('click', () => {

    toggleDropdownAndIcon(dropDownLangue, iLangue);

});

loginIcon.addEventListener('click', () => {
    
    toggleLoginContent();

});

langueIcon.addEventListener('click', () => {

    toggleLangueContent();

});

connexionLink.addEventListener('click', () => {

    toggleLoginContent();
});

myAccountLink.addEventListener('click', () => {

    toggleLoginContent();
});

frenchFlagIcon.addEventListener('click', () => {

    toggleLangueContent();
});

EnglishFlagIcon.addEventListener('click', () => {

    toggleLangueContent();

});

btnBurger.addEventListener('click', () => {

    showSidebar();

});

window.addEventListener('resize', () => {
    
    hideSidebar();
    dropdownLogin.classList.add('d-none');
    dropdownLanguage.classList.add('d-none');

    dropDownLog.style.height = '0';
    iLogin.style.transform = 'rotate(0deg)'

    dropDownLangue.style.height = '0';
    iLangue.style.transform = 'rotate(0deg)'

});

closeBtn.addEventListener('click', () =>{

    hideSidebar();
    dropDownLog.style.height = '0';
    iLogin.style.transform = 'rotate(0deg)'

    dropDownLangue.style.height = '0';
    iLangue.style.transform = 'rotate(0deg)'

});





