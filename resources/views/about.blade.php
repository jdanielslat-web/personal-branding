@extends('layouts.app')

@section('title', 'About | Julio Slat')

@section('content')

<section class="page-section">

    <span class="tag">GET TO KNOW ME</span>

    <h1 class="page-title">About Me</h1>

    <p class="page-description">
        Hello! My name is Julio Slat. I am an Informatics
        student who is interested in technology and software
        development. I enjoy learning new things and
        developing projects that solve real-world problems.
    </p>

    <div class="info-card">
        <h3>Education</h3>

        <p>
            Informatics Student<br>
            Universitas Ciputra
        </p>
    </div>

    <div class="info-card">
        <h3>My Skills</h3>

        <div class="skill-list">
            @foreach ($skills as $skill)
                <span class="skill-item">
                    {{ $skill }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="info-card">
        <h3>My Interests</h3>

        <p>
            Software Development, Web Development,
            Mobile Application Development, and UI/UX Design.
        </p>
    </div>

</section>

@endsection
