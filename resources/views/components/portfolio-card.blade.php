<div class="portfolio-card">

    <img src="{{ $project['image'] }}"
         alt="{{ $project['title'] }}"
         class="portfolio-image">

    <div class="portfolio-content">

        <span class="portfolio-category">
            {{ $project['category'] }}
        </span>

        <h3>{{ $project['title'] }}</h3>

        <p>{{ $project['description'] }}</p>

        <div class="portfolio-technologies">

            @foreach ($project['technologies'] as $technology)
                <span class="technology">
                    {{ $technology }}
                </span>
            @endforeach

        </div>

    </div>

</div>
