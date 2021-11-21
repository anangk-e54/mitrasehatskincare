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
                    <h4>Mitra Sehat Skincare</h4>
                    <p>Mitra Sehat Skin Care merupakan bentuk kami untuk memaksimalkan cantik dan sehat bagi semua
                        orang. Mitra Sehat Skin Care berkomitmen untuk menjadikan Cantik dan Sehat mampu dilakukan dan
                        didapatkan bagi semua orang, baik Wanita maupun Pria di Indonesia. Pelayanan dan Kualitas Produk
                        menjadi focus kami agar mampu menyebarkan semangat Cantik dan Sehat kepada semua orang, karena
                        Sehat adalah Cantik yang sesungguhnya.</p>
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
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <div class="down-content">
                        <h4>Branch Name</h4>
                        <p>Address Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                            at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Visit Store</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <div class="icon">
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <div class="down-content">
                        <h4>Branch Name</h4>
                        <p>Address Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                            at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Visit Store</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <div class="icon">
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <div class="down-content">
                        <h4>Branch Name</h4>
                        <p>Address Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                            at quia
                            quaerat.</p>
                        <a href="#" class="filled-button">Visit Store</a>
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
                    <h2>Our Happy Customers</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel">
                    @foreach( $customers as $customer )
                    <div class="client-item">
                        <img src="{{ $customer->getPhoto1() }}" alt="1">
                    </div>
                    @endforeach

                    @foreach( $customers as $customer )
                    <div class="client-item">
                        <img src="{{ $customer->getPhoto2() }}" alt="2">
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection