// main.js

document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.querySelector(".register-container form");
    const loginForm = document.querySelector(".login-container form");
  
    registerForm.addEventListener("submit", function (e) {
      e.preventDefault();
      validateRegisterForm();
    });
  
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();
      validateLoginForm();
    });
  
    function validateRegisterForm() {
      const username = document.getElementById("username").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
  
      if (username === "") {
        document.getElementById("username-error").textContent = "El nombre es requerido.";
      }
  
      if (email === "") {
        document.getElementById("email-error").textContent = "El correo electrónico es requerido.";
      }
  
      if (password === "") {
        document.getElementById("password-error").textContent = "La contraseña es requerida.";
      }
    }
  
    function validateLoginForm() {
      const email = document.querySelector(".email-2").value;
      const password = document.querySelector(".password-2").value;
  
      if (email === "") {
        document.querySelector(".email-error-2").textContent = "El correo electrónico es requerido.";
      }
  
      if (password === "") {
        document.querySelector(".password-error-2").textContent = "La contraseña es requerida.";
      }
    }
  });
  // Continuando en main.js

const container = document.getElementById("container");
const loginButton = document.getElementById("login");
const registerButton = document.getElementById("register");

loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});
