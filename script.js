// script.js

document.addEventListener("DOMContentLoaded", function() {
    var loginButton = document.getElementById("loginButton");
    var loginContainer = document.getElementById("loginContainer");
    var closeButton = document.getElementById("closeButton");
    var loginForm = document.getElementById("loginForm");

    loginButton.addEventListener("click", function() {
        loginContainer.style.display = "block";
    });

    closeButton.addEventListener("click", function() {
        loginContainer.style.display = "none";
    });

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        // TODO: Lakukan validasi login dan tindakan sesuai dengan hasilnya
        console.log("Username: " + username);
        console.log("Password: " + password);
        loginContainer.style.display = "none";
    });
});