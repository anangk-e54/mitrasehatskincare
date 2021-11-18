@extends('layout/webpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')

<!-- Page Content -->
<div class="page-heading about-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>about</h4>
                    <h2>Mitra Sehat Skincare</h2>
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
                    <h2>Our Background</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{ asset('assets/images/tumbnail.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Who we are &amp; What we do?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur
                        similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                        perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et,
                        consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium
                        quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/mitrasehat.skincare/" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://shopee.co.id/shop/590262280/" target="_balnk"><i
                                    class="fas fa-shopping-bag"></i></a></li>
                        <li><a href="https://www.tokopedia.com/mitrasehatskincare" target="_blank"><i
                                    class="fas fa-store"></i></a></li>
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
                    <h2>Testimonials</h2>
                </div>
            </div>
            @foreach( $customers as $customer )
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{ $customer->getPhoto1() }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="{{ $customer->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $customer->instagram }}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ $customer->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>{{ $customer->name }}</h4>
                        <span>{{ $customer->profession }}</span>
                        <p class="max-description ">{{ $customer->testimonial }}</p>
                        <a href="/customer-detail/{{ $customer->id }}" class="filled-button">View more</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="assets/images/team_02.jpg" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>Karry Pitcher</h4>
                        <span>Product Expert</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>


<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item">
                    <div class="icon">
                        <i class="far fa-grin"></i>
                    </div>
                    <div class="down-content">
                        <h4>Present Healty</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <div class="icon">
                        <i class="far fa-laugh-wink"></i>
                    </div>
                    <div class="down-content">
                        <h4>Present Beauty</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <div class="icon">
                        <i class="far fa-grin-stars"></i>
                    </div>
                    <div class="down-content">
                        <h4>Halal Skincare</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Happy Partners</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel">
                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="1">
                        <div class="down-content text-center">
                        </div>
                    </div>

                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="2">
                    </div>

                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="3">
                    </div>

                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="4">
                    </div>

                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="5">
                    </div>

                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection