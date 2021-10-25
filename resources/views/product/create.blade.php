@extends('layout/adminpage')

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

<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>ADD NEW PRODUCT</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact" method="post" action="/product/store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Product Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="category" type="text" class="form-control" id="category"
                                        placeholder="Product Category" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="price" type="number" class="form-control" id="price"
                                        placeholder="Price" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="description" rows="6" class="form-control" id="description"
                                        placeholder="Your description" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="file" name="image1"
                                        class="form-control @error ('image1') is-invalid @enderror" id="image1"
                                        value="{{ old('image1')}}  required=""">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="file" name="image2"
                                        class="form-control @error ('image2') is-invalid @enderror" id="image2"
                                        value="{{ old('image2')}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="file" name="image3"
                                        class="form-control @error ('image3') is-invalid @enderror" id="image3"
                                        value="{{ old('image3')}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="file" name="image4"
                                        class="form-control @error ('image4') is-invalid @enderror" id="image4"
                                        value="{{ old('image4')}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="file" name="image5"
                                        class="form-control @error ('image5') is-invalid @enderror" id="image5"
                                        value="{{ old('image5')}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Save Change</button>
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

@endsection