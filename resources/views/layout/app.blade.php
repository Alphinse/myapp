<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 11</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/gallery">Gallery</a>
                    <a class="nav-link" href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <div class="container py-5 my-5">
        @yield('content')
    </div>
    <footer class="footer mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Hubungi Kami</h5>
        <ul class="list-unstyled">
          <li><a href="mailto:info@example.com"><i class="fas fa-envelope"></i> info@example.com</a></li>
          <li><a href="tel:+628123456789"><i class="fas fa-phone"></i> +628123456789</a></li>
          <li><a href="https://www.facebook.com/yourexamplepage"><i class="fab fa-facebook-f"></i> Facebook</a></li>
          <li><a href="https://twitter.com/yourexampleaccount"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li><a href="https://www.instagram.com/yourexampleaccount/"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="https://wa.me/+628123456789"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id quam eget lectus ullamcorper hendrerit sit amet a quam. Donec neque leo, aliquam sit amet leo sed, tincidunt mattis dui. Sed ut quam nec lectus varius mattis.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>

      <div class="col-md-4">
        <h5>Lain-lain</h5>
        <ul class="list-unstyled">
          <li><a href="#">Syarat & Ketentuan</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Bantuan</a></li>
        </ul>
      </div>
    </div>

    <div class="row mt-4 text-center">
      <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
