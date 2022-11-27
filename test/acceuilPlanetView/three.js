// import * as THREE from  'https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.module.js';
import * as THREE from '/node_modules/three/build/three.module.js';
import  { gsap }  from '/node_modules/gsap/index.js';
import MouseMeshInteraction from '/three_mmi.js';

// Basic Threejs variables

let scene;
let camera;
let renderer;
let headerHeight = 92.5; // à déduire ici et sur three_mmi.js ligne 222 la hauteur des éléments au dessus du canvas (-92.5) car le calcul se fait a partir du coin haut gauche du viewport

//3D planets variables

let moon;
let earth;
let venus;
let mercure;
let mars;


//Variables camera position et rotation pour chaque planete + origine

let originCam = {
position: {x: 0, y: 0, z: 1000},
rotation: {x: 0, y: 0, z: 0}};

let moonCam = {
position: {x: -150, y: 0, z: 90},
rotation: {x: 0, y: 0.45, z: 0}};

let venusCam = {
position: {x: 0, y: 0, z: 230},
rotation: {x: 0, y: -0.4, z: 0}};

let mercureCam = {
position: {x: 0, y: 0, z: 620},
rotation: {x: -0.36, y: -1.12, z: 0}};

let marsCam = {
position: {x: 500, y: 160, z: 380},
rotation: {x: 0.31, y: -0.4, z: 0}};
         

// ---------------- SCENE ----------------

scene = new THREE.Scene();
const sceneLoader = new THREE.TextureLoader()
scene.background = sceneLoader.load('assets/img/AdobeStock_340851338.jpg')


// ---------------- RENDU ----------------

renderer = new THREE.WebGLRenderer( { antialias : true } );
// renderer.setSize( window.innerWidth, window.innerHeight);
renderer.setSize( window.innerWidth, (window.innerHeight-headerHeight) );

// envoi de l'element HTML sur la page HTML
document.body.appendChild( renderer.domElement ); 


// ---------------- CAMERA ----------------
// camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 1, 10000 );
camera = new THREE.PerspectiveCamera( 50, window.innerWidth / (window.innerHeight-headerHeight), 1, 10000 );
camera.position.set( 0, 0, 1000 );
let originLookAt = new THREE.Vector3(0,0,0);

camera.lookAt(originLookAt);

scene.add( camera );

// ---------------- LUMIERES ----------------

let ambientLight = new THREE.AmbientLight( 0xcccccc, 0.3 );
scene.add( ambientLight );

const directionalLight = new THREE.DirectionalLight( 0xfff8e3, 0.9 );
directionalLight.position.set(1,3,1)
scene.add( directionalLight );





/////////////////////MOON/////////////////////////////////////////////////////
// ---------------- 3D moon ----------------

let moonDim = 46;
const moonGeometry = new THREE.SphereGeometry( moonDim, 50, 50 );
const moonLoader = new THREE.TextureLoader();

// ---------------- TEXTURE moon ----------------

const moonMaterial = new THREE.MeshLambertMaterial({
map: moonLoader.load('assets/texturePlanets/2k_moon.jpg')});
moon = new THREE.Mesh( moonGeometry, moonMaterial );
moon.name = 'moon';

// ---------------- POSITION moon ----------------
  //fullscreen
moon.position.x = -250;
moon.position.y = 0;
moon.position.z = 0;


scene.add( moon );

/////////////////////EARTH/////////////////////////////////////////////////////
// ---------------- 3D earth ----------------

let earthDim = 70;
const earthGeometry = new THREE.SphereGeometry( earthDim, 70, 70 );
const earthLoader = new THREE.TextureLoader();

// ---------------- TEXTURE earth ----------------

const earthMaterial = new THREE.MeshLambertMaterial({
map: earthLoader.load('assets/texturePlanets/1_earth_2k.png')});
earth = new THREE.Mesh( earthGeometry, earthMaterial );
earth.name = 'earth';

// ---------------- POSITION earth ----------------

  //fullscreen
earth.position.y = 0;
earth.position.x = -150;
earth.position.z = 900;


scene.add( earth );

/////////////////////VENUS/////////////////////////////////////////////////////
// ---------------- 3D venus ----------------

let venusDim = 75;
const venusGeometry = new THREE.SphereGeometry( venusDim, 70, 70 );
const venusLoader = new THREE.TextureLoader();

// ---------------- TEXTURE venus ----------------

const venusMaterial = new THREE.MeshLambertMaterial({
map: venusLoader.load('assets/texturePlanets/2k_venus_surface.jpg')});
venus = new THREE.Mesh( venusGeometry, venusMaterial );
venus.name = 'venus';

// ---------------- POSITION venus ----------------
  //fullscreen
venus.position.y = 0;
venus.position.x = 0;
venus.position.z = 0;


scene.add( venus );

/////////////////////MERCURE/////////////////////////////////////////////////////
// ---------------- 3D mercure ----------------

let mercureDim = 160;
const mercureGeometry = new THREE.SphereGeometry( mercureDim, 70, 70 );
const mercureLoader = new THREE.TextureLoader();

// ---------------- TEXTURE mercure ----------------

const mercureMaterial = new THREE.MeshLambertMaterial({
map: mercureLoader.load('assets/texturePlanets/2k_mercury.jpg')});
mercure = new THREE.Mesh( mercureGeometry, mercureMaterial );
mercure.name = 'mercure';

// ---------------- POSITION mercure ----------------
//fullscreen
mercure.position.x = 320;
mercure.position.y = -120;
mercure.position.z = 300;


scene.add( mercure );

/////////////////////MARS/////////////////////////////////////////////////////
// ---------------- 3D mars ----------------

let marsDim = 100;
const marsGeometry = new THREE.SphereGeometry( marsDim, 100, 100 );
const marsLoader = new THREE.TextureLoader();

// ---------------- TEXTURE mars ----------------

const marsMaterial = new THREE.MeshLambertMaterial({
map: marsLoader.load('assets/texturePlanets/2k_mars.jpg')});
mars = new THREE.Mesh( marsGeometry, marsMaterial );
mars.name = 'mars';

// ---------------- POSITION mars ----------------
  //fullscreen
mars.position.x = 500;
mars.position.y = 250;
mars.position.z = 100;


scene.add( mars );

// GSAP fonction mouvement caméra////////////////////////////////////////////

function camPosition(planetName){
  let arrayPos;
  if (planetName === 'moon') {
    arrayPos = moonCam;
  }
  else if (planetName === 'venus') {
    arrayPos = venusCam;
  }
  else if (planetName === 'mercure') {
    arrayPos = mercureCam;
  }
  else if (planetName === 'mars') {
    arrayPos = marsCam;
  }
  else{
    arrayPos = originCam;
  }

  gsap.to(camera.position,{
    x: arrayPos.position.x,
    y: arrayPos.position.y,
    z: arrayPos.position.z,
    duration: 2,
    ease: "back.out(0.5)"
    });

    gsap.to(camera.rotation,{
      x: arrayPos.rotation.x,
      y: arrayPos.rotation.y,
      z: arrayPos.rotation.z,
      duration: 2,
    });

};

// GSAP fonction effet //////////////////////////////////////////////////////

const tl = gsap.timeline();

function cardEffect(planetName) {
  if(planetName != 'origin'){
    gsap.fromTo(".card-container", { autoAlpha:0},{autoAlpha:1,delay:2.1});
    gsap.fromTo("h1", { x:300},{x:0,delay:2.3});
    gsap.fromTo(".card-body", { autoAlpha:0},{autoAlpha:1,delay:2.7,});
  }
  else{
    gsap.fromTo(".card-container", { opacity:0},{autoAlpha:0,duration:2});
  }
};

// fonction rotation des models

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
  
  };
  const mmi = new MouseMeshInteraction( scene, camera );
  
  // fonction d'animation pour la rotation + vitesse sur chacun des axes x,y,z pour tous les modèles
  function render(){
    
    rotate()
    renderer.render( scene, camera );   //rendu graphique avec tous les elements
    requestAnimationFrame( render );  //appel de la fonction render en boucle pour l'animation
    mmi.update();
};

planetsLayout();
render();











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










// evenement Click bouton nom planete/////////////////////////////////////////

const homeIconEl = document.querySelector('#homeIcon') 

const objectsScene = scene.children
const canvas = document.querySelector('canvas');
const infoDivEl = document.querySelector('#info');

window.addEventListener('scroll',() =>{

})

window.addEventListener('resize', ()=> {
  infoDivEl.style.zIndex = -1;
  planetsLayout()
})

homeIconEl.addEventListener('click', () => {
  infoDivEl.style.zIndex = -1;
  planetsLayout()
})





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

});

// window.requestAnimationFrame( render )

