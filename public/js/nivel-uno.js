var sounds = [];
let x;
let y;
let velocidad=0;
let accion='';
let estado=false;
let colorLuz="#0f0";
let tiempo=5000;
let tiempoEjecucion;


function preload() {
  // cargando todos los sonidos
  for(let e of Array.from($("#contenedorPitar>div>input"))){
    sounds.push(loadSound($(e).val()));
  }  
}

function setup() {
  
  createCanvas(displayWidth/2, displayHeight/2);
	rectMode(CENTER);
  strokeWeight(2);
  stroke(51);
  fill(100);
  noLoop();
  x=width/2;
  y=height/2;
}

function cancelar(){
  setup()
}

function draw() {
	background(220);
  square(x, y, 55, 20);
  comprobarEstado();
  if (isLooping() ) {
    dibujar();
  }

}

function comprobarEstado(){
  if(estado){
    loop();
  }else{
    noLoop();
  }
  
}


function ejecutar() {

    let ii=1;  
    // rrecorrido de nuestro sleemento existentes en el contenedor uno
    for(let e of Array.from($("#nivel-uno-contenedor>"))){ 
      if(ii===1){
        procesoEjecutar($(e).data('accion'),$(e).data('valor'),$(e).attr('id'));
      }else{
          tiempoEjecucion=setTimeout(function timer() { 
          if($(e).data('accion')=='finalizar'){
            fnFinalizar($(e).data('accion'),tiempoEjecucion,$(e).attr('id'));
          }else{
            procesoEjecutar($(e).data('accion'),$(e).data('valor'),$(e).attr('id'));
          }
          
        }, ii * tiempo);
      }
      ii++;
    }
    
  
}


function fnFinalizar(accion_v,tiempoEjecucion_v,id_btn){
  // hablarVoz(accion_v);
  estado=false;
  clearTimeout(tiempoEjecucion_v)
  
}
function cancelar(){
  estado=!estado;
  clearTimeout(tiempoEjecucion)
}

function hablarVoz(frase){
  if('speechSynthesis' in window){
    const synth = window.speechSynthesis;
    let ourText = frase;
    const utterThis = new SpeechSynthesisUtterance(ourText);
    utterThis.lang = 'es-US';
    synth.speak(utterThis);
  }
}

function procesoEjecutar(accion_v,valor_v,id_btn){
  // hablarVoz(accion_v);
  
  accion=accion_v;
  colorLuz=valor_v;  

  if(accion!='pitar'){
    estado=true;
    velocidad=valor_v;
  }else{
    let numeroCancion=0;
    estado=false;
    // console.log(valor_v);
    for(let s=0;s<sounds.length;s++){
      // console.log(sounds[s].url+" "+nume)
      if(sounds[s].url==valor_v){
        numeroCancion=s;
      }
    }

    fnPitar(numeroCancion)
  }
  comprobarEstado();
}

function dibujar(){
  
  switch (accion) {
    case 'izquierda':
      fnIzquierda()
      break;
    case 'derecha':
      fnDerecha()
      break;
    case 'arriba':
      fnArriba()
      break;
    case 'abajo':
      fnAbajo()
      break;
    case 'prenderLuz':
      fnPrenderLuz()
      break;
    case 'finalizar':
      console.log('finalizar')
      break;
    default:
      break;
  }
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


function fnPrenderLuz(){
  fill(color(colorLuz));
}


function fnPitar(nume){

  sounds[nume].play([0],[1],null,[0],[tiempo/1000])
  sounds[nume].onended(function(){
    sounds[nume].stop()
    loop()
  })
  
}