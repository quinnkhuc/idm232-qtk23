let modal = document.getElementById("login-modal-container");
let loginButton = document.getElementById("login-button");
let closeModal = document.getElementById("close-icon");

loginButton.onclick = function() {
    modal.style.display = "block";
}

closeModal.onclick = function() {
    modal.style.display = "none";
}
