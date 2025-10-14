<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Thread Elite</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">



  {{-- Bootstrap 5 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".main-navbar .dropdown-submenu").forEach(function(submenu) {
      submenu.addEventListener("mouseenter", function() {
        let menu = submenu.querySelector(".dropdown-menu");
        if (!menu) return;

        let rect = menu.getBoundingClientRect();

        // If submenu goes outside screen → open left
        if (rect.right > window.innerWidth - 20) {
          submenu.classList.add("open-left");
        } else {
          submenu.classList.remove("open-left");
        }
      });
    });
  });
</script>
<!-- Bootstrap JS (Bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light main-navbar sticky-top" style="background-color: #680502 ;">
    <div>
      <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <a href="{{ url('/') }}">
        <img src="{{ asset('logo/image1.svg') }}" alt="Ink N Stitch Logo" width="298.9" height="56">
      </a>
    </div>
    <div class="container">
      <!-- Left: Logo -->


      <!-- Right: Search Box -->
      <div class="search-container">
        <div class="search-box">
          <input type="text" class="search-input" placeholder="Enter keywords to search...">
          <button class="search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>



      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Home -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}" style="color: #eceadf !important;">Home</a></li>

          <!-- About -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}" style="color: #eceadf !important;">About Us</a></li>

          <!-- Products -->
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #eceadf !important;">Products</a>
          </li>

          <!-- Contact -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}" style="color: #eceadf !important;">Contact</a></li>
          <!-- phone number -->

          <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/phonenumber') }}" style="fontco"><i class="fas fa-phone"></i> +91 98222 92306 </a></li> -->
          <li class="nav-item">
            <a class="nav-link custom-phone-link" href="{{ url('/') }}" style="color: #058ff7 !important;">
              <i class="fas fa-phone"></i>+91 98222 92306
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Secondary Navbar -->
  <!-- Secondary Navbar (Shrunk like product navbar) -->






  <!-- Product Categories Navbar (Full Width) -->
  <!-- Secondary Navbar -->
  <!-- Product Categories Navbar (Shrunk) -->
  <nav class="navbar navbar-expand-lg navbar-light product-navbar border-bottom mb-2 sticky-half-navbar" style="background-color: #eceadf;">
    <div class="container">
      <ul class="navbar-nav mx-auto">

        <!-- Polo T-Shirts -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">POLO T-SHIRTS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Cotton</a>
            <a class="dropdown-item" href="#">Dry Fit</a>
            <a class="dropdown-item" href="#">Female</a>
            <a class="dropdown-item" href="#">Kids</a>
            <a class="dropdown-item" href="#">Branded</a>
          </div>
        </li>

        <!-- Roundneck T-Shirts -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">ROUNDNECK T-SHIRTS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Dry Fit</a>
            <a class="dropdown-item" href="#">Female</a>
            <a class="dropdown-item" href="#">Kids</a>
            <a class="dropdown-item" href="#">Branded</a>
          </div>
        </li>

        <!-- Shirts -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">SHIRTS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Cotton</a>
            <a class="dropdown-item" href="#">Polo</a>
            <a class="dropdown-item" href="#">Female</a>
            <a class="dropdown-item" href="#">Kids</a>
          </div>
        </li>

        <!-- Sweat Shirts -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">SWEAT SHIRTS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Unisex</a>
            <a class="dropdown-item" href="#">Male</a>
            <a class="dropdown-item" href="#">Female</a>
          </div>
        </li>

        <!-- Jackets -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">JACKETS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Leather</a>
            <a class="dropdown-item" href="#">Male</a>
            <a class="dropdown-item" href="#">Unisex</a>
            <a class="dropdown-item" href="#">Female</a>
          </div>
        </li>

        <!-- Uniforms -->
        <li class="nav-item dropdown">
          <a class="nav-link product-link dropdown-toggle" href="#">UNIFORMS</a>
          <div class="dropdown-menu square-box">
            <a class="dropdown-item" href="#">Alvon</a>
            <a class="dropdown-item" href="#">Dangri</a>
            <a class="dropdown-item" href="#">Staff Uniform</a>
            <a class="dropdown-item" href="#">Blazer</a>
          </div>
        </li>

        <!-- Others -->
        <li class="nav-item"><a class="nav-link product-link" href="#">CAPS</a></li>
        <li class="nav-item"><a class="nav-link product-link" href="#">BAGS</a></li>
        <li class="nav-item"><a class="nav-link product-link" href="#">GIFTS</a></li>
      </ul>
    </div>
  </nav>


  <!-- Intro Section -->
  <!-- <div class="container my-3 intro-section">
    <h3 class="intro-heading">
      Your right search for <span>corporate clothing</span> ends here
    </h3>
    <div class="horizontal-line"></div>

    <h5 class="intro-subheading">
      Ink & Stitch, a venture of <strong>Riya Enterprises</strong> with a legacy of 20 years,
      have come up with a one-stop solution for all types of comfortable and trendy garments
      for your company.
    </h5>
  </div> -->



  @include('partials.banner')
  @include('categories.show')
  @include('brands.brand')
  {{-- Main Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="bg-dark text-white text-center py-3 mt-4">
    &copy; {{ date('Y') }} Thread Elite. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/5f5e5e5e5e.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

</body>

</html>