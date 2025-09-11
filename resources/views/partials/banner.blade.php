<section class="banner py-3">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side (Text Content) -->
            <div class="col-md-6 text-center text-md-start">
            <div class="container my-3 intro-section " >
                <h2 class="intro-heading" style="margin-bottom: 40px;">
                    Your right search for <span>corporate clothing</span> ends here
                </h2>
            </div>                
             <h5 class="intro-subheading"> Ink & Stitch, a venture of <strong>Riya Enterprises</strong> with a legacy of 20 years, have come up with a one-stop solution for all types of comfortable and trendy garments for your company. </h5>
            <p style="font-size: 18px; color: #1b538bff; margin: 20px 0; line-height: 1.6; font-family: Arial, sans-serif;">
                – Your <span style="font-weight: 700;">One-Stop Shop</span> for 
                <span style="font-weight: 700;">Custom Clothing</span> & Merchandise
            </p>

            <a href="{{ route('categories.index') }}" class="btn btn-dark btn-md fw-bold" style="margin-top: 20px;">
                Shop Now
            </a>
        </div>


            <!-- Right Side (Banner Image) -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/portrait-smiling-beautiful-girl-her-handsome-boyfriend-laughing.jpg') }}" 
                     alt="Banner" 
                     class="img-fluid w-100 rounded"
                     style="max-height: 550px;">
            </div>

        </div>
    </div>
   @include('categories.index')
    
</section>
