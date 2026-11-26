<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Christian Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

   

<!-- Navbar -->
<header>
    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/0286e7ebcdaf6d1c0c9af0abeacffd3b-removebg-preview.png') }}"
                 alt="Logo Christian">
        </a>

        <!-- Tombol Hamburger -->
        <button class="menu-toggle"
                type="button"
                aria-label="Buka menu navigasi"
                aria-expanded="false">
            ☰
        </button>

        <!-- Navigation Links -->
        <ul class="nav-links">

            <li>
                <a href="{{ route('home') }}" data-menu="home">Home</a>
            </li>

            <li>
                <a href="{{ route('home') }}#skills" data-menu="skills">Skills</a>
            </li>

            <li>
                <a href="{{ route('home') }}#projects" data-menu="projects">Projects</a>
            </li>

            <li>
                <a href="{{ route('services') }}" data-menu="services">Services</a>
            </li>

            <li>
                <a href="{{ route('about') }}" data-menu="about">About</a>
            </li>

            <li>
                <a href="{{ route('contact') }}" data-menu="contact">Contact</a>
            </li>

        </ul>

    </nav>
</header>



    <!-- Konten Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Christian Portfolio. All Rights Reserved.</p>
    </footer>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const navLinks = document.querySelectorAll(".nav-links a");

    function updateActiveMenu() {
        const hash = window.location.hash;
        const path = window.location.pathname;

        navLinks.forEach(link => {
            link.classList.remove("active");
        });

        if (hash === "#skills") {
            document.querySelector('[data-menu="skills"]')
                ?.classList.add("active");
        }
        else if (hash === "#projects") {
            document.querySelector('[data-menu="projects"]')
                ?.classList.add("active");
        }
        else if (path === "/" || path === "") {
            document.querySelector('[data-menu="home"]')
                ?.classList.add("active");
        }
        else if (path.includes("/services")) {
            document.querySelector('[data-menu="services"]')
                ?.classList.add("active");
        }
        else if (path.includes("/about")) {
            document.querySelector('[data-menu="about"]')
                ?.classList.add("active");
        }
        else if (path.includes("/contact")) {
            document.querySelector('[data-menu="contact"]')
                ?.classList.add("active");
        }
    }

    updateActiveMenu();

    window.addEventListener("hashchange", updateActiveMenu);

    // Klik Home selalu kembali ke bagian paling atas
    document.querySelector('[data-menu="home"]')
        ?.addEventListener("click", function (event) {
            if (window.location.pathname === "/") {
                event.preventDefault();
                history.replaceState(null, "", window.location.pathname);
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
                updateActiveMenu();
            }
        });

});
</script>
    
<script>
document.addEventListener("DOMContentLoaded", function () {

    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", function () {

        navLinks.classList.toggle("active");

        const isOpen = navLinks.classList.contains("active");

        menuToggle.setAttribute("aria-expanded", isOpen);

        menuToggle.innerHTML = isOpen ? "&times;" : "☰";

    });

    // Tutup menu setelah salah satu pilihan diklik
    navLinks.querySelectorAll("a").forEach(function (link) {

        link.addEventListener("click", function () {

            navLinks.classList.remove("active");

            menuToggle.setAttribute("aria-expanded", "false");

            menuToggle.innerHTML = "☰";

        });

    });

});
</script>
</body>
</html>