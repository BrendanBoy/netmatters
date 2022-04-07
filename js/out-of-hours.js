const oohDetails = document.getElementById("out-of-hours");

function ooh() {
    if (oohDetails.style.display == "block") {
        oohDetails.style.display = "none";
    } else {
        oohDetails.style.display = "block";
    }
}