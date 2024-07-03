window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const scrollY = window.scrollY;

    if (scrollY > 0) {
        navbar.classList.add("bg-white", "shadow-md"); // Add background and shadow on scroll
    } else {
        navbar.classList.remove("bg-white", "shadow-md"); // Remove styles on top
    }
});