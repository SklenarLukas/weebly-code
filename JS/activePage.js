const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("nav a").forEach(link => {
    if (activePage === "/index.php") {
        link.classList.add("active");
    }
    else if (link.href.includes(`${activePage}`)) {
        link.classList.add("active");
    }
});
