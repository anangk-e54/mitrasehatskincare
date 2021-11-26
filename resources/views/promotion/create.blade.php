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
                    <form id="contact" method="post" action="/promotion/store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Product Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Product Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="category">Product Category</label>
                                    <select name="category" type="text" class="form-control" id="category"
                                        placeholder="Product Category" required="">
                                        <option>Choose product category</option>
                                        <option value="facialwash"> facialwash </option>
                                        <option value="handbody"> handbody </option>
                                        <option value="daycream"> daycream </option>
                                        <option value="nightcream"> nightcream </option>
                                        <option value="cleansing"> cleansing </option>
                                        <option value="bbglow"> bbglow </option>
                                        <option value="serum"> serum </option>
                                        <option value="toner"> toner </option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="price">Unit Price</label>
                                    <input name="price" type="number" class="form-control" id="price"
                                        placeholder="Price" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="disc_price">Discount Price</label>
                                    <input name="disc_price" type="number" class="form-control" id="disc_price"
                                        placeholder="disc_Price" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="shop_link">Shop Link</label>
                                    <input name="shop_link" type="text" class="form-control" id="shop_link"
                                        placeholder="shop_link" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="description">Product Description</label>
                                    <textarea name="description" rows="6" class="form-control" id="description"
                                        placeholder="Your description" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label>First Image</label>
                                    <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg"
                                        style="display:none;">
                                    <input type="file" name="image1"
                                        class="form-control @error ('image1') is-invalid @enderror" id="readUrl"
                                        value="{{ old('image1')}}  required=""">
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
                        <a>Product Name</a>
                        <div class="content">
                            <p>>Product name is unique for each single product variant. Please make sure that each your
                                product name isn't duplicated. Because if it's same, you can't update or add those new
                                product.</p>
                        </div>
                    </li>
                    <li>
                        <a>Product Category</a>
                        <div class="content">
                            <p>Select one of product category, it will be use for filter product by category on
                                clientsite. if you have new product category please <a rel="nofollow"
                                    href="https://wa.me/6282229211313" target="_blank">contact us</a> to add new product
                                category.</p>
                        </div>
                    </li>
                    <li>
                        <a>Unit Price</a>
                        <div class="content">
                            <p>Enter the unit price only integers without dot( . ) or comma( , ) separator. eg. "50000".
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Upload Image</a>
                        <div class="content">
                            <p>Please make sure that your image
                                is rectagle, we recomended 1080px for best resolution and file size is less than 300kb
                                for best load performace.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection