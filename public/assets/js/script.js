// Tambahkan fungsionalitas nanti jika dibutuhkan
console.log("CICO Login Page Loaded");

document.addEventListener("DOMContentLoaded", function () {
    const loginBtn = document.getElementById("loginBtn");
    const signupBtn = document.getElementById("signupBtn");
    const forgotLink = document.getElementById("forgotPassword");

    if (loginBtn) {
        loginBtn.addEventListener("click", function () {
            window.location.href = loginBtn.getAttribute('data-route-login');
        });
    }

    if (signupBtn) {
        signupBtn.addEventListener("click", function () {
            window.location.href = signupBtn.getAttribute('data-route-register');
        });
    }

    if (forgotLink) {
        forgotLink.addEventListener("click", function (e) {
            e.preventDefault();
            window.location.href = "/forgot-password"; // Ganti dengan route reset password jika ada
        });
    }
});


function redirectTo(page) {
    window.location.href = page;
}

function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    field.type = field.type === "password" ? "text" : "password";
}

function handleLogin() {
    const email = document.getElementById("email").value;
    const pass = document.getElementById("password").value;

    if (email === "" || pass === "") {
        alert("Isi semua data dengan benar.");
        return;
    }

    // Simulasi login (nanti diganti dengan validasi server)
    alert("Login berhasil! Selamat datang di CICO.");
    // window.location.href = "dashboard.html"; // jika ada
}
