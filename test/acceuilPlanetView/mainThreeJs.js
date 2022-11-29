import  { gsap }  from '/node_modules/gsap/index.js';
import MouseMeshInteraction from '/three_mmi.js';
import { scene, camera, renderer, moon, earth, venus, mars, mercure } from './three.js';

const headerEl = document.querySelector('header');
const homeIconEl = document.querySelector('#homeIcon'); 
const infoDivEl = document.querySelector('#info');
const canvas = document.querySelector('canvas');

const objectsScene = scene.children;
const headerHeight = headerEl.clientHeight; // à déduire ici et sur three_mmi.js ligne 222 la hauteur des éléments au dessus du canvas (-92.5) car le calcul se fait a partir du coin haut gauche du viewport
const mmi = new MouseMeshInteraction( scene, camera );

function planetsLayout() {

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

function cardEffect(planetName) {
    if(planetName != 'origin'){
      gsap.fromTo(".card-container", { autoAlpha:0},{autoAlpha:1,delay:2.1});
      gsap.fromTo("h1", { x:300},{x:0,delay:2.3});
      gsap.fromTo(".card-body", { autoAlpha:0},{autoAlpha:1,delay:2.7,});
    }
    else{
      gsap.fromTo(".card-container", { opacity:0},{autoAlpha:0,duration:2});
    }
}

function render(){
    rotate()
    renderer.render( scene, camera );   //rendu graphique avec tous les elements
    requestAnimationFrame( render );  //appel de la fonction render en boucle pour l'animation
    mmi.update();
}


objectsScene.forEach(element => {
  
    if ( element.type === 'Mesh' && element.name != 'earth' ) {
  
      mmi.addHandler(element.name, 'mouseenter', function() {
        
        canvas.style.cursor = 'pointer';
        
      });
  
      mmi.addHandler(element.name, 'mouseleave', function() {
      
        canvas.style.cursor = 'default';
        
      });
  
      mmi.addHandler(element.name, 'click', function() {
      
        infoDivEl.style.zIndex = 1;
        cardEffect(element.name);
  
        gsap.to(camera.position,{
          x: element.position.x + (element.geometry.boundingSphere.radius * 1.3),
          y: element.position.y,
          z: element.position.z + (element.geometry.boundingSphere.radius * 3),
          duration: 2,
          ease: "back.out(0.7)"
        })
  
      });
      
    };
  
})
  
homeIconEl.addEventListener('click', () => {
    infoDivEl.style.zIndex = -1;
    planetsLayout()
})

window.addEventListener('scroll',() =>{

})

window.addEventListener('resize', ()=> {
  infoDivEl.style.zIndex = -1;
  planetsLayout()
})
 
planetsLayout();
render();  


