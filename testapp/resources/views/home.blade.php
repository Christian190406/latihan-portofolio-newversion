
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-content">
        <p class="hero-greeting">WELCOME TO MY PORTFOLIO</p>

        <h1>Hi, I'm <span>Christian</span></h1>

        <h2>Mechatronics Student | Technology Enthusiast</h2>

        <p>
            Saya adalah mahasiswa Mekatronika yang tertarik pada
            teknologi, pemrograman, elektronika, dan pengembangan web.
        </p>

        <!-- MY PHILOSOPHY CARD -->
        <div class="quote-card">
            <div class="quote-label">MY PHILOSOPHY</div>

            <p>
                "Hal-hal hebat dibangun melalui
                kreativitas, konsistensi, dan
                keberanian untuk terus belajar"
            </p>

            <span>— Keep Growing, Keep Creating.</span>
        </div>

        <a href="{{ route('about') }}" class="btn-primary">
            About Me
        </a>

        <a href="{{ route('contact') }}" class="btn-secondary">
            Contact Me
        </a>
    </div>
</section>


<section class="skills-section" id="skills">

    <div class="section-heading">
        <p class="section-subtitle">MY EXPERTISE</p>
        <h1>My <span>Skills</span></h1>
        <p>Bidang teknologi yang sedang saya pelajari dan kembangkan.</p>
    </div>

    <div class="skills-container">

        <div class="skill-card">
            <h2>Web Development</h2>
            <p>HTML, CSS, JavaScript, Bootstrap, PHP, Laravel</p>
        </div>

        <div class="skill-card">
            <h2>Programming</h2>
            <p>C++, Python, dan dasar pemrograman</p>
        </div>

        <div class="skill-card">
            <h2>Mechatronics</h2>
            <p>Elektronika, sensor, aktuator, dan sistem kendali</p>
        </div>

    </div>

</section>


<section class="projects-section" id="projects">

    <div class="section-heading">
        <p class="section-subtitle">MY RECENT WORK</p>
        <h1>My <span>Projects</span></h1>
        <p>Beberapa proyek yang saya kerjakan dalam bidang teknologi.</p>
    </div>

    <div class="projects-container">

        <div class="project-card">
            <div class="project-content">
                <p class="project-category">WEB DEVELOPMENT</p>
                <h2>Personal Portfolio Website</h2>
                <p>
                    Website portfolio pribadi yang dikembangkan
                    menggunakan HTML, CSS, JavaScript, PHP, dan Laravel.
                </p>
                <span class="project-tech">HTML • CSS • JavaScript • Laravel</span>
            </div>
        </div>

        <div class="project-card">
            <div class="project-content">
                <p class="project-category">MECHATRONICS</p>
                <h2>Automatic Garage Door</h2>
                <p>
                    Rancangan pintu garasi otomatis menggunakan
                    motor DC, sensor, dan sistem kendali.
                </p>
                <span class="project-tech">DC Motor • Sensor • Control System</span>
            </div>
        </div>

        <div class="project-card">
            <div class="project-content">
                <p class="project-category">DIGITAL ELECTRONICS</p>
                <h2>Smart Locker</h2>
                <p>
                    Rancangan loker pintar menggunakan rangkaian
                    logika digital untuk sistem akses dan penguncian.
                </p>
                <span class="project-tech">Digital Logic • Electronics</span>
            </div>
        </div>

    </div>

</section>

@endsection
