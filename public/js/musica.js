var currentIndex = 1;
var tiempoEspera=5;

function setup() {
    nextIteration();
    
}

function nextIteration(){
    if(currentIndex==tiempoEspera){
        currentIndex=1;
    }
    console.log('current index: ' + currentIndex);
    currentIndex++;
    setTimeout(nextIteration, 1000);
}