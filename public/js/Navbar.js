const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav ul");

if (hamburger && navMenu) {
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
} else {
    console.error("Hamburger or nav elements not found in the DOM.");
}

const navLinks = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinks.forEach(navLink => {
    if (navLink.href.includes(windowPathname)) {
        navLink.classList.add('active-nav')
    } 
})