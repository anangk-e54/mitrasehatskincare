@extends('layout/adminpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <!-- <h4>Mitra Sehat Skincare</h4> -->
                <h2>Manage Product</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <!-- <h4>Mitra Sehat Skincare</h4> -->
                <h2>Manage Product</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <!-- <h4>Mitra Sehat Skincare</h4> -->
                <h2>Manage Products</h2>
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
                    <a href="/product/create" class="filled-button">New product
                        <!-- <i class="fa fa-angle-right"></i> -->
                    </a>
                </div>
            </div>
            @foreach( $products as $product )
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="{{  $product->getImage1() }}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{ $product->name }}</h4>
                        </a>
                        <!-- <h6>$25.75</h6> -->
                        <h5>IDR {{ $product->price }}</h5>
                        <p class="max-description">{{ $product->description}}</p>

                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <!-- <span>IDR {{ $product->price }}</span> -->
                        <ul>
                            <li>
                                <a href="/product/{{ $product->id }}"
                                    class="btn btn-rounded btn-primary btn-xs ">View</a>
                            </li>
                            <li>
                                <!-- <a href="/products/{{ $product->id }}/edit" class="btn btn-rounded btn-warning btn-xs " ><i class="ti-pencil-alt"><span>&nbsp;Edit</span></i></a> -->
                            </li>
                            <li>
                                <form action="/product/{{ $product->id }}" method="post" class="d-inline">
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

<!-- <div class="best-features">
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
</div> -->


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Creative &amp; Design by <em>Nexgen</em> Creative</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="https://wa.me/6281217217206" class="filled-button">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection