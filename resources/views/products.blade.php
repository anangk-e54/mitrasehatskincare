@extends('layout/webpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>new arrivals</h4>
                    <h2>Mitra Sehat Skincare</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All Products</li>
                        <li data-filter=".cream">Cream</li>
                        <li data-filter=".facial">Facial</li>
                        <li data-filter=".gra">Last Minute</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach( $products as $product )
                        <div class="col-lg-4 col-md-4 all {{$product->category }}">
                            <div class="product-item">
                                <a href="#"><img src="{{  $product->getImage1() }}" alt=""></a>
                                <div class="down-content">
                                    <a href="#">
                                        <h4>{{ $product->name }}</h4>
                                    </a>
                                    <!-- <h6>$16.75</h6> -->
                                    <p class="max-description">{{ $product->description }}</p>
                                    <a href="/product-detail/{{ $product->id }}" class="filled-button">View more</a>
                                    <span>IDR {{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col-lg-4 col-md-4 all dev">
                            <div class="product-item">
                                <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                                <div class="down-content">
                                    <a href="#">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                    <h6>$16.75</h6>
                                    <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                        aspernatur.</p>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>Reviews (24)</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12">
                <ul class="pages">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </div>
</div>

@endsection