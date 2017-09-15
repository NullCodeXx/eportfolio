// Volet déroulant.
window.load = init();

function init() {
    let click = 1;
    document.querySelector(".button")
        .addEventListener("click", function() {
            let main = document.body.querySelector(".main");
            let inside = document.querySelectorAll(".insidemain");
            let scrollMain = document.querySelector(".scrollmain");
            //Ajout de plusieurs click pour la condition.
            click += 1;
            //Ajout de la condition.
            if (click % 2 === 0) {
                main.style.width = "30%";
                main.style.backgroundColor = "#132532";
                console.log("2");
                setTimeout(function() {
                    scrollMain.style.overflow = "auto";
                }, 100);
                for (let i = 0; i < inside.length; i++) {
                    inside[i].style.opacity = "1";
                }
            } else {
                main.style.width = "0%";
                main.style.backgroundColor = "#0A151C";
                scrollMain.style.overflow = "hidden";
                for (let i = 0; i < inside.length; i++) {
                    inside[i].style.opacity = "0";
                }
            }
        })
}