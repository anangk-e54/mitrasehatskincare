@extends('layout/webpage')

@section('tittle', 'Mitra Sehat Skincare')

@section ('content')

<!-- Page Content -->
<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>contact us</h4>
                    <h2>let’s get in touch</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our Location on Maps</h2>
                </div>
            </div>
            <div class="col-md-8">
                <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2011004300684!2d112.37195739276353!3d-7.102676979354222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778c1486f87995%3A0xc37dcef7bcbe8f9e!2sRS%20Bedah%20Mitra%20Sehat!5e0!3m2!1sid!2sid!4v1623428644986!5m2!1sid!2sid"
                        width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
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


<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Send us a Message</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact" action="mailto:rsbmitrasehatlamongan@gmail.com" method="post"
                        enctype="text/plain">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Send
                                        Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="accordion">
                    <li>
                        <a>Accordion Title One</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti
                                elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Second Title Here</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti
                                elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Accordion Title Three</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti
                                elite.</p>
                        </div>
                    </li>
                    <li>
                        <a>Fourth Accordion Title</a>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti
                                elite.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 
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
                    <div class="client-item">
                        <img src="assets/images/client-01.png" alt="1">
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
</div> -->

@endsection