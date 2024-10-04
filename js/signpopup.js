const navLoginBtn = document.getElementById('nav-signbtn');
const bodyLoginBtn = document.getElementById('body-signinbtn');
const loginModal = document.querySelector('.popup');
const closeBtn = document.getElementById('close-btn');


function openModal() {
    loginModal.classList.add("active");
}

function closeModal() {
    loginModal.classList.remove("active");
}