const sectionTitleCard = document.querySelectorAll('.block-body');
const iconSectionTitleCard = document.querySelectorAll('.block-body i');

sectionTitleCard.forEach((value, key) =>{

    sectionTitleCard[key].addEventListener('click', ()=> {

        sectionTitleCard[key].nextElementSibling.classList.toggle('show-block-card');
        iconSectionTitleCard[key].classList.toggle('fa-rotate-180');

    })

})
