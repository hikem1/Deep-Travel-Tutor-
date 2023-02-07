const sectionTitleCard = document.querySelectorAll('.block-body');
const iconSectionTitleCard = document.querySelectorAll('.block-body i');
const iconOrder = document.querySelector('#order-icon');
const panelOrder = document.querySelector('.order-container');
const iconLeftDrop = document.querySelector('.left-drop');

sectionTitleCard.forEach((value, key) =>{

    sectionTitleCard[key].addEventListener('click', ()=> {

        sectionTitleCard[key].nextElementSibling.classList.toggle('show-block-card');
        iconSectionTitleCard[key].classList.toggle('fa-rotate-180');

    })

})

iconOrder.addEventListener('click', ()=> {

    panelOrder.classList.toggle('show-order-container');

})

iconLeftDrop.addEventListener('click', ()=> {

    panelOrder.classList.toggle('show-order-container');

})
