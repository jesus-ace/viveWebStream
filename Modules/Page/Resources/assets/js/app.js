// Scroll efect navbar 
let currentScrollPosition2 = 0;
let scrollAmount2 = 320;
        
const sContt = document.querySelector(".programacion-container2");
const hScrolll = document.querySelector(".horizontal-scroll2");


const btnScrollLeft2 = document.querySelector("#btn-scroll-left2");
const btnScrollRight2 = document.querySelector("#btn-scroll-right2");

btnScrollLeft2.style.opacity = "0";

let maxScrolll = -sContt.offsetWidth + hScrolll.offsetWidth;

function scrollH2(val) {
    currentScrollPosition2 += (val * scrollAmount2);
    if (currentScrollPosition2 > 0) {
        currentScrollPosition2 = 0;
        btnScrollLeft2.style.opacity = "0";
    }else{
        btnScrollLeft2.style.opacity = "1";
    }
    if (currentScrollPosition2 < maxScrolll) {
        currentScrollPosition2 =  maxScrolll;
        btnScrollRight2.style.opacity = "0";
    }else{
        btnScrollRight2.style.opacity = "1";
    } 
    sContt.style.left = currentScrollPosition2 +"px";
}