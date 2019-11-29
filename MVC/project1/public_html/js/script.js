window.addEventListener("scroll", fixedMenu);

let fixedBlock = document.getElementById("header");
let fixedBlockOffset = fixedBlock.offsetTop;
console.log(fixedBlockOffset);

function fixedMenu() {
    console.log(window.pageYOffset);
    if (window.pageYOffset > fixedBlockOffset) {
        fixedBlock.classList.add("header");
    } else {
        fixedBlock.classList.remove("header");
    }
}