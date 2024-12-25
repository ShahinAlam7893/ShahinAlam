@extends('layouts.app')

@section('title', 'contact')

@section('content')
{{-- contact section start --}}
<section id="contact" class="contact-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Get in Touch</h2>
        
        <!-- Contact Form -->
        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required class="form-control mb-3">
            <input type="email" name="email" placeholder="Your Email" required class="form-control mb-3">
            <textarea name="message" placeholder="Your Message" rows="5" required class="form-control mb-3"></textarea>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>

        <!-- Social Links and API Integrations -->
        <div class="social-links text-center mt-4">
            <h4>Connect with Me</h4>
            <div class="d-flex justify-content-center gap-3">
                <!-- Email -->
                <a href="mailto:shahinalam7893@gmail.com" class="btn btn-danger" target="_blank">
                    <i class="fas fa-envelope"></i> Email
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/01993156181" class="btn btn-success" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <!-- Messenger -->
                <a href="https://www.facebook.com/sahinalom.santo.3" class="btn btn-primary" target="_blank">
                    <i class="fab fa-facebook-messenger"></i> Messenger
                </a>
                <!-- GitHub -->
                <a href="https://github.com/dfgdsgf" class="btn btn-dark" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/shahin-alam7892/" class="btn btn-info" target="_blank">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>
    </div>
</section>
{{-- contact section end --}}

@endsection('content')