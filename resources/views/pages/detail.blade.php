@extends('layouts.app')
@section('title', 'Detail Travel')

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@section('content')
<!-- START: Main -->
<main>
      <section class="section-details-header"></section>

      <section class="section-details-content">
        <div class="container">
          <!-- START: Breadcrumb -->
          <div class="row">
            <div class="col p-0 pl-3 pl-lg-0">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Paket Travel</li>
                  <li class="breadcrumb-item active">Details</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- END: Breadcrumb -->

          <div class="row">
            <!-- START: Left -->
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Nusa Peninda</h1>
                <p>Republic of Indonesia Raya</p>
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      src="/frontend/images/details-1.jpg"
                      alt="travel-in-island"
                      class="xzoom"
                      id="xzoom-default"
                      xoriginal="/frontend/images/details-1.jpg"
                    />
                  </div>

                  <!-- START: Thumbnail -->
                  <div class="xzoom-thumbs">
                    <!-- START: Thumb 1 -->
                    <a href="/frontend/images/details-1.jpg">
                      <img
                        src="/frontend/images/details-1.jpg"
                        class="xzoom-gallery"
                        width="128"
                        xpreview="/frontend/images/details-1.jpg"
                    /></a>
                    <!-- END: Thumb 1 -->

                    <!-- START: Thumb 2 -->
                    <a href="/frontend/images/details-1.jpg">
                      <img
                        src="/frontend/images/details-1.jpg"
                        class="xzoom-gallery"
                        width="128"
                        xpreview="/frontend/images/details-1.jpg"
                    /></a>
                    <!-- END: Thumb 2 -->

                    <!-- START: Thumb 3 -->
                    <a href="/frontend/images/details-1.jpg">
                      <img
                        src="/frontend/images/details-1.jpg"
                        class="xzoom-gallery"
                        width="128"
                        xpreview="/frontend/images/details-1.jpg"
                    /></a>
                    <!-- END: Thumb 3 -->

                    <!-- START: Thumb 4 -->
                    <a href="/frontend/images/details-1.jpg">
                      <img
                        src="/frontend/images/details-1.jpg"
                        class="xzoom-gallery"
                        width="128"
                        xpreview="/frontend/images/details-1.jpg"
                    /></a>
                    <!-- END: Thumb 4 -->

                    <!-- START: Thumb 5 -->
                    <a href="/frontend/images/details-1.jpg">
                      <img
                        src="/frontend/images/details-1.jpg"
                        class="xzoom-gallery"
                        width="128"
                        xpreview="/frontend/images/details-1.jpg"
                    /></a>
                    <!-- END: Thumb 5 -->
                  </div>
                  <!-- END: Thumbnail -->
                </div>
                <h2>Tentang Wisata</h2>
                <p>
                  Nusa Penida is an island southeast of Indonesia’s island Bali
                  and a district of Klungkung Regency that includes the
                  neighbouring small island of Nusa Lembongan. The Badung Strait
                  separates the island and Bali. The interior of Nusa Penida is
                  hilly with a maximum altitude of 524 metres. It is drier than
                  the nearby island of Bali.
                </p>
                <p>
                  Bali and a district of Klungkung Regency that includes the
                  neighbouring small island of Nusa Lembongan. The Badung Strait
                  separates the island and Bali.
                </p>

                <!-- START: Features -->
                <div class="features row">
                  <div class="col-md-4">
                    <img
                      src="/frontend/images/ic_event.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>Tari Kecak</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-left">
                    <img
                      src="/frontend/images/ic_bahasa.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-left">
                    <img
                      src="/frontend/images/ic_foods.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Foods</h3>
                      <p>Local Foods</p>
                    </div>
                  </div>
                </div>
                <!-- END: Features -->
              </div>
            </div>
            <!-- END: Left -->

            <!-- START: Right -->
            <div class="col-md-4">
              <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="member my-2">
                  <!-- START: Member Image -->
                  <img
                    src="/frontend/images/members.png"
                    alt="member-group"
                    class="member-image"
                  />
                  <!-- END: Member Image -->
                </div>
                <hr />
                <h2>Member Informations</h2>
                <table class="trip-informations">
                  <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">22 Aug, 2019</td>
                  </tr>
                  <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">4D 3N</td>
                  </tr>
                  <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-right">Open Trip</td>
                  </tr>
                  <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">$80,00 / person</td>
                  </tr>
                </table>
              </div>

              <!-- START: Join Button -->
              <div class="join-container">
                <a
                  href="{{ url('/checkout') }}"
                  class="btn btn-block btn-join-now mt-3 py-2"
                  >Join Now</a
                >
              </div>
              <!-- END: Join Button -->
            </div>
            <!-- END: Right -->
          </div>
        </div>
      </section>
    </main>
    <!-- END: Main -->
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script src="{{ url('frontend/scripts/main.js') }}"></script>
@endpush