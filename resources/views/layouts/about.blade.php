@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row g-5 align-items-end">
        <div class="col-lg-6">
            <div class="row g-2">
                <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                    <div class="about-experience bg-secondary rounded">
                        <h1 class="display-1 mb-0">25</h1>
                        <small class="fs-5 fw-bold">Years Experience</small>
                    </div>
                </div>
                <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/service-1.jpg">
                </div>
                <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid rounded" src="img/service-2.jpg">
                </div>
                <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid rounded" src="img/service-3.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
            <h1 class="mb-4">Know About Our Dairy Farm & Our History</h1>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            <div class="row g-5 pt-2 mb-5">
                <div class="col-sm-6">
                    <img class="img-fluid mb-4" src="img/service.png" alt="">
                    <h5 class="mb-3">Dedicated Services</h5>
                    <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita</span>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid mb-4" src="img/product.png" alt="">
                    <h5 class="mb-3">Organic Products</h5>
                    <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita</span>
                </div>
            </div>
            <a class="btn btn-secondary rounded-pill py-3 px-5" href="">Explore More</a>
        </div>
    </div>
</div>

@endsection
