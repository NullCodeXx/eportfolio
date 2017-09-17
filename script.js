// Volet déroulant.
window.load = init();


function init() {
    let click = 1;
    document.querySelector(".button")
        .addEventListener("click", function() {
            let main = document.body.querySelector(".main");
            let inside = document.querySelectorAll(".insidemain");
            let scrollMain = document.querySelector(".scrollmain");
            let titleProject = document.querySelector(".titleProject");
            let linkProjet = document.querySelector(".link-project");
            //Ajout de plusieurs click pour la condition.
            click += 1;
            //Ajout de la condition.
            if (click % 2 === 0) {
                main.style.height = "100%";
                main.style.width = "100%";
                main.style.backgroundColor = "#272822";
                scrollMain.style.overflow = "hidden";
                titleProject.style.color = '#fff';
                linkProjet.style.color = '#fff';
                console.log("2");
                setTimeout(function() {
                    scrollMain.style.overflow = "auto";
                }, 100);
                for (let i = 0; i < inside.length; i++) {
                    inside[i].style.opacity = "1";
                }
            } else {
                main.style.height = "0%";
                main.style.backgroundColor = "#22231C";
                main.style.overflow = "hidden";
                titleProject.style.color = '#fff';
                linkProjet.style.color = '#fff';
                for (let i = 0; i < inside.length; i++) {
                    inside[i].style.opacity = "0";
                }
            }
        })
}