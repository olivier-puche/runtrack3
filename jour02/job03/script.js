var button = document.querySelector("#button");
var score = document.querySelector("#score");

function addone() {
    score.textContent++;
}

button.addEventListener("click", addone);