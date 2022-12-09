// import * as THREE from  'https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.module.js';
// import * as THREE from '/node_modules/three/build/three.module.js';
import * as THREE from '../three.js-master/build/three.module.js';

// ________________________________________________________________________ HTML elements
const headerEl = document.querySelector('header');
const headerHeight = headerEl.clientHeight; // à déduire ici et sur three_mmi.js ligne 222 la hauteur des éléments au dessus du canvas (-92.5) car le calcul se fait a partir du coin haut gauche du viewport
const mainEl = document.querySelector('#planet-view');
// ________________________________________________________________________ variables
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
let line;

// ---------------- SCENE ----------------
scene = new THREE.Scene();
const sceneLoader = new THREE.TextureLoader()
scene.background = sceneLoader.load('/ressources/js/three_deep_travel_project/AdobeStock_340851338.jpg')

// ________________________________________________________________________ environment functions
function createRenderer() {
  
  // ---------------- RENDU ----------------
  
  renderer = new THREE.WebGLRenderer( { antialias : true } );
  renderer.setSize( window.innerWidth, (window.innerHeight-headerHeight) );
  
  // envoi de l'element HTML sur la page HTML
  mainEl.appendChild( renderer.domElement ); 
  
}

function createCamera() {
  
  // ---------------- CAMERA ----------------
  
  camera = new THREE.PerspectiveCamera( 50, window.innerWidth / (window.innerHeight-headerHeight), 1, 10000 );
  camera.position.set( 0, 0, 1000 );
  let originLookAt = new THREE.Vector3(0,0,0);
  
  camera.lookAt(originLookAt);
  
  scene.add( camera );

}

function createLights() {
  
  // ---------------- LUMIERES ----------------
  
  let ambientLight = new THREE.AmbientLight( 0xcccccc, 0.3 );

  scene.add( ambientLight );
  
  const directionalLight = new THREE.DirectionalLight( 0xfff8e3, 0.9 );
  directionalLight.position.set(1,3,1)

  scene.add( directionalLight );

}

// ________________________________________________________________________ mesh functions
function createMoon(){
  /////////////////////MOON/////////////////////////////////////////////////////
// ---------------- 3D moon ----------------

let moonDim = 46;
const moonGeometry = new THREE.SphereGeometry( moonDim, 50, 50 );
const moonLoader = new THREE.TextureLoader();

// ---------------- TEXTURE moon ----------------

const moonMaterial = new THREE.MeshLambertMaterial({
map: moonLoader.load('/ressources/js/three_deep_travel_project/texturePlanets/2k_moon.jpg')});
moon = new THREE.Mesh( moonGeometry, moonMaterial );
moon.name = 'moon';

// ---------------- POSITION moon ----------------
  //fullscreen
moon.position.x = -250;
moon.position.y = 0;
moon.position.z = 0;

return moon;

}

function createEarth() {
  
  /////////////////////EARTH/////////////////////////////////////////////////////
  // ---------------- 3D earth ----------------
  
  let earthDim = 70;
  const earthGeometry = new THREE.SphereGeometry( earthDim, 70, 70 );
  const earthLoader = new THREE.TextureLoader();
  
  // ---------------- TEXTURE earth ----------------
  
  const earthMaterial = new THREE.MeshLambertMaterial({
  map: earthLoader.load('/ressources/js/three_deep_travel_project/texturePlanets/1_earth_2k.png')});
  earth = new THREE.Mesh( earthGeometry, earthMaterial );
  earth.name = 'earth';
  
  // ---------------- POSITION earth ----------------
    //fullscreen
  earth.position.y = 0;
  earth.position.x = -150;
  earth.position.z = 900;
    
  return earth;

}

function createVenus() {
  
  /////////////////////VENUS/////////////////////////////////////////////////////
  // ---------------- 3D venus ----------------
  
  let venusDim = 75;
  const venusGeometry = new THREE.SphereGeometry( venusDim, 70, 70 );
  const venusLoader = new THREE.TextureLoader();
  
  // ---------------- TEXTURE venus ----------------
  
  const venusMaterial = new THREE.MeshLambertMaterial({
  map: venusLoader.load('/ressources/js/three_deep_travel_project/texturePlanets/2k_venus_surface.jpg')});
  venus = new THREE.Mesh( venusGeometry, venusMaterial );
  venus.name = 'venus';
  
  // ---------------- POSITION venus ----------------
    //fullscreen
  venus.position.y = 0;
  venus.position.x = 0;
  venus.position.z = 0;
  
  return venus;

}

function createMercure() {
  
  /////////////////////MERCURE/////////////////////////////////////////////////////
  // ---------------- 3D mercure ----------------
  
  let mercureDim = 160;
  const mercureGeometry = new THREE.SphereGeometry( mercureDim, 70, 70 );
  const mercureLoader = new THREE.TextureLoader();
  
  // ---------------- TEXTURE mercure ----------------
  
  const mercureMaterial = new THREE.MeshLambertMaterial({
  map: mercureLoader.load('/ressources/js/three_deep_travel_project/texturePlanets/2k_mercury.jpg')});
  mercure = new THREE.Mesh( mercureGeometry, mercureMaterial );
  mercure.name = 'mercure';
  
  // ---------------- POSITION mercure ----------------
  //fullscreen
  mercure.position.x = 320;
  mercure.position.y = -120;
  mercure.position.z = 300;
  
  return mercure;

}

function createMars() {
  
  /////////////////////MARS/////////////////////////////////////////////////////
  // ---------------- 3D mars ----------------
  
  let marsDim = 100;
  const marsGeometry = new THREE.SphereGeometry( marsDim, 100, 100 );
  const marsLoader = new THREE.TextureLoader();
  
  // ---------------- TEXTURE mars ----------------
  
  const marsMaterial = new THREE.MeshLambertMaterial({
  map: marsLoader.load('/ressources/js/three_deep_travel_project/texturePlanets/2k_mars.jpg')});
  mars = new THREE.Mesh( marsGeometry, marsMaterial );
  mars.name = 'mars';
  
  // ---------------- POSITION mars ----------------
  //fullscreen
  mars.position.x = 500;
  mars.position.y = 250;
  mars.position.z = 100;
  
  return mars;

}

// ________________________________________________________________________ init
createCamera();
createLights();
createRenderer();

export { scene, camera, renderer, moon, earth, venus, mars, mercure, createMoon, createEarth, createVenus, createMercure, createMars };
