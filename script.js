let bootstrap = require('bootstrap');

//Volet vertical.
window.load = init(); //Declenche les elements une fois que le document est charger.
function init() {
    //Servira pour la condition, lorsque je click 1 fois.
    let click = 1;
    //Cible le button. // Ajoute moi les évenements sur ce button.
    let button = document.querySelector(".button").addEventListener("click", function() {
        //Cible la section menu.
        let main = document.body.querySelector(".main");
        //Cible tout les elements à l'interieur du menus.
        let inside = document.querySelectorAll(".insidemain");
        //Cible le volet deroulant a l'interieur du menus.
        let scrollMain = document.querySelector(".scrollmain");
        //Ajout de plusieurs click pour la condition.
        click += 1;
        //Ajout de la condition.
        if (click % 2 === 0) {
            main.style.width = "30%";
            main.style.backgroundColor = "red";
            console.log("2");
            setTimeout(function() {
                scrollMain.style.overflow = "auto";
            }, 100);
            for (let i = 0; i < inside.length; i++) {
                inside[i].style.opacity = "1";
            }
        } else {
            main.style.width = "0%";
            main.style.backgroundColor = "blue";
            scrollMain.style.overflow = "hidden";
            for (let i = 0; i < inside.length; i++) {
                inside[i].style.opacity = "0";
            }
        }
    })
}