var changement = document.getElementById("changement");
var body1 = document.getElementById("body1")
var val = window.scrollY;
window.scroll(0, 0);

body1.onscroll = function() {
    changement.style.color = "lightgray";
    changement.style.backgroundColor = `rgba(0, 32, 255, ${window.scrollY/1000} )`;
};