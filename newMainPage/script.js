let boxes = document.getElementsByClassName("product-box");
let boxes2 = document.getElementsByClassName("product-box2");

let scroller = document.getElementById("scroller");
let scroller2 = document.getElementById("scroller2");

let btnLeft = document.getElementById("scroll-left");
let btnLeft2 = document.getElementById("scroll-left2");

let btnRight = document.getElementById("scroll-right");
let btnRight2 = document.getElementById("scroll-right2");

/*Scrollers*/
btnLeft.addEventListener("click", function(){
    scroller.scrollLeft -= 200;
})


btnRight.addEventListener("click", function(){
    scroller.scrollLeft += 200;
})

btnLeft2.addEventListener("click", function(){
    scroller2.scrollLeft -= 200;
})


btnRight2.addEventListener("click", function(){
    scroller2.scrollLeft += 200;
})


const maxScrollLeft = scroller.scrollWidth - scroller.clientWidth;

const maxScrollLeft2 = scroller2.scrollWidth - scroller2.clientWidth;

//Auto play the scroller
function autoScroll() {
    if (scroller.scrollLeft > (maxScrollLeft - 1)) {
        scroller.scrollLeft -= maxScrollLeft;
    } else {
       scroller.scrollLeft += 2;
    }
}

function autoScroll2() {
    if (scroller2.scrollLeft > (maxScrollLeft2 - 1)) {
        scroller2.scrollLeft -= maxScrollLeft2;
    } else {
       scroller2.scrollLeft += 2;
    }
}

//Pause the automatic scroller while hovering
let Scroll = setInterval(autoScroll, 25);

for (var i=0; i < (boxes.length); i++){
    boxes[i].addEventListener('mouseover', function() {
    clearInterval(Scroll);
});

boxes[i].addEventListener('mouseout', function() {
    Scroll = setInterval(autoScroll, 25);
    return Scroll;
});
}

let Scroll2 = setInterval(autoScroll2, 25);

for (var j=0; j < (boxes2.length); j++){
    boxes2[j].addEventListener('mouseover', function() {
    clearInterval(Scroll2);
});

boxes[i].addEventListener('mouseout', function() {
    Scroll2 = setInterval(autoScroll2, 25);
    return Scroll2;
});
}


