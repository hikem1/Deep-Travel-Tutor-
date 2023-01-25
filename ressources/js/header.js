'use strict';

// ____________________________________________________________________________ header & sidenav




// ____________________________________________________________________________ variables

const headerNavA = document.querySelectorAll('header nav a');
const headerLogo = document.querySelector('header img');
const btnBurger = document.querySelector('#btn-burger');
const mySidenav = document.querySelector('#mySidenav');
const closeBtn = document.querySelector('#close-btn');
const iLogin = document.querySelector('#icon-login');

// ____________________________________________________________________________ functions


function showSidebar() {

    mySidenav.style.width = '100%';
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

btnBurger.addEventListener('click', () => {

    showSidebar();

});

window.addEventListener('resize', () => {
    
    hideSidebar();

});

closeBtn.addEventListener('click', () =>{

    hideSidebar();

});





