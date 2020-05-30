@extends('template/guest')

@section('title', 'Detail | Pemesanan Bioskop')

@section('bodysec')

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <br><br>
                    <div class="single-prd-item text-center">
                        <img class="img-fluid" src="{{ 'https://image.tmdb.org/t/p/w300/'.$movie['poster_path'] }}" alt="poster">
                    </div>
                <br><br>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{ $movie['title'] }}</h3>
                    <h2>{{ $movie['vote_average'] * 10 }}% Total Rating</h2>
                    <ul class="list">
                        <li><span>Release</span> : {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</li>
                        <li><span>Genre</span> :                     
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }}@if (!$loop->last),
                                @endif
                            @endforeach</li>
                    </ul>
                    <p>{{ $movie['overview'] }}</p>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="#">PESAN TIKET</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

@endsection