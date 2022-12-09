import  { gsap }  from './gsap-public/src/index.js';
import MouseMeshInteraction from './three_mmi/three_mmi.js';
import { scene, camera, renderer, moon, earth, venus, mars, mercure, createMoon, createEarth, createVenus, createMercure, createMars } from './three_deep_travel_project/three.js';
import cardPlanetText from './cardPlanetText.json' assert {type: 'json'};
import { toggleCountDown } from './countdown.js';

// ____________________________________________________________________________________________ HTML elements
const headerEl = document.querySelector('header');
const homeIconEl = document.querySelector('#homeIcon'); 
const infoDivEl = document.querySelector('#info');
const canvas = document.querySelector('canvas');
const titleCardEl = document.querySelector('.card-header h1');
const catchySubTitleCardEl = document.querySelector('.card-header span');
const presentationCardEl = document.querySelector('.card-body p');
const starShipCapacityCardEl = document.querySelector('.card-footer #starship-capacity');
const progressBarEl = document.querySelector('.card-footer #capacity-progress-bar');

// ____________________________________________________________________________________________ variables
const objectsScene = scene.children;
const headerHeight = headerEl.clientHeight; // à déduire ici et sur three_mmi.js ligne 222 la hauteur des éléments au dessus du canvas (-92.5) car le calcul se fait a partir du coin haut gauche du viewport
const mmi = new MouseMeshInteraction( scene, camera );
let reserved = 78;

// ____________________________________________________________________________________________ fonctions 


function cardPresentationContent(planetName){

  cardPlanetText.forEach( planet  => {

    if(planet.name === planetName){

      titleCardEl.textContent = '" '+ planet.Title + ' "';
      catchySubTitleCardEl.textContent = planet.catchySubTitle;
      presentationCardEl.textContent = planet.description;
      starShipCapacityCardEl.textContent = planet.travellersCapacity;
      gsap.fromTo("#capacity-progress-bar span", {autoAlpha:0},{autoAlpha:1,delay:3,});
      gsap.fromTo(progressBarEl,{width:'0%'},{width:(reserved / planet.travellersCapacity) * 100 + '%',delay:2.5,duration: 1, ease: "slow(0.1, 2, false)"})
      toggleCountDown(0);
      toggleCountDown(planet.nextStage);

    }

  })

}

function cardEffect(planetName) {

  if(planetName != 'origin'){

    infoDivEl.style.zIndex = 1;
    gsap.fromTo(".card-container", {autoAlpha:0},{autoAlpha:1,delay:2.1});
    gsap.fromTo("h1", {x:300},{x:0,delay:2.3});
    gsap.fromTo(".card-body", {autoAlpha:0},{autoAlpha:1,delay:2.7,});

  } else{

    gsap.fromTo(".card-container", {opacity:0},{autoAlpha:0,duration:2});

  }

}
// ____________________________________________________________________________________________ 3D fonctions
function planetPresentationVue(planetEl){

  gsap.to(camera.position,{
    x: planetEl.position.x + (planetEl.geometry.boundingSphere.radius * 1.3),
    y: planetEl.position.y,
    z: planetEl.position.z + (planetEl.geometry.boundingSphere.radius * 3),
    duration: 2,
    ease: "back.out(0.7)"
  })

}

function planetsLayoutOnStart() {

    if (window.innerWidth <= 1440 && window.innerWidth >= 969) {
  
        camera.position.x = 170,
        camera.position.y = -100,
        camera.position.z = 1300,
  
        earth.position.x = 170,
        earth.position.y = -200,
        earth.position.z = 1200
  
    }
    else if (window.innerWidth <= 970 && window.innerWidth >= 599) {
  
        camera.position.x = 170,
        camera.position.y = -100,
        camera.position.z = 1500,
  
        earth.position.x = 170,
        earth.position.y = -195,
        earth.position.z = 1450,
  
        mercure.position.x = 320,
        mercure.position.y = -120,
        mercure.position.z = 300,
  
        mars.position.x = 500,
        mars.position.y = 250,
        mars.position.z = 100,
  
        moon.position.x = -250,
        moon.position.y = 0,
        moon.position.z = 0
  
    }
    else if (window.innerWidth <= 600){
  
        camera.position.x = 170,
        camera.position.y = -100,
        camera.position.z = 1500,
  
        mercure.position.x = 200,
        mercure.position.y = -300,
        mercure.position.z = 300,
  
        mars.position.x = 300,
        mars.position.y = 150,
        mars.position.z = 100,
  
        moon.position.x = 0,
        moon.position.y = 300,
        moon.position.z = 0
  
    } else {
  
        camera.position.x = 0,
        camera.position.y = 0,
        camera.position.z = 1000,
  
        earth.position.x = -150,
        earth.position.y = 0,
        earth.position.z = 900,
  
        mercure.position.x = 320,
        mercure.position.y = -120,
        mercure.position.z = 300,
  
        mars.position.x = 500,
        mars.position.y = 250,
        mars.position.z = 100,
  
        moon.position.x = -250,
        moon.position.y = 0,
        moon.position.z = 0

    }
    renderer.setSize( window.innerWidth, (window.innerHeight - headerHeight) );
    camera.aspect = window.innerWidth / (window.innerHeight - headerHeight);
    camera.updateProjectionMatrix();
}

function planetsLayoutResponsive() {

  if (window.innerWidth <= 1440 && window.innerWidth >= 969) {

    gsap.to(camera.position,{
      x: 170,
      y: -100,
      z: 1300,
      duration: 1,
      ease: "back.out(0.5)"
    });

    gsap.to(earth.position,{
      x: 170,
      y: -200,
      z: 1200,
      duration: 3,
    })

  }
  else if (window.innerWidth <= 970 && window.innerWidth >= 599) {

    gsap.to(camera.position,{
      x: 170,
      y: -100,
      z: 1500,
      duration: 1,
      ease: "back.out(0.5)"
    });

    gsap.to(earth.position,{
      x: 170,
      y: -195,
      z: 1450,
      duration: 3,
    })

    gsap.to(mercure.position,{
      x: 320,
      y: -120,
      z: 300,
      duration: 1,
    })

    gsap.to(mars.position,{
      x: 500,
      y: 250,
      z: 100,
      duration: 1,
    })

    gsap.to(moon.position,{
      x: -250,
      y: 0,
      z: 0,
      duration: 1,
    })

  }
  else if (window.innerWidth <= 600){

    gsap.to(camera.position,{
      x: 170,
      y: -100,
      z: 1500,
      duration: 1,
      ease: "back.out(0.5)"
    });

    gsap.to(mercure.position,{
      x: 200,
      y: -300,
      z: 300,
      duration: 1,
    })

    gsap.to(mars.position,{
      x: 300,
      y: 150,
      z: 100,
      duration: 1,
    })

    gsap.to(moon.position,{
      x: 0,
      y: 300,
      z: 0,
      duration: 1,
    })

  } else {

    gsap.to(camera.position,{
      x: 0,
      y: 0,
      z: 1000,
      duration: 1,
      ease: "back.out(0.5)"
    });

    gsap.to(earth.position,{
      x: -150,
      y: 0,
      z: 900,
      duration: 3,
    });

    gsap.to(mercure.position,{
      x: 320,
      y: -120,
      z: 300,
      duration: 1,
    })

    gsap.to(mars.position,{
      x: 500,
      y: 250,
      z: 100,
      duration: 1,
    })

    gsap.to(moon.position,{
      x: -250,
      y: 0,
      z: 0,
      duration: 1,
    })

  }
  // renderer.setSize( window.innerWidth, window.innerHeight );
  renderer.setSize( window.innerWidth, (window.innerHeight - headerHeight) );
  // camera.aspect = window.innerWidth / window.innerHeight;
  camera.aspect = window.innerWidth / (window.innerHeight - headerHeight);
  camera.updateProjectionMatrix();
}



function rotate() {

    // rotation MOON//////////////////////
    moon.rotation.x += 0.00;
    moon.rotation.y += 0.002;
  
    // rotation EARTH/////////////////////
    earth.rotation.x += 0.00;
    earth.rotation.y += -0.0005;
  
    // rotation VENUS//////////////////////
    venus.rotation.x += 0.00;
    venus.rotation.y += 0.002;
    venus.rotation.z += 0.0009;
  
    // rotation MERCURE/////////////////////
    mercure.rotation.x += 0.002;
    mercure.rotation.y += 0.001;
  
    // rotation MARS////////////////////////
    mars.rotation.x += 0.001;
    mars.rotation.y += 0.001;
  
}

function render(){

  mmi.update(); // mise à jour des positions de chaque planetes par rapport au viewport (pour les événement clique...)
  rotate(); // rotaion pour chaque planetes
  renderer.render( scene, camera ); // rendu graphique avec tous les elements 3D + camera
  requestAnimationFrame( render ); // appel de la fonction render en boucle pour l'animation
  
}

scene.add(createEarth());
scene.add(createMoon());
scene.add(createVenus());
scene.add(createMars());
scene.add(createMercure());
render();  
planetsLayoutOnStart();


// ____________________________________________________________________________________________ events
// event mouse-enter, mouse-leave, click for each planets
objectsScene.forEach(element => {
  
    if ( element.type === 'Mesh' && element.name != 'earth' ) {

      mmi.addHandler(element.name, 'mouseenter', function() {
        canvas.style.cursor = 'pointer';
      });
  
      mmi.addHandler(element.name, 'mouseleave', function() {
        canvas.style.cursor = 'default';
      });
  
      mmi.addHandler(element.name, 'click', function() {
        planetPresentationVue(element);
        cardPresentationContent(element.name);
        cardEffect(element.name);
      });
      
    };
  
})
// event for home-icon
homeIconEl.addEventListener('click', () => {
    infoDivEl.style.zIndex = -1;
    planetsLayoutResponsive(),
    toggleCountDown(0);
})

window.addEventListener('resize', ()=> {
  infoDivEl.style.zIndex = -1;
  planetsLayoutResponsive()
  toggleCountDown(0);
})

// ____________________________________________________________________________________________ init


