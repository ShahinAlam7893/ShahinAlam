@extends('layouts.app')

@section('title', 'hero')

@section('content-hero')
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

@endsection
