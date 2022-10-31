'use strict';

////////////////////////////////window/////////////////////////////////////

window.addEventListener('resize', () => {
    
    hideSidebar();
    dropdownLogin.style.display = 'none';
    dropdownLanguage.style.display = 'none';
    
});








////////////////////////////////header/////////////////////////////////////

const loginIcon = document.getElementById('login-icon');
loginIcon.addEventListener('click', () =>{
    
    toggleLoginContent();

});

const langueIcon = document.getElementById('langue-icon');
langueIcon.addEventListener('click', () =>{

    toggleLangueContent();

});


const dropdownLogin = document.getElementById('dropdown-login');
dropdownLogin.style.display = 'none';

const connexionLink = dropdownLogin.children[0];
const myAccountLink = dropdownLogin.children[1];

connexionLink.addEventListener('click', () => {
    toggleLoginContent();
});

myAccountLink.addEventListener('click', () => {
    toggleLoginContent();
});

const dropdownLanguage = document.getElementById('dropdown-language');
dropdownLanguage.style.display = 'none';

const frenchFlagIcon = dropdownLanguage.children[0];
const EnglishFlagIcon = dropdownLanguage.children[1];
frenchFlagIcon.addEventListener('click', () => {
    toggleLangueContent();
});

EnglishFlagIcon.addEventListener('click', () => {
    toggleLangueContent();
});

const btnBurger = document.getElementById('btn-burger');
btnBurger.addEventListener('click', () =>{

    showSidebar();

});



function toggleLoginContent() {

    if (dropdownLogin.style.display === 'none') {
        dropdownLogin.style.display = 'flex';
        dropdownLanguage.style.display = 'none';

    } else {
        dropdownLogin.style.display = 'none';
    };
    
};

function toggleLangueContent() {

    if (dropdownLanguage.style.display === 'none') {
        dropdownLanguage.style.display = 'flex';
        dropdownLogin.style.display = 'none';
    } else {
        dropdownLanguage.style.display = 'none';
    };
    
};








////////////////////////////////sidenav/////////////////////////////////////

const mySidenav = document.getElementById('mySidenav');

const closeBtn = document.getElementById('close-btn');
closeBtn.addEventListener('click', () =>{

    hideSidebar();

});



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

