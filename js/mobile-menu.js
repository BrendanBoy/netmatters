const mobileMenu = document.getElementById("mobileMenu");
const mainContent = document.getElementById("mainContent");
const body = document.getElementById("body");
const mainContentOverlay = document.getElementById("mainContentOverlay");

function openNav() {
    mobileMenu.classList.add("menu-active");
    mainContent.classList.add("inactive");
    mainContentOverlay.classList.add("inactive");
    body.style.overflow = "hidden";
    mainContentOverlay.style.width = "100%";
    mainContentOverlay.style.opacity = "0.8";
}

function closeNav() {
    mobileMenu.classList.remove("menu-active");
    mainContent.classList.remove("inactive");
    mainContentOverlay.classList.remove("inactive");
    body.style.overflow = "auto";
    mainContentOverlay.style.width = "0%";
    mainContentOverlay.style.opacity = "0";
}