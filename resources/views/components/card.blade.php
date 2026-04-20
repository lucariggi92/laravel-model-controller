@props(['title', 'original', 'nationality', 'date', 'vote'])

<div class="card movie-card h-100 shadow-sm">
    <div style="aspect-ratio: 16/9; background: #1a242f; display: flex; align-items: center; justify-content: center; border-bottom: 2px solid #00a8e1">
         <i class="bi bi-play-fill" style="font-size: 2rem; color: white;"></i>
    </div>

    <div class="card-body">
        <h5 class="card-title text-white" title="{{ $title }}">{{ $title }}</h5>
        
        <div class="info-overlay mb-2">
            <span class="badge bg-dark border border-secondary">{{ strtoupper($nationality) }}</span>
            <span class="ms-2 small">{{ $date }}</span>
        </div>

        <div class="stars-container">
            @for ($i = 1; $i <= 10; $i++)
                <span class="star {{ $i <= $vote ? 'star-filled' : 'star-empty' }}">
                    ★
                </span>
            @endfor
        </div>

        <div class="mt-1">
            <strong class="text-white small">{{ number_format($vote, 1) }}</strong>
            <span class="text-secondary small">/ 10</span>
        </div>
    </div>
</div>