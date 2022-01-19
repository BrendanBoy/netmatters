let modal = document.getElementById("modal");
let acceptButton = document.querySelector(".btn.accept");

acceptButton.addEventListener("click", function() {
    modal.classList.remove("active");
    document.body.style.overflow = "visible";
    localStorage.setItem("cookieAccepted", "yes");
});

setTimeout(function() {
    let cookieAccepted = localStorage.getItem("cookieAccepted");
    if (cookieAccepted != "yes") {
        modal.classList.add("active");
        document.body.style.overflow = "hidden";
    }
}, 2000);