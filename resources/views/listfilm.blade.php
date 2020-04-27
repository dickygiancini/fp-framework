@extends('template/guest')

@section('title', 'List | Pemesanan Bioskop')

@section('bodysec')
<br><br><br>
<section class="features-area section_gap">
  <div class="container">
      <h1>List</h1>
      <div class="row">
        @foreach ($popularMovies as $listMovies)
        <!-- single product -->
        <div class="col-lg-3 col-md-6">
            <div class="single-product">
                <img class="img-fluid" src="{{ url('/assets/images/poster/banner_1.jpg') }}" alt="">
                <div class="product-details">
                    <h6>{{ $listMovies['title'] }}</h6>
                    <div class="price">
                      <h6>85% |</h6>
                      <h6> Feb, 18 2017</h6>
                    </div>
                    <div class="prd-bottom">
                      <h6>Action</h6>
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