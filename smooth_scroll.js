const navLinks = document.querySelectorAll("nav a.smooth-scroll");
navLinks.forEach(link => {
    link.addEventListener("click", event => {
        event.preventDefault(); // prevent the browser from following the link
        const sectionId = event.target.getAttribute("href");
        const section = document.querySelector(sectionId);
        section.scrollIntoView({ behavior: "smooth" });
    });
});
