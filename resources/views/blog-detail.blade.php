@extends('layouts.app')

@section('title', $post['title'] . ' | Julio Slat')

@section('content')

<section class="page-section">

    <a href="{{ route('blog') }}" class="read-more">
        ← Back to Blog
    </a>

    <br><br>

    <span class="tag">
        {{ $post['category'] }}
    </span>

    <h1 class="page-title">
        {{ $post['title'] }}
    </h1>

    <span class="blog-date">
        Published on
        {{ \Carbon\Carbon::parse($post['date'])->format('d F Y') }}
    </span>

    <img
        src="{{ $post['image'] }}"
        alt="{{ $post['title'] }}"
        class="blog-detail-image"
    >

    <div class="blog-detail-content">

        <p>{{ $post['content'] }}</p>

    </div>

</section>

@endsection
