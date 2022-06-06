{{-- awal card --}}
<div class="col">
    <div class="card mb-3" style="width: 100%;">
        <div class="row">
            <div style="col-md-12">
                <a class="text-decoration-none" href="{{ route('posts-game', $game->game_name) }}">
                    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
                        class="card-img-top gambar"></a>
            </div>
            <div class="col-md-8" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-decoration-none"
                            href="{{ route('posts-game', $game->game_name) }}">{{ Illuminate\Support\Str::of($game->game_name)->words(10) }}</a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Genre: <a class="text-decoration-none"
                            href="{{ route('sub-genre', $game->genre->genre_name) }}">{{ $game->genre->genre_name }}</a>
                    </h6>
                    <p class="card-text">
                    <p>{!! Illuminate\Support\Str::of($game->game_description)->words(20) !!}</p>
                    </p>
                    <p class="card-text"><small class="text-muted">Studio:
                            {{ $game->studio->studio_name }} | Platform:
                            {{ $game->platform->platform_name }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- akhir card --}}
