function daftar() {
    var reg = document.getElementById("reg-box");
    var lgin = document.getElementById("login-box");
    reg.classList.remove("hide");
    lgin.classList.add("hide")
}

function login() {
    var reg = document.getElementById("reg-box");
    var lgin = document.getElementById("login-box");
    lgin.classList.remove("hide");
    reg.classList.add("hide")
}