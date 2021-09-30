/*document.querySelector('.header_navbar_burger').addEventListener("click", function(){
    document.querySelector('#header_navigation').classList.toggle('is-open');
})


const menuLateral = document.getElementById("menuLateral");

window.onscroll = function (){

    console.log(menuLateral.offsetHeight)
    console.log(window.pageYOffset * 0.7)
if(menuLateral){
    if(menuLateral.offsetHeight < (window.pageYOffset * 0.4)){
        menuLateral.style.position = "fixed";
        menuLateral.style.top = "30%";
    }else {
        menuLateral.style.position = "absolute";
        menuLateral.style.top = "10%";
    }
}

}

function fonduLoader(){
    document.getElementById("pageAccueil").style.display = "block";
    document.getElementById("footerView").style.display = "block";
    document.body.style.overflowY = "scroll";
    document.getElementById(("loaderBlue")).style.transition = "opacity 3s";
    document.getElementById(("loaderBlue")).style.opacity = "0";

    setTimeout(hideLoader, 3000);
}

function hideLoader(){
    if(document.getElementById("loaderBlue")){
        console.log("delete");
        document.getElementById("loaderBlue").remove();
        apparitionCercle();
    }
}

function scrollEnable(){
    if(!document.getElementById("loaderBlue")){
        document.body.style.overflowY = "scroll";
    }else {
        document.getElementById("pageAccueil").style.display = "none";
        document.getElementById("footerView").style.display = "none";
    }
}

function apparitionCercle(){
    if(banniereImg){
        banniereImg.style.transition = "5s";
        banniereImg.style.clipPath = "circle(13.5vw at 30vw 32vh)";

        setTimeout(removeTransition, 5000);

    }
}


function removeTransition(){
    banniereImg.style.transition = "0.2s";
    banniereImg.style.clipPath = "circle(13.5vw at var(--x) var(--y))"
}
scrollEnable();
setTimeout(fonduLoader, 3000);*/


document.getElementById("mainBalise").style.marginTop = document.getElementById("header_nav").offsetHeight + "px";

window.addEventListener("resize", function (){
    document.getElementById("mainBalise").style.marginTop = document.getElementById("header_nav").offsetHeight + "px";
    //console.log(document.getElementById("header_nav").offsetHeight);
})

window.addEventListener("load", function (){
    document.getElementById("mainBalise").style.marginTop = document.getElementById("header_nav").offsetHeight + "px";
    //console.log(document.getElementById("header_nav").offsetHeight);
})