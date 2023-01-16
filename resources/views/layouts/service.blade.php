@extends('layouts.master')

@section('servicecontent')
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Services</p>
            <h1 class="mb-5">Services That We Offer For Entrepreneurs</h1>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                        </div>
                        <h5 class="mb-3">Best Animal Selection</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                diam stet diam sed stet.</p>
                            <a class="btn btn-square rounded-circle" href=""><i
                                    class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="">
                        </div>
                        <h5 class="mb-3">Breeding & Veterinary</h5>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet.</p>
                        <a class="btn btn-square rounded-circle" href=""><i
                                class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="">
                        </div>
                        <h5 class="mb-3">Care & Milking</h5>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet.</p>
                        <a class="btn btn-square rounded-circle" href=""><i
                                class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
