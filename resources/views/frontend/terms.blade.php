@extends('frontend.master')
  @section('contact-us')
    <title>Maxx Fortune | Terms & Conditions</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')
    </header>
    <div class="faq-heading text-center">
      <div class="container">
        <h1>Terms & Conditions</h1>
      </div>
    </div>
    <!-- header end -->
    <!-- terms start  -->
    <div class="terms-section">
      <div class="container">
        <div class="tab-pane-main">
          <div class="row">
            <div class="col-sm-4">
              <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">01. Education Privacy Notice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">02. Notice for Mobile App Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">03. Non-Discrimination Policy</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-8">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="terms-detals">
                    <h2>01. Education Privacy Notice</h2>
                    <p>
                      Credibly benchmark worldwide applications before a plug
                      play processes dramatically. <br />
                      <br />
                      Enthusiastically revolutionize optimal supply chains
                      without seamless processes. Intrinsicly build an expanded
                      array of testing procedures after impactful paradigms.
                      Synergistically e-enable front-end technology for
                      orthogonal data. Monotonectally build value-added
                      leadership before web-enabled products. Dramatically
                      maximize user friendly data and interactive processes.
                      <br /><br />
                      Professionally unleash 2.0 information and B2B networks.
                      Completely parallel task one-to-one materials via
                      cooperative sources. Appropriately productize competitive
                      growth strategies through compelling paradigms. Uniquely
                      administrate bleeding-edge initiatives vis-a-vis go
                      forward communities. Holisticly re-engineer standardized
                      ideas before standards compliant partnerships.
                      <br /><br />
                      Enthusiastically productize stand-alone collaboration and
                      idea-sharing without cross functional partnerships.
                      Compellingly network granular e-tailers without
                      backward-compatible opportunities.
                    </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="terms-detals">
                    <h2>02. Notice for Mobile App Users</h2>
                    <p>
                      Credibly benchmark worldwide applications before a plug
                      play processes dramatically. <br /><br />
                      Enthusiastically revolutionize optimal supply chains
                      without seamless processes. Intrinsicly build an expanded
                      array of testing procedures after impactful paradigms.
                      Synergistically e-enable front-end technology for
                      orthogonal data. Monotonectally build value-added
                      leadership before web-enabled products. Dramatically
                      maximize user friendly data and interactive processes.
                      <br /><br />
                    </p>
                    <img src="{{asset('images/terms.svg')}}" alt="terms.svg" />
                  </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="terms-detals">
                    <h2>02. Notice for Mobile App Users</h2>
                    <p>
                      Credibly benchmark worldwide applications before a plug
                      play processes dramatically. <br /><br />
                      Enthusiastically revolutionize optimal supply chains
                      without seamless processes. Intrinsicly build an expanded
                      array of testing procedures after impactful paradigms.
                      Synergistically e-enable front-end technology for
                      orthogonal data. Monotonectally build value-added
                      leadership before web-enabled products. Dramatically
                      maximize user friendly data and interactive processes.
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
