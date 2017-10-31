document.querySelector("#displayProject").addEventListener("click", function(e) {
    e.preventDefault();
    let form = document.querySelector("#listeProject");
    formcont = document.querySelector("#contProject").style.display = "flex";
    let overForm = false;
    form.addEventListener("mouseover", function() {
        overForm = true;
    });

    form.addEventListener("mousemove", function() {
        overForm = true;
    });

    form.addEventListener("mouseout", function() {
        overForm = false;
    });
    document.querySelector(formcont).addEventListener("click", function() {
        if (overForm === false) {
            document.querySelector(formcont).style.display = "none";
        }
    });
});