let x = 100;
let y = 100;
let estado = false;
let direccion = '';
let velocidad= 1;
let colorLuz="#0f0";
let sounds = [];
let numeroCancion=1;
let letraCancion='';

function preload() {
  sounds.push(loadSound("sonido/Calm Down.mp3"));
  sounds.push(loadSound("sonido/Mi Bebito Fiu Fiu.mp3"));
  sounds.push(loadSound("sonido/Ojos Marrones.mp3"));
  sounds.push(loadSound("sonido/explocion.mp3"));
  sounds.push(loadSound("sonido/sirena.mp3"));
  sounds.push(loadSound("sonido/accidente.mp3"));
  sounds.push(loadSound("sonido/apagar.mp3"));
}

function setup() {
  
  createCanvas(720, 450);
  noLoop();
}

function draw() {
  background(204);
  square(x, y, 55, 20);

  if (isLooping() ) {
    dibujar()
  }
  
  
}

function comprobarEstado(){
  if(estado){
    loop()
  }else{
    noLoop()
  }
}

function ejecutar() {
  
  estado=true;
  let ii=1;
  for(let e of Array.from($("#dos>"))){ 
    // console.log($(e).data('accion'))
    if(ii===1){
      direccion=$(e).data('accion');  
      velocidad=$(e).data('valor');
      colorLuz=$(e).data('valor');  
      
      
      if($(e).data('accion')==='pitar'){
        letraCancion=$(e).data('valor');
        console.log('letra de mi cancion 5 sg'+$(e).data('valor'))
      }
      
    }else{
      setTimeout(function timer() {
        direccion=$(e).data('accion');
        velocidad=$(e).data('valor');
        colorLuz=$(e).data('valor');
        
        if($(e).data('accion')==='pitar'){
          letraCancion=$(e).data('valor');
          console.log('letra de mi cancion 5 sg'+$(e).data('valor'))
        }
      }, ii * 3000);
      
    }
    
    ii++;
  }

  

  comprobarEstado()
}

function dibujar(){
  
  switch (direccion) {
    case 'izquierda':
      console.log('izquierda')
        fnIzquierda();
      break;
    case 'derecha':
      console.log('derecha')
      fnDerecha();
      break;
    case 'arriba':
      console.log('arriba')
      fnArriba();
      break;
    case 'abajo':
      console.log('abajo')
      fnAbajo();
      break;
    case 'prenderLuz':
      console.log('prenderLuz')
      fnPrenderLuz();
      break;
    case 'pitar':
      console.log('pitar')
      fnPitar();
      break;
    default:
      break;
  }
}

function fnPrenderLuz(){
  fill(color(colorLuz));
}

function fnIzquierda(){
  x = x - velocidad;
  if (x < 0 ) {
    x = width;
  }
}

function fnDerecha(){
  x = x + velocidad;
  if (x > width ) {
    x = 0;
  }
}
function fnArriba(){
  y = y - velocidad;
  if (y < 0) {
    y = height;
  }
}

function fnAbajo(){
  y = y + velocidad;
  if (y > height) {
    y = 0;
  }
}

function cancelar(){
  noLoop()
}


function fnPitar() {
  console.log(letraCancion)
  switch (letraCancion) {
    case 'sonido/Calm Down.mp3':
      numeroCancion=0;
      break;
    case 'sonido/Mi Bebito Fiu Fiu.mp3':
      numeroCancion=1;
      break;
    case 'sonido/Ojos Marrones.mp3':
      numeroCancion=2;
      break;
    case 'sonido/explocion.mp3':
      numeroCancion=3;
      break;
    case 'sonido/sirena.mp3':
      numeroCancion=4;
      break;
    case 'sonido/accidente.mp3':
      numeroCancion=5;
      break;
    case 'sonido/apagar.mp3':
      numeroCancion=6;
      break;
    default:
      numeroCancion=0;
      break;
  }

  
 
  for(i = 0; i < sounds.length; i++){
    if (sounds[i].isPlaying()) {
      sounds[i].stop();
    } else {
      sounds[i].play()
    }
	}
}

