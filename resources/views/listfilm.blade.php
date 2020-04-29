@extends('template/guest')

@section('title', 'List | Pemesanan Bioskop')

@section('bodysec')
<br><br><br>
<section class="features-area section_gap">
  <div class="container">
    <h1>Now Playing</h1>
    <div class="row">
      @foreach ($nowPlayingMovies as $listMovies)
      <!-- now playing product -->
      <div class="col-lg-3 col-md-6">
          <div class="single-product">
              <a href="#">
                <img class="img-fluid" src="{{ 'https://image.tmdb.org/t/p/w500/'.$listMovies['poster_path'] }}" alt="poster">
              </a>
              <div class="product-details">
                <a href="">
                  <h6>{{ $listMovies['title'] }}</h6>
                </a>
                  <div class="price">
                    <i class="fas fa-star"></i>
                    <h6>{{ $listMovies['vote_average'] * 10 }}% |</h6>
                    <h6>{{ \Carbon\Carbon::parse($listMovies['release_date'])->format('M d, Y') }}</h6>
                  </div>
                  <div class="prd-bottom">
                    {{-- <h6>Action</h6> --}}
                    @foreach ($listMovies['genre_ids'] as $genre)
                        {{ $genres->get($genre) }}@if (!$loop->last),
                        @endif
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
        @break;
      <!-- end now playing product -->
      @endforeach
    </div>

      <h1>List Upcoming Film</h1>
      <div class="row">
        @foreach ($popularMovies as $listMovies)
        <!-- single product -->
        <div class="col-lg-3 col-md-6">
            <div class="single-product">
                <a href="#">
                  <img class="img-fluid" src="{{ 'https://image.tmdb.org/t/p/w500/'.$listMovies['poster_path'] }}" alt="poster">
                </a>
                <div class="product-details">
                  <a href="">
                    <h6>{{ $listMovies['title'] }}</h6>
                  </a>
                    <div class="price">
                      <i class="fas fa-star"></i>
                      <h6>{{ $listMovies['vote_average'] * 10 }}% |</h6>
                      <h6>{{ \Carbon\Carbon::parse($listMovies['release_date'])->format('M d, Y') }}</h6>
                    </div>
                    <div class="prd-bottom">
                      {{-- <h6>Action</h6> --}}
                      @foreach ($listMovies['genre_ids'] as $genre)
                          {{ $genres->get($genre) }}@if (!$loop->last),
                          @endif
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end single product -->
        @endforeach
      </div>
  </div>
</section>
@endsection