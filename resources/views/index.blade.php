@extends('layouts.app')

@section('content')
  <main class="pb-5">
    <section class="hero-sec">
      <div class="container">
        <nav>
          <a href="./index.html">
            <img src="/assets/images/logo.png" alt="Logo" class="img-fluid logo" style="height: 42px" />
          </a>
        </nav>
        <div class="d-flex align-items-center justify-content-between flex-wrap">
          <div class="hero-content d-flex flex-column gap-4 py-5">
            <h1 class="hero-title font-dm-serif mb-3">
              Invest in Dubai's
              <span class="text-gradient">$142 Billion</span>
              Property Boom
            </h1>
            <ul class="list-unstyled hero-list m-0 p-0 d-flex flex-column">
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium text-white">
                  Rental yields up to 15% p/a
                </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium text-white"> Tax-free income </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium text-white">
                  Cash flow and capital appreciation
                </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium text-white">
                  Hands off, hassle-free investment
                </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium text-white">
                  Invest from £30,000
                </span>
              </li>
            </ul>
          </div>
          <div class="hero-form p-4 bg-white font-work-sans ms-lg-auto mx-auto" id="contact-form">
            <h2 class="mb-4 fw-medium">Contact Us Today</h2>
            <form id="contact-form" class="needs-validation" novalidate>
              @csrf
              <div class="mb-4">
                <div class="row gx-3 mb-3">
                  <div class="col">
                    <label for="firstName" class="form-label mb-1">First Name *</label>
                    <input type="text" class="form-control" required id="firstName" name="firstName"
                      placeholder="Enter first name">
                  </div>
                  <div class="col">
                    <label for="lastName" class="form-label mb-1">Last Name *</label>
                    <input type="text" class="form-control" required id="lastName" name="lastName"
                      placeholder="Enter last name">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label mb-1">Email *</label>
                  <input type="email" class="form-control" required id="email" name="email"
                    placeholder="Enter email address">
                </div>

                <div class="mb-3">
                  <label for="phone" class="form-label mb-1">Phone Number *</label>
                  <input type="tel" class="form-control" pattern="^(?:0(?:1\d{3}\s?\d{6}|2\d{1,2}\s?\d{3}\s?\d{4})|07\d{3}\s?\d{6}|\+447\d{3}\s?\d{6})$" required id="phone" name="phone" placeholder="Phone number">
                </div>

                <div class="mb-3">
                  <label for="investment" class="form-label mb-1">Investment Amount *</label>
                  <input type="number" class="form-control" required id="investment" name="investment"
                    placeholder="Enter amount">
                </div>

                <div>
                  <label for="details" class="form-label mb-1">Additional Details</label>
                  <textarea class="form-control" id="details" name="details" rows="3" placeholder=""></textarea>
                </div>
              </div>

              <button type="submit" class="btn btn-primary w-100">Submit</button>

              <div id="message" class="alert mt-3 d-none"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="about-sec position-relative z-1 pb-5">
      <div class="container mb-lg-4">
        <div class="d-flex flex-lg-nowrap flex-wrap gap-4 text-md-start text-center justify-content-between mb-5 pb-lg-3">
          <div class="abs-div-1 d-flex flex-column gap-3 mx-md-0 mx-auto">
            <div class="abs-line mx-md-0 mx-auto"></div>
            <div class="abs-title font-lora">
              Why Investors Are Choosing Dubai in 2025
            </div>
          </div>
          <p class="mb-0 abs-text fw-medium">
            Dubai continues to dominate the global property scene, and for
            good reason. With a 16.9% surge in property prices and rental
            yields hitting record highs, now is the time to make your move.
          </p>
        </div>
        <div class="abs-box">
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="d-flex flex-column abb-cont">
                <h4 class="fw-medium abb-title mb-0">
                  Tax-Free Property Income
                </h4>
                <p class="mb-0 abb-text">
                  Maximise your ROI without hidden deductions.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="d-flex flex-column abb-cont">
                <h4 class="fw-medium abb-title mb-0">Stability & Security</h4>
                <p class="mb-0 abb-text">
                  Enjoy peace of mind in one of the world’s safest, most
                  business-friendly cities.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="d-flex flex-column abb-cont">
                <h4 class="fw-medium abb-title mb-0">
                  Rapid Capital Appreciation
                </h4>
                <p class="mb-0 abb-text">
                  Prime developments see annual growth of up to 15%.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="project-sec py-5 mb-5 mt-lg-4">
      <div class="container mb-5">
        <h2 class="mb-0 font-lora text-center fw-normal">
          Explore Our <br />
          Exclusive Portfolio
        </h2>
      </div>
      <div class="position-relative mb-5 project-slider">
        <div class="project-images owl-carousel">
          <img src="/assets/images/project-1.png" alt="Project" class="w-100 project-img" />
          <img src="/assets/images/project-2.jpg" alt="Project" class="w-100 project-img" />
          <img src="/assets/images/project-3.jpg" alt="Project" class="w-100 project-img" />
          <img src="/assets/images/project-4.jpg" alt="Project" class="w-100 project-img" />
          <img src="/assets/images/project-5.jpg" alt="Project" class="w-100 project-img" />
        </div>
        <div class="project-info">
          <div class="container">
            <div
              class="d-flex align-items-xl-end align-items-center justify-content-between gap-4 flex-xl-row flex-column-reverse">
              <div class="d-flex align-items-center gap-2">
                <span class="pc-number pcn-current">01</span>
                <span class="pc-line"></span>
                <span class="pc-number pcn-total">03</span>
              </div>
              <div class="project-box">
                <div class="d-flex align-items-center gap-md-5 gap-4 flex-md-row flex-column">
                  <div
                    class="d-flex align-items-center flex-md-row flex-column gap-4 justify-content-between flex-grow-1">
                    <div class="d-flex flex-column gap-3">
                      <div class="d-flex flex-column text-white">
                        <span class="pb-label">Latest Project</span>
                        <h2 class="mb-1 fw-medium">Modern Industrial Loft</h2>
                      </div>
                      <a href="https://drive.google.com/file/d/1J2h4G93u1LxTnThnp1z6WLfShwj2T188/view?usp=drive_link"
                        target="_blank" class="btn btn-primary">
                        Explore Projects
                      </a>
                    </div>
                    <div class="d-flex project-features">
                      <div class="d-flex pf-row flex-column">
                        <div class="d-flex flex-column gap-1">
                          <span class="pf-label">Location</span>
                          <span class="pf-value">New York, USA</span>
                        </div>
                        <div class="d-flex flex-column gap-1">
                          <span class="pf-label">Prices</span>
                          <span class="pf-value">$2,895</span>
                        </div>
                      </div>
                      <div class="d-flex pf-row flex-column">
                        <div class="d-flex flex-column gap-1">
                          <span class="pf-label">Theme & Style</span>
                          <span class="pf-value">Industrial</span>
                        </div>
                        <div class="d-flex flex-column gap-1">
                          <span class="pf-label">Architect</span>
                          <span class="pf-value">William Stone</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex gap-2 flex-md-column flex-row align-items-center p-2 project-slider-arrows">
                    <div class="slider-arrow ps-arrow ps-arrow-prev">
                      <i class="fa fa-arrow-left"></i>
                    </div>
                    <div class="slider-arrow ps-arrow ps-arrow-next">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 portfolio-sec">
      <div class="container pt-lg-5 pt-4">
        <div class="d-flex justify-content-between gap-4 mb-4">
          <div class="d-flex align-items-center gap-3">
            <div class="pc-line"></div>
            <h4 class="font-lora mb-0">Exclusive Portfolio</h4>
          </div>

          <div class="d-flex gap-2 align-items-center p-2 portfolio-slider-arrows">
            <div class="slider-arrow ps-arrow ps-arrow-prev">
              <i class="fa fa-arrow-left"></i>
            </div>
            <div class="slider-arrow ps-arrow ps-arrow-next">
              <i class="fa fa-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="portfolio-slider">
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-1.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-2.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point 1
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-3.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point 1-5
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-4.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point 2
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-1.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point 3
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="portfolio-box d-flex flex-column gap-3">
            <img src="/assets/images/island-2.png" alt="Portfolio" class="w-100 mb-1 d-block portfolio-img" />
            <div class="d-flex flex-column gap-3">
              <h5 class="mb-1 text-black fw-semibold font-lora">
                One River Point
              </h5>
              <p class="mb-1 pb-desc">
                Waterfront luxury in Dubai's financial heart. From AED 2.2M.
              </p>
              <ul class="m-0 p-0 pb-list list-unstyled">
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
                <li>
                  <img src="/assets/images/check-1.svg" alt="Check" />
                  <span>Canal views</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 my-lg-5 golden-visa-sec">
      <div class="container">
        <div class="linear-border"></div>

        <div class="row gx-xl-5 gx-4">
          <div class="col-lg-6 py-4 my-2">
            <div class="d-flex flex-column gap-xl-5 gap-lg-4 gap-md-5 gap-4">
              <div class="d-flex flex-column gap-3">
                <h2 class="mb-1 fw-bold gv-title font-lora">
                  Unlock the UAE Golden Visa Through Property Investment
                </h2>
                <p class="gv-text fw-light mb-0">
                  At Riverside, we do more than help you invest, we open the
                  door to a new life in Dubai. Our exclusive portfolio
                  features properties that qualify for the UAE Golden Visa,
                  and our dedicated team personally handles the process from
                  start to finish.
                </p>
              </div>
              <div class="d-flex flex-wrap gv-flex">
                <div class="gv-feature">10-year renewable residency</div>
                <div class="gv-feature">Family sponsorship</div>
                <div class="gv-feature">Full business ownership rights</div>
                <div class="gv-feature">No personal income tax</div>
              </div>
              <div class="col-lg-7">
                <a href="#contact-form" class="btn btn-primary w-100">
                  Book Your Free Consultation
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="/assets/images/golden-visa.png" alt="Golden Visa" class="w-100 h-100 object-fit-cover img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <section class="testimonials-sec pt-5 mt-lg-5 mt-4">
      <div class="ts-main py-4">
        <div class="container my-4 py-lg-4">
          <div class="d-flex flex-column gap-lg-5 gap-4 align-items-center">
            <h2 class="fw-bold gv-title text-white text-center font-lora">
              Customer Success Stories
            </h2>
            <div class="my-lg-0 my-3 w-100">
              <div class="d-flex testimonials-slider owl-carousel align-items-start">
                <div class="ts-box p-4 d-flex flex-column gap-4">
                  <p class="mb-0 ts-text">
                    "We have choosed this option against competitors based on
                    the Customers reviews."
                  </p>
                  <div class="d-flex gap-2 flex-wrap">
                    <img src="/assets/images/review-img-1.png" alt="Review" class="ts-img" />
                  </div>
                  <div class="pc-line"></div>
                  <p class="mb-0 font-lora fw-normal ts-name">
                    Belaundre Arn Kharn
                  </p>
                </div>
                <div class="ts-box p-4 d-flex flex-column gap-4">
                  <p class="mb-0 ts-text">
                    "We have choosed this option against competitors based on
                    the Customers reviews. After 9 months of using we have
                    never regreted. Right now we are more effective in
                    communication and managing the customer flows.”
                  </p>
                  <div class="d-flex gap-2 flex-wrap">
                    <img src="/assets/images/review-img-1.png" alt="Review" class="ts-img" />
                  </div>
                  <div class="pc-line"></div>
                  <p class="mb-0 font-lora fw-normal ts-name">
                    Belaundre Arn Kharn
                  </p>
                </div>
                <div class="ts-box p-4 d-flex flex-column gap-4">
                  <p class="mb-0 ts-text">
                    "After 9 months of using we have never regreted. Right now
                    we are more effective in communication and managing the
                    customer flows.”
                  </p>
                  <div class="d-flex gap-2 flex-wrap">
                    <img src="/assets/images/review-img-1.png" alt="Review" class="ts-img" />
                  </div>
                  <div class="pc-line"></div>
                  <p class="mb-0 font-lora fw-normal ts-name">
                    Belaundre Arn Kharn
                  </p>
                </div>
                <div class="ts-box p-4 d-flex flex-column gap-4">
                  <p class="mb-0 ts-text">
                    "We have choosed this option against competitors based on
                    the Customers reviews. After 9 months of using we have
                    never regreted. Right now we are more effective in
                    communication and managing the customer flows.”
                  </p>
                  <div class="d-flex gap-2 flex-wrap">
                    <img src="/assets/images/review-img-1.png" alt="Review" class="ts-img" />
                  </div>
                  <div class="pc-line"></div>
                  <p class="mb-0 font-lora fw-normal ts-name">
                    Belaundre Arn Kharn
                  </p>
                </div>
                <div class="ts-box p-4 d-flex flex-column gap-4">
                  <p class="mb-0 ts-text">
                    "After 9 months of using we have never regreted. Right now
                    we are more effective in communication and managing the
                    customer flows.”
                  </p>
                  <div class="d-flex gap-2 flex-wrap">
                    <img src="/assets/images/review-img-1.png" alt="Review" class="ts-img" />
                  </div>
                  <div class="pc-line"></div>
                  <p class="mb-0 font-lora fw-normal ts-name">
                    Belaundre Arn Kharn
                  </p>
                </div>
              </div>
            </div>

            <div class="d-flex gap-2 align-items-center p-2 testimonial-slider-arrows">
              <div class="slider-arrow ts-arrow ts-arrow-prev">
                <i class="fa fa-arrow-left"></i>
              </div>
              <div class="slider-arrow ts-arrow ts-arrow-next">
                <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-5 island-sec">
      <div class="container pt-lg-5 pt-4">
        <div class="d-flex align-items-center flex-column gap-4">
          <h2 class="font-lora fw-bold text-center mb-3 is-title mx-auto">
            Al Marjan Island:
            <span class="d-inline-block text-gradient-2">20% YoY</span>
            Property Appreciation
          </h2>
          <div class="d-flex flex-column gap-3 w-100 align-items-center">
            <div class="island-content text-center mx-auto d-flex flex-column align-items-center">
              <span class="ic-bold font-lora fw-semibold">Discover unparalleled growth potential just 45 minutes from
                Dubai</span>
              <span class="fw-light">Al Marjan Island is rapidly emerging as the UAE's next
                investment hotspot. With the upcoming Wynn Al Marjan Island
                resort - set to be the Middle East's first casino - and a
                surge in luxury developments, the island offers high-yield
                investment opportunities.</span>
            </div>
            <div class="island-line my-1"></div>

            <ul class="list-unstyled hero-list island-list m-0 p-0 d-flex flex-wrap justify-content-center">
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium"> Exceptional Capital Growth </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium"> Robust Rental Yields </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium"> Booming Sales Activity </span>
              </li>
              <li class="d-flex align-items-center">
                <img src="/assets/images/check-1.svg" alt="Check" class="list-check flex-shrink-0" />
                <span class="fw-medium">
                  Exclusive Access to Sobha Developments
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="island-slider owl-carousel py-3">
          <div class="island-img">
            <img src="/assets/images/island-1.png" alt="Islan" class="w-100 img-fluid" />
          </div>
          <div class="island-img">
            <img src="/assets/images/island-2.png" alt="Islan" class="w-100 img-fluid" />
          </div>
          <div class="island-img">
            <img src="/assets/images/island-3.png" alt="Islan" class="w-100 img-fluid" />
          </div>
          <div class="island-img">
            <img src="/assets/images/island-4.png" alt="Islan" class="w-100 img-fluid" />
          </div>
          <div class="island-img">
            <img src="/assets/images/island-1.png" alt="Islan" class="w-100 img-fluid" />
          </div>
          <div class="island-img">
            <img src="/assets/images/island-2.png" alt="Islan" class="w-100 img-fluid" />
          </div>
        </div>
      </div>
      <div class="container pt-4">
        <div class="mt-3 bg-white seize-box d-flex flex-column gap-3">
          <div class="d-flex flex-column gap-2 mb-1">
            <h3 class="sb-title fw-bold font-lora mb-0">
              Seize the Opportunity Before It's Gone
            </h3>
            <p class="mb-0 gv-text">
              With projected profits of up to 147%, and landmark developments
              like the Wynn resort attracting global attention, Al Marjan
              Island is poised for unprecedented growth. Early investors stand
              to benefit the most as demand continues to surge.
            </p>
          </div>
          <div>
            <a href="https://drive.google.com/file/d/1J2h4G93u1LxTnThnp1z6WLfShwj2T188/view?usp=drive_link"
              target="_blank" class="btn btn-primary">Explore Opportunity Now</a>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-3">
      <div class="container pt-5 mt-lg-3">
        <div class="journey-box mb-5 d-flex align-items-center justify-content-between flex-lg-row flex-column">
          <div class="jb-content">
            <div class="d-flex flex-column gap-lg-5 gap-4">
              <div class="d-flex flex-column gap-3 mb-3 mb-lg-0">
                <h2 class="font-lora fw-bold mb-0">
                  Start Your Dubai Property <br class="d-lg-block d-none" />
                  Journey Today
                </h2>
                <p class="my-1 gv-text fw-medium">
                  Our expert team will guide you from inquiry to ownership.
                </p>
                <p class="gv-text fw-light mb-0">
                  *Terms and conditions apply. Earnings are subject to market
                  performance and individual property terms.
                </p>
              </div>
              <div>
                <a href="#contact-form" class="btn btn-white">
                  <span class="px-sm-5 d-inline-block">Book Your Free Consultation</span>
                </a>
              </div>
            </div>
          </div>
          <div class="jb-user d-flex flex-column justify-content-center align-items-center">
            <div class="p-4 bg-white d-flex align-items-center flex-column gap-4 text-center jb-user-box">
              <div class="d-flex flex-column gap-2 align-items-center">
                <img src="/assets/images/user-img.png" alt="User" class="jb-user-img mb-1" />
                <div class="d-flex flex-column gap-1">
                  <span class="fw-bold font-lora jb-user-name">Morphine Joseph</span>
                  <span class="fw-light jb-user-job opacity-50">Sales Executive</span>
                </div>
              </div>
              <a href="tel:0203 051 0395"
                class="btn btn-primary w-100 btn-phone d-flex align-items-center justify-content-center gap-1">
                <img src="/assets/images/phone.svg" alt="Phone" class="jb-phone-icon" />
                <span class="font-lora">0203 051 0395</span>
              </a>
            </div>
          </div>
        </div>
        <div class="pt-3 mt-lg-3">
          <p class="gv-text fw-light text-center mb-0">
            Riverside Real Estate LLC provides an introductory service,
            connecting prospective buyers with Dubai property developers. We
            do not provide investment, financial, legal, or tax advice, nor do
            we act as an agent for either party. <br />
            Properties in Dubai are subject to UAE laws and regulations, which
            differ from UK protections. We strongly recommend seeking
            independent professional advice and conducting thorough due
            diligence before proceeding with any purchase. Information
            provided is based on details from developers and has not been
            independently verified by us. No guarantees can be made regarding
            investment performance, property completion, or developer
            reliability.<br />
            Your capital is at risk, and you may get back less than you
            invest.
          </p>
        </div>
      </div>
    </section>
  </main>
  @push('scripts')

    <script>
      (() => {
        "use strict";

        const forms = document.querySelectorAll(".needs-validation");

        Array.from(forms).forEach((form) => {
          form.addEventListener("submit", function (event) {
            event.preventDefault();
            event.stopPropagation();

            // ✅ Apply Bootstrap validation styling
            form.classList.add("was-validated");



            // ✅ If form is valid, run reCAPTCHA and then send AJAX
            if (form.checkValidity()) {
              const submitBtn = $(form).find('button[type="submit"]');
              const originalText = submitBtn.html();

              grecaptcha.ready(function () {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {

                  // Add reCAPTCHA token to form data
                  const formData = $(form).serialize() + '&g-recaptcha-response=' + token;

                  $.ajax({
                    url: "{{ route('contact.send') }}",
                    method: "POST",
                    data: formData,

                    beforeSend: function () {
                      $('#message')
                        .removeClass('alert-success alert-danger')
                        .addClass('d-none');

                      // 🌀 Show loading state on button
                      submitBtn.prop('disabled', true).html(`
                      <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                      Submitting...
                    `);
                    },

                    success: function (response) {
                      $('#message')
                        .removeClass('d-none alert-danger')
                        .addClass('alert-success')
                        .text(response.message);

                      form.reset();
                      form.classList.remove('was-validated');
                    },

                    error: function (xhr) {
                      $('#message')
                        .removeClass('d-none alert-success')
                        .addClass('alert-danger')
                        .text('Something went wrong. Please try again.');
                    },

                    complete: function () {
                      // ✅ Restore button state
                      submitBtn.prop('disabled', false).html(originalText);
                    }
                  });
                });
              });
            }
          }, false);
        });
      })();
    </script>
  @endpush
@endsection