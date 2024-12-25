
@section('content')

<div class="header02 py-5">
    <div class="row align-items-center">
        <!-- Profile Picture -->
        <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
            <div class="image-wrapper">
                <img src="{{ asset('images/Shahin_Alam_pic.jpeg') }}" alt="Shahin Alam" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover; border: 5px solid #f2ac2b;">
            </div>
        </div>

        <!-- Introductory Text -->
        <div class="col-12 col-lg-6">
            <div class="content-wrapper text-center text-lg-start">
                <h1 class="mbr-section-title mb-3">Hello, I'm Shahin Alam</h1>
                <h3 class="mbr-section-subtitle mb-3 text-secondary">A Passionate PHP Laravel Developer</h3>
                <p class="mbr-text mb-4">
                    Crafting elegant, scalable web solutions using Laravel. Experienced in backend development, database design, and creating dynamic web applications.
                </p>
                <div class="mbr-section-btn">
                    <a class="btn btn-primary me-2" href="{{ asset('files/your_resume.pdf') }}" target="_blank">View Resume</a>
                    <a class="btn btn-secondary" href="#contact">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
{{-- Header section end --}}








{{-- Project section start --}}
<section class="projects-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Projects</h2>
        
        <div class="row">
            <!-- Repeat this block for each project -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="project-card card shadow-sm">
                    <img src="{{ asset('images/demoproject.png') }}" class="card-img-top" alt="Project Title">
                    <div class="card-body">
                        <h3 class="card-title">FoodHub</h3>
                        <p class="card-text">
                            A recipe-sharing platform built using Laravel, ReactJS, and MongoDB with authentication via Firebase and payment integration.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="project_demo_link" class="btn btn-primary">View Demo</a>
                            <a href="project_github_link" class="btn btn-secondary">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Project section end --}}




 {{-- skill section start --}}
 <section class="skills-section">
    <div class="container">
        <h2 class="section-title">Skills</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <h3>Backend Development</h3>
                    <p>PHP (Laravel, CodeIgniter), RESTful APIs, Database Management (MySQL).</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <h3>Frontend Development</h3>
                    <p>HTML5, CSS3, JavaScript (React, Vue.js), Bootstrap, Tailwind CSS.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <h3>Tools & Platforms</h3>
                    <p>Git, Docker, VS Code, Postman, Firebase, Linux Server Administration.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- skill section end --}}






{{-- contact section start --}}
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
                <a href="mailto:yourname@gmail.com" class="btn btn-danger" target="_blank">
                    <i class="fas fa-envelope"></i> Email
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/yourphonenumber" class="btn btn-success" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <!-- Messenger -->
                <a href="https://m.me/yourusername" class="btn btn-primary" target="_blank">
                    <i class="fab fa-facebook-messenger"></i> Messenger
                </a>
                <!-- GitHub -->
                <a href="https://github.com/yourusername" class="btn btn-dark" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/yourusername" class="btn btn-info" target="_blank">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>
    </div>
</section>
{{-- contact section end --}}

{{-- contact section end --}}

@endsection