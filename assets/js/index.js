// Navigation js
const primaryHeader = document.querySelector(".primary-header");
const navToggle = document.querySelector(".mobile-nav-toggle");
const primaryNav = document.querySelector(".primary-navigation");
const scrollBody = document.querySelector("body");

navToggle.addEventListener("click", () => {
    primaryNav.hasAttribute("data-visible") ? navToggle.setAttribute("aria-expanded", false)
    : navToggle.setAttribute("aria-expanded", true);
    primaryNav.toggleAttribute("data-visible");
    
    primaryHeader.toggleAttribute("data-overlay");
    scrollBody.classList.toggle("no-scroll");
});