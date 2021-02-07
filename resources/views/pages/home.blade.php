@extends('layouts.app')

@section('title')
  NOMADS
@endsection

@section('content')
<!-- START: Header -->
<header class="text-center">
      <h1>
        Explore The Beautiful World
        <br />
        As Easy One Click
      </h1>
      <p class="mt-3">
        You will see beautiful
        <br />
        moment you never see before
      </p>
      <a href="#" class="btn btn-get-started px-4 mt-4"> Get started </a>
    </header>
    <!-- END: Header -->

    <!-- START: Main -->
    <main>
      <div class="container">
        <section class="row section-stats justify-content-center" id="stats">
          <div class="col-3 col-md-2 stats-detail">
            <h2>20K</h2>
            <p>Members</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Countries</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>3K</h2>
            <p>Hotels</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>72</h2>
            <p>Partners</p>
          </div>
        </section>
      </div>

      <section class="section-popular" id="popular">
        <div class="container">
          <div class="row">
            <div class="col text-center section-popular-heading">
              <h2>Wisata Populer</h2>
              <p>
                Something that you never try <br />
                before in this world
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-popular-content" id="popular-content">
        <div class="container">
          <div class="row section-popular-travel justify-content-center">
            <!-- START: Card 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('/frontend/images/travel-1.jpg')"
              >
                <div class="travel-country">INDONESIA</div>
                <div class="travel-location">DERATAN, BALI</div>
                <div class="travel-button mt-auto">
                  <a href="{{ url('/detail') }}" class="btn btn-travel-details px-4"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
            <!-- END: Card 1 -->

            <!-- START: Card 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('/frontend/images/travel-2.jpg')"
              >
                <div class="travel-country">INDONESIA</div>
                <div class="travel-location">BROMO, MALANG</div>
                <div class="travel-button mt-auto">
                  <a href="{{ route('detail') }}" class="btn btn-travel-details px-4"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
            <!-- END: Card 2 -->

            <!-- START: Card 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('/frontend/images/travel-3.jpg')"
              >
                <div class="travel-country">INDONESIA</div>
                <div class="travel-location">NUSA PENIDA</div>
                <div class="travel-button mt-auto">
                  <a href="/details.html" class="btn btn-travel-details px-4"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
            <!-- END: Card 3 -->

            <!-- START: Card 4 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('/frontend/images/travel-4.jpg')"
              >
                <div class="travel-country">MIDDLE EAST</div>
                <div class="travel-location">DUBAI</div>
                <div class="travel-button mt-auto">
                  <a href="/details.html" class="btn btn-travel-details px-4"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
            <!-- END: Card 4 -->
          </div>
        </div>
      </section>

      <section class="section-networks" id="networks">
        <div class="container">
          <div class="row">
            <!-- START: Left -->
            <div class="col-md-4">
              <h2>Our Networks</h2>
              <p>
                Companies are trusted us <br />
                more than just a trip
              </p>
            </div>
            <!-- END: Left -->

            <!-- START: Right -->
            <div class="col-md-8 text-center">
              <img
                src="/frontend/images/partner.png"
                alt="partner-your-journey"
                class="img-partner"
              />
            </div>
            <!-- END: Right -->
          </div>
        </div>
      </section>

      <section class="section-testimonial-heading" id="testimonial-heading">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>They Are Loving Us</h2>
              <p>
                Moments were giving them <br />
                the best experience
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-testimonial-content" id="testimonial-content">
        <div class="container">
          <div class="row section-popular-travel justify-content-center">
            <!-- START: Testimonial 1 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img
                    src="/frontend/images/avatar-1.png"
                    alt="user-testimonial"
                    class="mb-4 rounder-circle"
                  />
                  <h3 class="mb-4">Angga Risky</h3>
                  <p class="testimonial">
                    “ It was glorious and I could not stop to say wohooo for
                    every single moment Dankeeeeee “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Trip to Ubud</p>
              </div>
            </div>
            <!-- END: Testimonial 1 -->

            <!-- START: Testimonial 2 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img
                    src="/frontend/images/avatar-2.png"
                    alt="user-testimonial"
                    class="mb-4 rounder-circle"
                  />
                  <h3 class="mb-4">Shayna</h3>
                  <p class="testimonial">
                    “ The trip was amazing and I saw something beautiful in that
                    Island that makes me want to learn more “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Trip to Nusa Peninda</p>
              </div>
            </div>
            <!-- END: Testimonial 2 -->

            <!-- START: Testimonial 3 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img
                    src="/frontend/images/avatar-3.png"
                    alt="user-testimonial"
                    class="mb-4 rounder-circle"
                  />
                  <h3 class="mb-4">Shabrina</h3>
                  <p class="testimonial">
                    “ I loved it when the waves was shaking harder — I was
                    scared too “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Trip to Karimun Jawa</p>
              </div>
            </div>
            <!-- END: Testimonial 3 -->
          </div>

          <!-- START: Button Need Help -->
          <div class="row">
            <div class="col-12 text-center">
              <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                I Need Help
              </a>
              <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                Get Started
              </a>
            </div>
          </div>
          <!-- END: Button Need Help -->
        </div>
      </section>
    </main>
    <!-- END: Main -->

@endsection