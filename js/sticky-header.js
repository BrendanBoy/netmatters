// The new version that still doesn't work right
const header = document.getElementById("header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    console.log("Scroll Position is ", currentScroll);

    if (currentScroll <= 0) {
        header.classList.remove(scrollUp);
        return;
    }
    if (currentScroll < 224) {
        header.style.position = "static";
    }
    if (currentScroll >= 224) {
        header.style.position = "sticky";
    }
    if (currentScroll > 224 && currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
        // down
        header.classList.remove(scrollUp);
        header.classList.add(scrollDown);
        console.log("Scrolling downwards");
    } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
        // up
        header.classList.remove(scrollDown);
        header.classList.add(scrollUp);
        console.log("Scrolling upwards");
    }
    lastScroll = currentScroll;
});

// /////////////////
// The Old Version
// /////////////////
// const header = document.getElementById("header");
// const scrollUp = "scroll-up";
// const scrollDown = "scroll-down";
// let lastScroll = 0;

// function headerCheck() {
//     const pageWidth = window.innerWidth;
//     if (pageWidth < 768) {
//         let headerHeight = 168;
//         console.log("Header Height is ", headerHeight);
//         return headerHeight;
//     } else if (pageWidth >= 768 && pageWidth < 992) {
//         let headerHeight = 110;
//         console.log("Header Height is ", headerHeight);
//         return headerHeight;
//     } else if (pageWidth >= 992) {
//         let headerHeight = 224;
//         console.log("Header Height is ", headerHeight);
//         return headerHeight;
//     }
//     console.log("Page Width is ", pageWidth);
// }

// window.addEventListener("scroll", () => {
//     const currentScroll = window.scrollY;
//     console.log("Scroll Position is ", currentScroll);
//     let headerHeight = headerCheck();

//     if (currentScroll <= 0) {
//         header.classList.remove(scrollUp);
//         return;
//     }
//     if (currentScroll > headerHeight && currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
//         // down
//         header.classList.remove(scrollUp);
//         header.classList.add(scrollDown);
//         console.log("Scrolling downwards");
//     } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
//         // up
//         header.classList.remove(scrollDown);
//         header.classList.add(scrollUp);
//         console.log("Scrolling upwards");
//     }
//     lastScroll = currentScroll;
// });