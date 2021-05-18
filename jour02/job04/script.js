window.onload = function() {
    document.addEventListener('keydown', keylog);

    function keylog(e) {
        document.getElementById("keylogger").innerHTML += `${String.fromCharCode(e.keyCode)}`;
    }
}