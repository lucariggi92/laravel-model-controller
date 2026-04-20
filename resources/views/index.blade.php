@extends("layouts.master")

@section("grid card")
<section class="py-5">
    <div class="container-fluid px-5">
        <h2 class="text-white mb-4 fs-4 fw-bold">I film più votati per te</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-6 g-3"> 
             @foreach($movies as $movie)
                <div class="col">
                  <a href="/" class="text-decoration-none">
                    <x-card 
                        :title="$movie->title" 
                        :original="$movie->original_title"
                        :nationality="$movie->nationality"
                        :date="$movie->date"
                        :vote="$movie->vote"
                    />
                  </a>
                </div>
             @endforeach
        </div>
    </div>
</section>
@endsection