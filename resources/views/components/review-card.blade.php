<div class="col-md-4 mb-4">
    <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text">"{{ $review }}"</p>
            <div class="stars">
                @for ($i = 0; $i < $rating; $i++)
                    <i class="bi bi-star-fill text-warning"></i>
                @endfor
                @for ($i = $rating; $i < 5; $i++)
                    <i class="bi bi-star text-secondary"></i>
                @endfor
            </div>
        </div>
    </div>
</div>
