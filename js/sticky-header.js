const header = document.getElementById("header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

function headerCheck() {
    const pageWidth = window.innerWidth;

    if (pageWidth < 768) {
        let headerHeight = 168;
        return headerHeight;
    } else if (pageWidth >= 768 && pageWidth < 992) {
        let headerHeight = 110;
        return headerHeight;
    } else if (pageWidth >= 992) {
        let headerHeight = 224;
        return headerHeight;
    }
}

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    let headerHeight = headerCheck();

    if (currentScroll <= 0) {
        header.classList.remove(scrollUp);
        header.style.position = "relative";
        return;
    }
    if (currentScroll > headerHeight && currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
        // down
        header.classList.remove(scrollUp);
        header.classList.add(scrollDown);
    } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
        // up
        header.classList.remove(scrollDown);
        header.classList.add(scrollUp);
        header.style.position = "sticky";
    }
    lastScroll = currentScroll;
});