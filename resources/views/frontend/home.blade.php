@extends('frontend.master')
  @section('home')
        <!-- header start  -->
        <header class="header-section home">
          @include('frontend.nav')
          <div class="home-area">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="home-left">
                    <h1>
                      Scratch
                      <span>
                        Away <br/> & Get
                      </span>
                      <img src="{{asset('images/ich.png')}}" alt="ich.png" />
                      Rewards
                    </h1>
                    <p>
                      Proactively iterate mission-critical processes through impactful potentialities.
                    </p>
                    <div class="app-img">
                      <img src="{{asset('images/app.png')}}" alt="app.png" />
                      <img src="{{asset('images/google.png')}}" alt="google.png" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="img-bg">
                    <img src="{{asset('images/bg-head.png')}}" alt="bg-head.png" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
    <!-- about start  -->
    <div class="client-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="client-logo">
              <ul>
                <li>
                  <a href="#"><img src="images/AirbnbLogo.png" alt="AirbnbLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="images/GoogleLogo.png" alt="GoogleLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="images/MicrosoftLogo.png" alt="MicrosoftLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="images/WalmartLogo.png" alt="WalmartLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="images/amazonLogo.png" alt="amazonLogo.png"/></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="partner text-center">
              <img src="images/starticon.png" alt="starticon.png" />
              <h4>
                <span>100+ Partners</span> have already with <br />
                us to <span>Give out Rewards</span>
              </h4>
              <p>
                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                amet
              </p>
            </div>
          </div>
        </div>
        <div class="main-icon-box text-center">
          <div class="row">
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="images/icon2.png" alt="icon2.png" />
                <h5>Unlimited Scratchs</h5>
                <p>Amet minim mollit non deserunt eco estsit aliqua amet.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="images/icon3.png" alt="icon3.png" />
                <h5>Daily Rewards</h5>
                <p>Amet minim mollit non deserunt eco estsit amet sintelit.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="images/icon4.png" alt="icon4.png" />
                <h5>Special Campaign</h5>
                <p>Amet minim mollit non deserunt eco estsit aliqua amet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grab-coupon">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="img-left">
              <img src="images/home-left.png" alt="home-left" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="grab-head">
              <h4>Grab coupons for the Best Deals</h4>
              <p>
                The gateway to sustainability lies in the energy storage. We
                offer you the key to discover a new world.
              </p>
              <ol>
                <li>
                  <span>01</span>
                  <span class="list-items">
                    <h5>Discount Copon</h5>
                    <p>
                      The gateway to sustainability lies in the energy storage.
                    </p>
                  </span>
                </li>
                <li>
                  <span>02</span>
                  <span class="list-items">
                    <h5>Buy one Get One</h5>
                    <p>
                      The gateway to sustainability lies in the energy storage.
                    </p>
                  </span>
                </li>
                <li>
                  <span>03</span>
                  <span class="list-items">
                    <h5>Free Product</h5>
                    <p>
                      The gateway to sustainability lies in the energy storage.
                    </p>
                  </span>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="step-fours">
      <div class="container">
        <div class="step-down">
          <h4>
            Easy 4 Steps to <br />
            Complete Journey
          </h4>
          <div class="row">
            <div class="col-sm-3">
              <div class="iconbox-step even">
                <img src="images/%e5%a5%96%e6%9d%af_trophy.png" alt="奖杯_trophy.png" />
                <h3>Scratch & Win Reward</h3>
                <p>The gateway to sustainability lies in the energy storage.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step odd">
                <img src="images/%e9%92%b1%e5%8c%85_wallets.png" alt="钱包_wallets.png" />
                <h3>Collect Reward in Wallet</h3>
                <p>The gateway to sustainability lies in the energy storage.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step even">
                <img
                  src="images/%e5%ba%94%e7%94%a8_application.png"
                  alt="应用_application.png"
                />
                <h3>Go to Nearest Shops</h3>
                <p>The gateway to sustainability lies in the energy storage.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step odd">
                <img src="images/%e6%b3%95%e6%a1%88_bill.png" alt="法案_bill.png" />
                <h3>Redeem Token from Shop</h3>
                <p>The gateway to sustainability lies in the energy storage.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="happy-client">
      <div class="container">
        <div class="quote-text text-center">
          <img src="images/zmdi_quote.png" alt="zmdi_quote.png" />
          <h4>
            What Our Happy <br />
            Clients Say
            <img
              class="starIcon"
              src="images/starticon.png"
              alt="starticon.png"
            />
          </h4>
        </div>
        <div class="testmonial-clients">
          <div class="row">
            <div class="col-sm-6">
              <div class="testmonial">
                <ul>
                  <li class="imagename">
                    <img src="images/Mask.png" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>Elwin Sharvill</h5>
                    <span>Designer</span>
                  </li>
                </ul>
                <q
                  >But nothing the copy said could convince her and so it didn’t
                  take long until a few insidious Copy Writers ambushed her,
                  made her drunk.</q
                >
              </div>
              <div class="testmonial odd">
                <ul>
                  <li class="imagename">
                    <img src="images/Mask2.png" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>Bernarr Dominik</h5>
                    <span>Dentist</span>
                  </li>
                </ul>
                <q
                  >When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her</q
                >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="testmonial full">
                <ul>
                  <li class="imagename">
                    <img src="images/Mask.png" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>Leonetta Lloyd</h5>
                    <span>Developer</span>
                  </li>
                </ul>
                <q
                  >It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful Pointing
                  has no control about the blind texts it is an almost
                  unorthographic life One day however a small line of blind
                  text.</q
                >
              </div>
              <div class="rating">
                <img src="images/rating.png" alt="rating.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="offer-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <div class="qr-code">
              <!-- <img src="./images/qrcode.png" alt="qrcode.png" /> -->
              <h4><span>Get Token</span> & <br/> Reward from <br/> <span>Popular Shops</span></h4>
              <div class="row">
                <div class="col-sm-5">
                  <div class="qr_code">
                      <h5>App Store QR</h5>
                      <img src="images/qr.png" alt="qr.png">
                  </div> 
                </div>
                <div class="col-sm-5">
                  <div class="qr_code">
                    <h5>Google Play QR</h5>
                    <img src="images/qr.png" alt="qr.png">
                </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-btn">
                   <a href="#"> <img src="images/google.png" alt="google.png"></a>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="img-btn">
                   <a href="#"> <img src="images/app.png" alt="app.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="offer">
              <img src="images/offer.png" alt="offer.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about end  -->
  @stop
