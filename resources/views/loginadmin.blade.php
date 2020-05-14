@extends('template/guest')

@section('title', 'Login Admin')

@section('bodysec')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <h3>Login Admin</h3>
                <form class="row login_form" action="{{ route('loginadmin') }}" method="post">
                    {{ csrf_field() }}
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

@endsection