'use strict';



///////////////////////////// variables//////////////////////////////////

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






////////////////////////////////window/////////////////////////////////////

window.addEventListener('resize', () => {
    
    hideSidebar();
    dropdownLogin.style.display = 'none';
    dropdownLanguage.style.display = 'none';
    
});








////////////////////////////////header/////////////////////////////////////

loginIcon.addEventListener('click', () =>{
    
    toggleLoginContent();

});

langueIcon.addEventListener('click', () =>{

    toggleLangueContent();

});


dropdownLogin.style.display = 'none';


connexionLink.addEventListener('click', () => {
    toggleLoginContent();
});

myAccountLink.addEventListener('click', () => {
    toggleLoginContent();
});

dropdownLanguage.style.display = 'none';

frenchFlagIcon.addEventListener('click', () => {
    toggleLangueContent();
});

EnglishFlagIcon.addEventListener('click', () => {
    toggleLangueContent();
});

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

