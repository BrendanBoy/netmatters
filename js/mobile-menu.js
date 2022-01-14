const mobileMenu = document.getElementById("mobileMenu");
const mainContent = document.getElementById("mainContent");
const body = document.getElementById("body");
const mainContentBefore = window.getComputedStyle(mainContent, "::before");

function openNav() {
    mobileMenu.classList.add("menu-active");
    mainContent.classList.add("inactive");
    body.style.overflow = "hidden";
    mainContent.style.setProperty("--overlay", "block");
    mainContent.style.setProperty("--zed", "4");
    mainContent.style.setProperty("--opaque", "0.5");
}

function closeNav() {
    mobileMenu.classList.remove("menu-active");
    mainContent.classList.remove("inactive");
    body.style.overflow = "auto";
    mainContent.style.setProperty("--overlay", "none");
    mainContent.style.setProperty("--zed", "0");
    mainContent.style.setProperty("--opaque", "0");
}