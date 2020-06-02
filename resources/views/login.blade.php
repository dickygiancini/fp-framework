@extends('template/guest')

@section('title', 'Pemesanan Bioskop')

@section('bodysec')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
                <nav class="d-flex align-items-center">
                    <a href="{{ url('/') }}">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="{{ url('/login') }}">Login</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ url('/assets/images/login_images.jpg')}}" alt="">
                    <div class="hover">
                        <h4>Sudah Daftar di Website kami?</h4>
                        <p>Saatnya pesan tiket mudah hanya disini</p>
                        <a class="primary-btn" href="{{ url('/register') }}">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                <form class="row login_form" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

@endsection