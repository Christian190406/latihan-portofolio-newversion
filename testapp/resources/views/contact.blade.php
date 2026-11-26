
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="contact-section">

    <div class="section-heading">
        <p class="section-subtitle">GET IN TOUCH</p>
        <h1>Contact <span>Me</span></h1>
        <p>
            Silakan hubungi saya untuk berdiskusi, bertukar ide,
            atau membahas peluang kerja sama.
        </p>
    </div>

    <div class="contact-container">

        <div class="contact-info">
            <h2>Let's Connect</h2>

            <p>
                Saya terbuka untuk berdiskusi mengenai teknologi,
                pemrograman, elektronika, dan proyek Mekatronika.
            </p>

            <div class="contact-item">
                <h3>Email</h3>
                <p>christian@example.com</p>
            </div>

            <div class="contact-item">
                <h3>Location</h3>
                <p>Indonesia</p>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send a Message</h2>

            <form action="#" method="POST">

                <input type="text" placeholder="Your Name" required>

                <input type="email" placeholder="Your Email" required>

                <input type="text" placeholder="Subject" required>

                <textarea rows="6" placeholder="Your Message" required></textarea>

                <button type="submit">Send Message</button>

            </form>
        </div>

    </div>

</section>

@endsection
