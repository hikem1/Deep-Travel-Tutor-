// import * as THREE from  'https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.module.js';
import * as THREE from '/node_modules/three/build/three.module.js'
import  { gsap }  from '/node_modules/gsap/index.js'

// Basic Threejs variables

let scene;
let camera;
let renderer;

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
renderer.setSize( window.innerWidth, window.innerHeight );

// envoi de l'element HTML sur la page HTML
document.body.appendChild( renderer.domElement ); 

// ---------------- CAMERA ----------------
camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 1, 10000 );
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



// ---------------- GLTF Loader Chargement dee modèle externe .. à étudier..------------

// let loaderGLTF = new GLTFLoader();
// let sword;

// loaderGLTF.load( 'AnimatedMorphSphere.gltf', function ( gltf ){
//   sword = gltf.scene; 
//   sword.scale.set(2, 2, 2);
//   sword.position.y = 4;

//   scene.add( sword );
// })


/////////////////////MOON/////////////////////////////////////////////////////
// ---------------- 3D moon ----------------

const moonDim = 46;
const moonGeometry = new THREE.SphereGeometry( moonDim, 50, 50 );
const moonLoader = new THREE.TextureLoader();

// ---------------- TEXTURE moon ----------------

const moonMaterial = new THREE.MeshLambertMaterial({
map: moonLoader.load('assets/texturePlanets/2k_moon.jpg')});
moon = new THREE.Mesh( moonGeometry, moonMaterial );

// ---------------- POSITION moon ----------------

moon.position.y = 0;
moon.position.x = -250;
moon.position.z = 0;

scene.add( moon );

/////////////////////EARTH/////////////////////////////////////////////////////
// ---------------- 3D earth ----------------

const earthDim = 70;
const earthGeometry = new THREE.SphereGeometry( earthDim, 70, 70 );
const earthLoader = new THREE.TextureLoader();

// ---------------- TEXTURE earth ----------------

const earthMaterial = new THREE.MeshLambertMaterial({
map: earthLoader.load('assets/texturePlanets/1_earth_2k.png')});
earth = new THREE.Mesh( earthGeometry, earthMaterial );

// ---------------- POSITION earth ----------------

earth.position.y = 0;
earth.position.x = -150;
earth.position.z = 900;

scene.add( earth );

/////////////////////VENUS/////////////////////////////////////////////////////
// ---------------- 3D venus ----------------

const venusDim = 75;
const venusGeometry = new THREE.SphereGeometry( venusDim, 70, 70 );
const venusLoader = new THREE.TextureLoader();

// ---------------- TEXTURE venus ----------------

const venusMaterial = new THREE.MeshLambertMaterial({
map: venusLoader.load('assets/texturePlanets/2k_venus_surface.jpg')});
venus = new THREE.Mesh( venusGeometry, venusMaterial );

// ---------------- POSITION venus ----------------

venus.position.y = 0;
venus.position.x = 0;
venus.position.z = 0;

scene.add( venus );

/////////////////////MERCURE/////////////////////////////////////////////////////
// ---------------- 3D mercure ----------------

const mercureDim = 160;
const mercureGeometry = new THREE.SphereGeometry( mercureDim, 70, 70 );
const mercureLoader = new THREE.TextureLoader();

// ---------------- TEXTURE mercure ----------------

const mercureMaterial = new THREE.MeshLambertMaterial({
map: mercureLoader.load('assets/texturePlanets/2k_mercury.jpg')});
mercure = new THREE.Mesh( mercureGeometry, mercureMaterial );

// ---------------- POSITION mercure ----------------

mercure.position.y = -120;
mercure.position.x = 320;
mercure.position.z = 300;

scene.add( mercure );

/////////////////////MARS/////////////////////////////////////////////////////
// ---------------- 3D mars ----------------

const marsDim = 100;
const marsGeometry = new THREE.SphereGeometry( marsDim, marsDim, marsDim );
const marsLoader = new THREE.TextureLoader();

// ---------------- TEXTURE mars ----------------

const marsMaterial = new THREE.MeshLambertMaterial({
map: marsLoader.load('assets/texturePlanets/2k_mars.jpg')});
mars = new THREE.Mesh( marsGeometry, marsMaterial );

// ---------------- POSITION mars ----------------

mars.position.y = 250;
mars.position.x = 500;
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
    venus.rotation.z += 0.009;
  
    // rotation MERCURE/////////////////////
    mercure.rotation.x += 0.002;
    mercure.rotation.y += 0.001;
  
    // rotation MARS////////////////////////
    mars.rotation.x += 0.001;
    mars.rotation.y += 0.001;
  
};

// fonction d'animation pour la rotation + vitesse sur chacun des axes x,y,z pour tous les modèles

function render(){
  rotate()
  renderer.render( scene, camera );   //rendu graphique avec tous les elements
  requestAnimationFrame( render );  //appel de la fonction render en boucle pour l'animation
};

render();

// evenement Click bouton nom planete/////////////////////////////////////////

let buttonPlanet = document.getElementsByTagName('button');

for(let i = 0; i < buttonPlanet.length; i++){
  buttonPlanet[i].addEventListener('click', function () {
    camPosition(this.name);
    cardEffect(this.name);
  });
};




