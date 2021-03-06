@extends('layout/webpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')

<!-- Page Content -->
<div class="page-heading about-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>about us</h4>
                    <h2>Testimonial details</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>{{ $customer->name }} | {{ $customer->profession }}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{ $customer->getPhoto1() }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <!-- <h4>IDR {{ $customer->profession }}</h4> -->
                    <p>{{ $customer->testimonial }}</p>
                    <ul class="social-icons">
                        <li><a href="{{ $customer->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $customer->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="{{ $customer->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <!-- <h2>Our Team Members</h2> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{ $customer->getPhoto2() }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="{{ $customer->facebook }}" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $customer->instagram}}" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{ $customer->twitter}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="down-content">
                        <h4>Johnny William</h4>
                        <span>CO-Founder</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{ $customer->getPhoto3() }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="{{ $customer->facebook }}" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $customer->instagram}}" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{ $customer->twitter}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="down-content">
                        <h4>Karry Pitcher</h4>
                        <span>Product Expert</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{ $customer->getPhoto4() }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="{{ $customer->facebook }}" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $customer->instagram}}" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{ $customer->twitter}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="down-content">
                        <h4>Michael Soft</h4>
                        <span>Chief Marketing</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{ $customer->getPhoto5() }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="{{ $customer->facebook }}" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $customer->instagram}}" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{ $customer->twitter}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="down-content">
                        <h4>Mary Cool</h4>
                        <span>Product Specialist</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



@endsection