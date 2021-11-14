@extends('layout/adminpage')

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
                    <h2>Product List</h2>
                    <a href="/promotion/create" class="filled-button">New Promotion
                        <!-- <i class="fa fa-angle-right"></i> -->
                    </a>
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
                        <h5>IDR {{ $promotion->disc_price }}</h5>
                        <p><small><del>IDR {{ $promotion->price }}</del></small></p>
                        <p class="max-description">{{ $promotion->description}}</p>
                        <!-- <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul> -->
                        <!-- <span>IDR {{ $promotion->price }}</span> -->
                        <ul>
                            <li>
                                <a href="/promotion/{{ $promotion->id }}"
                                    class="btn btn-rounded btn-primary btn-xs ">View</a>
                            </li>
                            <li>
                                <!-- <a href="/promotions/{{ $promotion->id }}/edit" class="btn btn-rounded btn-warning btn-xs " ><i class="ti-pencil-alt"><span>&nbsp;Edit</span></i></a> -->
                            </li>
                            <li>
                                <form action="/promotion/{{ $promotion->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-rounded btn-danger btn-xs"
                                        onclick="return confirm('Are you sure Delete this Data?')">Delete</span></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
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
                            <h4>Creative &amp; Unique <em>Nexgen</em> Products</h4>
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