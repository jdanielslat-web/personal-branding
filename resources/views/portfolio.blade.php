@extends('layouts.app')

@section('title', 'Portfolio | Julio Slat')

@section('content')

<section class="page-section">

    <span class="tag">MY RECENT WORK</span>

    <h1 class="page-title">My Portfolio</h1>

    <p class="page-description">
        Here are some of my projects and creative works
        related to software development, technology,
        and design.
    </p>

    <div class="portfolio-grid">

        @foreach ($projects as $project)
            <x-portfolio-card :project="$project" />
        @endforeach

    </div>

</section>

@endsection
