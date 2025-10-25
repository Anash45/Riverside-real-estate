<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RIVERSIDE Real Estate</title>
  <!-- Bootstrap CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="/assets/css/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.min.css" />
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />

  <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
</head>

<body>
  @yield('content')
  <div class="px-sm-4 px-3 pb-sm-4 pb-3">
    <footer>
      <div class="container px-4">
        <div class="d-flex flex-column gap-5">
          <div class="row gx-xl-5 gx-4">
            <div class="col-xxl-5 col-xl-4 col-lg-3 mb-4 pb-4">
              <a href="./index.html">
                <img src="/assets/images/logo-golden.png" alt="Logo" class="footer-logo" />
              </a>
            </div>
            <div class="col-xxl-7 col-xl-8 col-lg-9">
              <div class="row gx-xl-5 gx-4">
                <div class="mb-4 col-md-3 col-sm-6">
                  <h5 class="font-lora fw-semibold mb-4 f-title">
                    Quick Links
                  </h5>
                  <div class="pt-md-2 d-flex flex-column gap-3">
                    <a href="./index.html" class="f-link lh-1">Home</a>
                    <a href="./index.html#about" class="f-link lh-1">About Riverside</a>
                  </div>
                </div>
                <div class="mb-4 col-md-4 col-sm-6">
                  <h5 class="font-lora fw-semibold mb-4 f-title">
                    Contact Us
                  </h5>
                  <div class="pt-md-2 d-flex flex-column gap-3">
                    <a href="tel:0203 051 0395" class="f-link lh-1">Home</a>
                    <a href="mailto:info@riverside-realestate.com" class="f-link lh-1">info@riverside-realestate.com</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <h5 class="font-lora fw-semibold mb-4 f-title">
                    Resources
                  </h5>
                  <div class="pt-md-2 d-flex flex-column gap-3">
                    <p class="f-text lh-lg">
                      3rd Floor, The News Building, 3 London Bridge St, London
                      SE1 9SG
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column gap-4 sub-footer">
            <div class="f-border"></div>
            <div
              class="d-flex justify-content-between gap-4 text-sm-start text-center flex-wrap flex-lg-row flex-column align-items-center">
              <p class="mb-0">
                © 2025 RIVERSIDE Real Estate all rights reserved
              </p>
              <div class="d-flex align-items-center gap-4 flex-wrap justify-content-center">
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
                <a href="#">Privacy Policy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- jQuery -->
  <script src="/assets/js/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="/assets/js/owl.carousel.min.js"></script>

  <script type="text/javascript" src="/assets/js/slick.min.js"></script>
  <script src="/assets/js/script.js"></script>

  @stack('scripts')

</body>

</html>