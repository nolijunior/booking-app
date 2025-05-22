const header = document.querySelector("header")

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('open');
};

document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menu-icon");
    const navbar = document.querySelector(".navbar");
    menuIcon.addEventListener("click", function () {
        navbar.classList.toggle("open");
    });
    window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });
});