@extends('frontend.master')
  @section('contact-us')
    <title>Maxx Fortune | FAQ</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')
    </header>
    <!-- header end -->
    <div class="faq-heading text-center">
      <div class="continer"><h1>Frequently Asked Question</h1></div>
    </div>
    <!-- faq start  -->
    <div class="faq-section">
      <div class="container">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
                  What is the process of this app? <i class="fa fa-plus"></i>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>
                  When you hire agents from our marketplace, you don't have to pay the per seat fee you pay them their hourly rate for the work they complete. If you already have employees or
                  volunteers who will make calls for you.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
                  What is the process of this app? <i class="fa fa-plus"></i>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>
                  When you hire agents from our marketplace, you don't have to pay the per seat fee you pay them their hourly rate for the work they complete. If you already have employees or
                  volunteers who will make calls for you.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">
                  What is the process of this app? <i class="fa fa-plus"></i>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>
                  When you hire agents from our marketplace, you don't have to pay the per seat fee you pay them their hourly rate for the work they complete. If you already have employees or
                  volunteers who will make calls for you.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">
                  What is the process of this app? <i class="fa fa-plus"></i>
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>
                  When you hire agents from our marketplace, you don't have to pay the per seat fee you pay them their hourly rate for the work they complete. If you already have employees or
                  volunteers who will make calls for you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- faq end  -->
  @stop
