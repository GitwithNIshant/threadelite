<section class="banner py-" style="background-color: #680502;">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side (Text Content) -->
            <div class="col-md-6 text-center text-md-start text-light">
                <div class="intro-section mb-4">
                    <h2 class="intro-heading fw-bold" style="color: #eceadf;">
                        Your right search for <span style="color: #fff176;">corporate clothing</span> ends here
                    </h2>
                </div>                

                <h5 class="intro-subheading mb-3" style="color: #eceadf;">
                    Thread Elite, a venture of <strong>Riya Enterprises</strong> with a legacy of 20 years, have come up with a one-stop solution for all types of comfortable and trendy garments for your company. 
                </h5>

                <p style="font-size: 18px; color: #eceadf; margin: 20px 0; line-height: 1.6; font-family: Arial, sans-serif;">
                    – Your <span style="font-weight: 700; color: #fff176;">One-Stop Shop</span> for 
                    <span style="font-weight: 700; color: #fff176;">Custom Clothing</span> & Merchandise
                </p>

                <a href="{{ route('categories.index') }}" 
                   class="btn btn-light btn-md fw-bold px-4 py-2 rounded-pill"
                   style="color:#680502; background:#eceadf; border:none; margin-top: 20px;">
                    Shop Now
                </a>
            </div>

            <!-- Right Side (Banner Slider) -->
            <div class="col-md-6 text-center">
                <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="{{ asset('images/banner-img/img1.jpg') }}" class="d-block w-100 fixed-slider-img" alt="Banner 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner-img/img2.jpg') }}" class="d-block w-100 fixed-slider-img" alt="Banner 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner-img/img3.jpg') }}" class="d-block w-100 fixed-slider-img" alt="Banner 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner-img/img4.jpg') }}" class="d-block w-100 fixed-slider-img" alt="Banner 4">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('categories.index')
</section>
