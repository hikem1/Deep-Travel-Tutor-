// import  { gsap }  from '../gsap/index.js';

const infoDivEl = document.querySelector('#info');
const cardContainer = document.querySelector('#card');
const homeIconEl = document.querySelector('#homeIcon'); 

homeIconEl.addEventListener('click', ()=> {
    infoDivEl.style.backgroundImage = 'url("img_statique/captureAcceuilPlanet.png")';
    cardEffect('origin');
    console.log('click i');
})

cardContainer.addEventListener('click', ()=> {
    infoDivEl.style.backgroundImage = 'url("img_statique/capturePlanetSelected.png")';
    cardEffect('example');
    console.log('click card');
})


function cardEffect(planetName) {
    if(planetName != 'origin'){
      gsap.fromTo(".card-container", { opacity:0},{opacity:1,delay:2.1});
      gsap.fromTo("h1", { x:300},{x:0,delay:2.3});
      gsap.fromTo(".card-body", { opacity:0},{opacity:1,delay:2.7});
    }
    else{
      gsap.fromTo(".card-container", { opacity:1},{opacity:0,duration:0.5});
    }
  };