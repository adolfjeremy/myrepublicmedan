const navbar = document.querySelector(".navbar-expand-lg");

document.addEventListener("scroll", () => {
    if (scrollY > 50) {
        navbar.classList.add("scrolled");
    }

    if (scrollY < 50) {
        navbar.classList.remove("scrolled");
    }
});
