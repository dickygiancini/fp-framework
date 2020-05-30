@extends('template/guest')

@section('title', 'Pemesanan Bioskop')

@section('bodysec')
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Deadpool 2</h1>
                                <p>Wade Wilson berusaha melindungi seorang mutan misterius bernama Russell yang diincar oleh Cable. Cable sendiri merupakan mutan yang datang dari masa depan. Untuk melindungi Russell, Wade lalu membentuk sebuah tim bernama X-Force yang beranggotakan Deadpool sendiri, Domino, Negasonic Teenage Warhead, Colossus, dan Bedlam.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{ url('/assets/images/banner/home_deadpool.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Deadpool 2</h1>
                                <p>Wade Wilson berusaha melindungi seorang mutan misterius bernama Russell yang diincar oleh Cable. Cable sendiri merupakan mutan yang datang dari masa depan. Untuk melindungi Russell, Wade lalu membentuk sebuah tim bernama X-Force yang beranggotakan Deadpool sendiri, Domino, Negasonic Teenage Warhead, Colossus, dan Bedlam.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{ url('/assets/images/banner/home_deadpool.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ url('/assets/img/features/f-icon1.png') }}" alt="">
                    </div>
                    <h6>Free</h6>
                    <p>Tidak dipungut biaya tambahan</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ url('/assets/img/features/f-icon2.png') }}" alt="">
                    </div>
                    <h6>Return Policy</h6>
                    <p>Full refund apabila terjadi kesalahan</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ url('/assets/img/features/f-icon3.png') }}" alt="">
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Konfirmasi apapun dalam 24/7</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ url('/assets/img/features/f-icon4.png') }}" alt="">
                    </div>
                    <h6>Secure Payment</h6>
                    <p>Pembayaran aman</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Film Telah Tayang</h1>
                        <p>Film yang telah menjadi primadona aplikasi kami</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/banner_1.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>Avengers</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_2.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>avengers infinity war</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_3.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>kimi no nawa</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_4.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>mib international</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_5.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>fate series</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_6.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>alita battle angel</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_7.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>jumanji</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/images/poster/poster_8.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>kishuku gakkou no juliet</h6>
                            <div class="price">
                                <h6>Expired</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Coming Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p6.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p8.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">Rp. 50.000</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p3.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p5.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p1.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p4.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p1.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ url('/assets/img/product/p8.jpg') }}" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->
@endsection