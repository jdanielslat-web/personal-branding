@extends('layouts.app')

@section('title', 'Contact | Julio Slat')

@section('content')

<section class="page-section">

    <span class="tag">GET IN TOUCH</span>

    <h1 class="page-title">Contact Me</h1>

    <p class="page-description">
        Feel free to contact me if you have any questions,
        project ideas, or opportunities to collaborate.
    </p>

    <div class="info-card">
        <h3>Email</h3>

        <p>
            <a class="contact-link"
               href="mailto:your.email@example.com">
                jdanielslat@student.ciputra.ac.id
            </a>
        </p>
    </div>

    <div class="info-card">
        <h3>GitHub</h3>

        <p>
            <a class="contact-link"
               href="https://github.com/yourusername"
               target="_blank">
                Visit My GitHub
            </a>
        </p>
    </div>

</section>

@endsection
