/* Nadeeja - popup of lecture and support teams js */

// Lecture Team Modal
const openBtn = document.getElementById("openModal");
const closeBtn = document.getElementById("closeModal");
const modal = document.getElementById("modal");

openBtn.addEventListener("click", () => {
    modal.classList.add("open");
});

closeBtn.addEventListener("click", () => {
    modal.classList.remove("open");
});

// Support Team Modal
const openSupportBtn = document.getElementById("openSupportModal");
const closeSupportBtn = document.getElementById("closeSupportModal");
const supportModal = document.getElementById("supportModal");

openSupportBtn.addEventListener("click", () => {
    supportModal.classList.add("open");
});

closeSupportBtn.addEventListener("click", () => {
    supportModal.classList.remove("open");
});
