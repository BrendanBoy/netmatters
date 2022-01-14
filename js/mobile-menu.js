function openNav() {
    document.getElementById("mobileMenu").classList.add("menu-active");
    document.getElementById("mainContent").classList.add("inactive");
    document.getElementById("body").style.overflow = "hidden";
}

function closeNav() {
    document.getElementById("mobileMenu").classList.remove("menu-active");
    document.getElementById('mainContent').classList.remove("inactive");
    document.getElementById("body").style.overflow = "auto";
}