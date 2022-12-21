@extends('frontend.master')
  @section('terms')
    <title>Maxx Fortune | Terms & Conditions</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')

    </header>

    <!-- header end -->
    <div class="terms-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">Terms & Conditions</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- terms start  -->
    <div class="terms-section">
      <div class="container">
        <div class="tab-pane-main">
          <div class="row">
            <div class="col-sm-4">
              <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Terms & Conditions</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-8">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="terms-detals">
                    <h2>Terms & Conditions</h2>
                    <p>
                      {!!$response->terms_and_conditions!!}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- terms end  -->
  @stop
