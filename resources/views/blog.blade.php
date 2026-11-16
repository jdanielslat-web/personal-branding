@extends('layouts.app')

@section('title', 'Blog | Julio Slat')

@section('content')

<section class="page-section">

    <span class="tag">MY ARTICLES</span>

    <h1 class="page-title">My Blog</h1>

    <p class="page-description">
        Welcome to my blog! Here I share articles,
        tutorials, and experiences about programming,
        technology, design, and student life.
    </p>

    <div class="blog-grid">

        @foreach ($posts as $post)
            <x-blog-card :post="$post" />
        @endforeach

    </div>

</section>

@endsection
