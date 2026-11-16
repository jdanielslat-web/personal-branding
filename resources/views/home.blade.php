@extends('layouts.app')

@section('title', 'Home | Julio Slat')

@section('content')

<section class="hero">

    <div class="hero-container">

        <div class="hero-text">

            <span class="tag">
                HELLO, WELCOME TO MY WEBSITE
            </span>

            <h1>
                Hi, I'm <span>Julio Slat</span>
            </h1>

            <p>
                I am an Informatics student with an interest
                in software development, web development,
                and technology.
            </p>

            <a href="/portfolio" class="button">
                Explore My Work
            </a>

        </div>

        <div class="profile-avatar">

            <img
                src="{{ asset('images/profile.jpg') }}"
                alt="Julio Slat Profile Picture"
            >

        </div>

    </div>

</section>

@endsection

