@extends('layouts.checkout')
@section('title', 'Checkout')

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
                  <li class="breadcrumb-item">Details</li>
                  <li class="breadcrumb-item active">Checkout</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- END: Breadcrumb -->

          <div class="row">
            <!-- START: Left -->
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Who is going?</h1>
                <p>Trip to Ubud, Bali, Indonesia</p>

                <!-- START: Table -->
                <div class="attendee">
                  <table class="table table-responsive-sm text-center">
                    <thead>
                      <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>Nasionality</td>
                        <td>Visa</td>
                        <td>Passport</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img src="/frontend/images/avatar-1.png" height="60" />
                        </td>
                        <td class="align-middle">Angga Risky</td>
                        <td class="align-middle">CN</td>
                        <td class="align-middle">A / N</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                          <a href="#">
                            <img src="/frontend/images/ic_remove.png" />
                          </a>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <img src="/frontend/images/avatar-5.png" height="60" />
                        </td>
                        <td class="align-middle">Galih Pratama</td>
                        <td class="align-middle">SG</td>
                        <td class="align-middle">30 Days</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                          <a href="#">
                            <img src="/frontend/images/ic_remove.png" />
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END: Table -->

                <!-- START: Form Member -->
                <div class="member mt-3">
                  <h2>Add Member</h2>
                  <form action="#" class="form-inline">
                    <label for="inputUsername" class="sr-only">Name</label>
                    <input
                      type="text"
                      class="form-control mb-2 mr-sm-2"
                      id="inputUsername"
                      placeholder="Username"
                      name="inputUsername"
                    />

                    <label for="inputVisa" class="sr-only">VISA</label>
                    <select
                      name="inputVisa"
                      id="inputVisa"
                      class="custom-select mb-2 mr-sm-2"
                    >
                      <option value="VISA" selected>VISA</option>
                      <option value="30 Days">30 Days</option>
                      <option value="N / A">N / A</option>
                    </select>

                    <label for="doePassport" class="sr-only"
                      >DOE Passport</label
                    >
                    <div class="input-group mb-2 mr-sm-2">
                      <input
                        type="text"
                        class="form-control datepicker"
                        id="doePassport"
                        placeholder="DOE Passport"
                      />
                    </div>

                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                      Add Now
                    </button>
                  </form>

                  <!-- START: Note -->
                  <h3 class="mt-2 mb-0 note">Note</h3>
                  <p class="disclaimer mb-0">
                    You are only able to invite member that has registered in
                    Nomads.
                  </p>
                  <!-- END: Note -->
                </div>
                <!-- END: Form Member -->
              </div>
            </div>
            <!-- END: Left -->

            <!-- START: Right -->
            <div class="col-md-4">
              <div class="card card-details card-right">
                <h2>Checkout Informations</h2>
                <table class="trip-informations">
                  <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-right">2 Person</td>
                  </tr>
                  <tr>
                    <th width="50%">Additional Visa</th>
                    <td width="50%" class="text-right">$ 190,00</td>
                  </tr>
                  <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right">$ 80,00 / person</td>
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">$ 280,00</td>
                  </tr>
                  <tr>
                    <th width="50%">Total (+Unique)</th>
                    <td width="50%" class="text-right text-total">
                      <span class="text-blue">$ 279,</span>
                      <span class="text-orange">33</span>
                    </td>
                  </tr>
                </table>
                <hr />
                <!-- START: Payment -->
                <div class="payment-instruction">
                  <h2>Payment Instruction</h2>
                  <p>
                    Please complete your payment before to continue the
                    wonderful trip
                  </p>
                  <div class="bank">
                    <div class="bank-item pb-3">
                      <img
                        src="/frontend/images/ic_bank.png"
                        class="bank-image"
                      />
                      <div class="descriptions">
                        <h3>PT Nomads ID</h3>
                        <p>
                          0881 8829 8800 <br />
                          Bank Central Asia
                        </p>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="bank-item pb-3">
                      <img
                        src="/frontend/images/ic_bank.png"
                        class="bank-image"
                      />
                      <div class="descriptions">
                        <h3>PT Nomads ID</h3>
                        <p>
                          0899 8501 7888 <br />
                          Bank HSBC
                        </p>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <!-- END: Payment -->
              </div>

              <!-- START: Join Button -->
              <div class="join-container">
                <a
                  href="{{ url('/checkout/success') }}"
                  class="btn btn-block btn-join-now mt-3 py-2"
                  >I Have Made Payment</a
                >
              </div>
              <!-- END: Join Button -->

              <!-- START: Cancel Button -->
              <div class="text-center mt-3">
                <a href="#" class="text-muted"> Cancel Booking </a>
              </div>
              <!-- END: Cancel Button -->
            </div>
            <!-- END: Right -->
          </div>
        </div>
      </section>
    </main>
    <!-- END: Main -->
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function () {
    // gijgo
    $(".datepicker").datepicker({
      uiLibrary: "bootstrap4",
      icons: {
        rightIcon: '<img src="/frontend/images/ic_doe.png" />',
      },
    });
  });
</script>
@endpush