@extends('layouts.app')

@section('title', 'Projects')

@section('content')
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
@endsection


