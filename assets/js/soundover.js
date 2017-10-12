var element = document.getElementById('lienancre'); // on récupère l'élément qui sera survolé pour jouer le son
var sonover = document.getElementById('sonover');
var sonclick = document.getElementById('sonclick'); // on récupère l'élément <audio>

lienancre.onmouseover = function(){ // lorsque le div est survolé
    sonover.play(); // on joue le son
};

lienancre.onclick = function(){ // lorsque le div est survolé
    sonclick.play(); // on joue le son
};
