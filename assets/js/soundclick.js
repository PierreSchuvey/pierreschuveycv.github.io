var element = document.getElementById('lienancre');
var sonclick = document.getElementById('sonover'); // on récupère l'élément <audio>

lienancre.click = function(){ // lorsque le div est survolé
    sonover.play(); // on joue le son
}
