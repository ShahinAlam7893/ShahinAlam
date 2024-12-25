
@extends('layouts.app')

@section('content-skill')
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
    
@endsection