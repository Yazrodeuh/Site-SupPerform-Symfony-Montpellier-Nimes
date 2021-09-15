const banniere = document.getElementById("banniere");
const banniereImg = document.getElementById("banniere").firstElementChild;
let imageEntiere = false;


banniere.addEventListener("mousemove", function (event){
    //console.log(event)
    banniere.style.setProperty('--x', event.pageX + "px");
    banniere.style.setProperty('--y', event.pageY - document.getElementById("headerBalise").offsetHeight + "px");
})

window.addEventListener("load", postionDepartLoupe);
banniere.addEventListener("mouseleave", postionDepartLoupe);

banniere.addEventListener("click", function (){

    if(!imageEntiere){
        banniereImg.style.transition = "10s";
        banniereImg.style.clipPath = "circle(200vw at var(--x) var(--y))";
        imageEntiere = true;
    }

    /*if (timerMots !== null){
        clearTimeout(timerMots);
    }*/

})



function postionDepartLoupe(){
    banniere.style.setProperty('--x', 30 + "vw");
    banniere.style.setProperty('--y', 32 + "vh");
}


const mots = document.getElementsByClassName("motAccueil");
const tempsAnimation = 2;
let timerMots = null;
/**
 *
 * @param {Number} i
 */
function motAnime(i){

    mots[i].style.animationDuration = tempsAnimation + "s";
    mots[i].style.animationName = "motAnime";
    mots[i].style.top = Math.floor(Math.random() * (83)) + "%";
    mots[i].style.left =Math.floor(Math.random() * ((100 - 3.1* mots[i].innerText.length) - 3) + 3) + "%";

    timerMots = setTimeout(function (){
        motNonAnime(i);
    }, tempsAnimation * 1000);
}

/**
 *
 * @param {Number} i
 */
function motNonAnime(i){
    mots[i].style.animationName = "none";
    i++;
    if(i >= mots.length){
        i=0;
    }

    motAnime(i);
}

motAnime(0);


document.getElementById("btnResAccueil").addEventListener("mouseover", function (){
    document.getElementById("phrasePresentation").style.display = "none";
    document.getElementById("phraseResultat").style.display = "flex";
});

document.getElementById("btnResAccueil").addEventListener("mouseleave", function (){
    document.getElementById("phrasePresentation").style.display = "flex";
    document.getElementById("phraseResultat").style.display = "none";
});
