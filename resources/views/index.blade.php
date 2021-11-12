@extends('layout/webpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="/products">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach( $promotions as $promotion )
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="{{  $promotion->getImage1() }}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{ $promotion->name }}</h4>
                        </a>
                        <!-- <h6>$25.75</h6> -->
                        <p>{{ $promotion->description}}.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>IDR {{ $promotion->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>Tittle goes here</h4>
                        </a>
                        <h6>$30.25</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (21)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>Tittle goes here</h4>
                        </a>
                        <h6>$20.45</h6>
                        <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (36)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>Tittle goes here</h4>
                        </a>
                        <h6>$15.25</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (48)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>Tittle goes here</h4>
                        </a>
                        <h6>$12.50</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (16)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>Tittle goes here</h4>
                        </a>
                        <h6>$22.50</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (32)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Mitra Sehat Skincare</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Looking for the best products?</h4>
                    <p><a rel="nofollow" href="https://wa.me/6282229211313" target="_parent">This
                            template</a> is free to use for your business websites. However, you have no permission to
                        redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow"
                            href="https://wa.me/6282229211313" target="_blank">Contact us</a> for more info.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                        <li><a href="#">Non cum id reprehenderit</a></li>
                    </ul>
                    <a href="/about" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/images/feature-image.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4> -->
                            <h4>Mitra Sehat Skincare</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="/products" class="filled-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection