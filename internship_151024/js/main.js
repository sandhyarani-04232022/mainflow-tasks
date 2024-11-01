var button = document.getElementById('nav-right-btn');
button.onclick = function () {
    var subtopnav = document.getElementById('nav-library');
    sideScroll(subtopnav,'right',25,100,10);
};

var back = document.getElementById('nav-left-btn');
back.onclick = function () {
    var subtopnav = document.getElementById('nav-librarya');
    sideScroll(subtopnav,'left',25,100,10);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}
