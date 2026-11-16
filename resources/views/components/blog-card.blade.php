<div class="blog-card">

    <img
        src="{{ $post['image'] }}"
        alt="{{ $post['title'] }}"
        class="blog-image"
    >

    <div class="blog-content">

        <span class="blog-category">
            {{ $post['category'] }}
        </span>

        <h3>{{ $post['title'] }}</h3>

        <span class="blog-date">
            {{ \Carbon\Carbon::parse($post['date'])->format('d F Y') }}
        </span>

        <p>{{ $post['excerpt'] }}</p>

        <a href="{{ route('blog.show', $post['slug']) }}"
           class="read-more">
            Read More →
        </a>

    </div>

</div>
