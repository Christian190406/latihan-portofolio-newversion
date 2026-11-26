
@extends('layouts.app')

@section('title', 'Services')

@section('content')

<section class="services-section">

    <div class="section-heading">
        <p class="section-subtitle">WHAT I EXPLORE</p>
        <h1>My <span>Services</span></h1>
        <p>
            Bidang teknologi yang saya pelajari dan kembangkan
            selama menempuh pendidikan Mekatronika.
        </p>
    </div>

    <div class="services-container">

        <!-- Web Development -->
        <div class="service-card">
            <p class="service-category">01 / WEB TECHNOLOGY</p>

            <h2>Web Development</h2>

            <p>
                Mempelajari pengembangan website mulai dari
                pembuatan tampilan hingga pengelolaan halaman
                menggunakan teknologi web.
            </p>

            <div class="service-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
                <span>PHP</span>
                <span>Laravel</span>
            </div>
        </div>

        <!-- Programming -->
        <div class="service-card">
            <p class="service-category">02 / SOFTWARE</p>

            <h2>Programming</h2>

            <p>
                Mengembangkan kemampuan pemrograman untuk
                menyelesaikan permasalahan melalui logika
                dan algoritma.
            </p>

            <div class="service-tags">
                <span>C++</span>
                <span>Python</span>
                <span>PHP</span>
                <span>Algorithms</span>
            </div>
        </div>

        <!-- Mechatronics -->
        <div class="service-card">
            <p class="service-category">03 / ENGINEERING</p>

            <h2>Mechatronics</h2>

            <p>
                Mempelajari integrasi sistem mekanik, elektronika,
                sensor, aktuator, dan sistem kendali untuk
                pengembangan teknologi otomasi.
            </p>

            <div class="service-tags">
                <span>Electronics</span>
                <span>Sensor</span>
                <span>Actuator</span>
                <span>Control System</span>
            </div>
        </div>

    </div>

</section>

@endsection
