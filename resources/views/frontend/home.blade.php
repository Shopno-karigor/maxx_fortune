@extends('frontend.master')
  @section('home')
    <title>Maxx Fortune | Home</title>
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
                  100% Free! Download now!! Enjoy Free Gifts!!!
                </p>
                <div class="app-img">
                  <a href="https://play.google.com/store/apps/details?id=com.rovio.baba&hl=en&gl=US"><img src="{{asset('images/app.png')}}" alt="app.png" /></a>
                  <a href="https://play.google.com/store/apps/details?id=com.rovio.baba&hl=en&gl=US"><img src="{{asset('images/google.png')}}" alt="google.png" /></a>
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
          {{-- <div class="col-sm-12">
            <div class="client-logo">
              <ul>
                <li>
                  <a href="#"><img src="{{asset('images/AirbnbLogo.png')}}" alt="AirbnbLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="{{asset('images/GoogleLogo.png')}}" alt="GoogleLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="{{asset('images/MicrosoftLogo.png')}}" alt="MicrosoftLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="{{asset('images/WalmartLogo.png')}}" alt="WalmartLogo.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="{{asset('images/amazonLogo.png')}}" alt="amazonLogo.png"/></a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="partner text-center">
              <img src="{{asset('images/starticon.png')}}" alt="starticon.png" />
              <h4>
                <span>100+ Partners</span> have already with <br />
                us to <span>Give out Rewards</span>
              </h4>
              <p>
                100% prizes for each scratch. Completely Free. Try now!
              </p>
            </div>
          </div>
        </div>
        <div class="main-icon-box text-center">
          <div class="row">
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="{{asset('images/icon2.png')}}" alt="icon2.png" />
                <h5>Free Scratchs</h5>
                <p>Completely Free Scracths. 1 Scratch in every 30 minutes.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="{{asset('images/icon3.png')}}" alt="icon3.png" />
                <h5>Daily Rewards</h5>
                <p>Daily Rewards for everyday login and 7 scratch in a day.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box">
                <img src="{{asset('images/icon4.png')}}" alt="icon4.png" />
                <h5>Special Campaign</h5>
                <p>More Free prizes and discounts on Special Campaign.</p>
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
              <img src="{{asset('images/home-left.png')}}" alt="home-left" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="grab-head">
              <h4>Grab the MaxxFortune App for the Best Deals</h4>
              <p>
                We offers best discount from our hundrards of enlisted merchants. Get one for you!
              </p>
              <ol>
                <li>
                  <span>01</span>
                  <span class="list-items">
                    <h5>Discount Copon</h5>
                    <p>
                      We are providing hundrads of Discount Copon everyday
                    </p>
                  </span>
                </li>
                <li>
                  <span>02</span>
                  <span class="list-items">
                    <h5>Buy one Get One</h5>
                    <p>
                      Get one Free item with your purchase.
                    </p>
                  </span>
                </li>
                <li>
                  <span>03</span>
                  <span class="list-items">
                    <h5>Free Gifts</h5>
                    <p>
                      Free Gifts from MaxxFortune for you.
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
                <img src="{{asset('images/%e5%a5%96%e6%9d%af_trophy.png')}}" alt="奖杯_trophy.png" />
                <h3>Scratch & Win Reward</h3>
                <p>Downlaod the app. Scratch to Win</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step odd">
                <img src="{{asset('images/%e9%92%b1%e5%8c%85_wallets.png')}}" alt="钱包_wallets.png" />
                <h3>Collect Prizes in Wallet</h3>
                <p>Collect the prize on your wallet.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step even">
                <img src="{{asset('images/%e5%ba%94%e7%94%a8_application.png')}}" alt="应用_application.png"/>
                <h3>Go to Nearest Shops</h3>
                <p>Go to our Nearest MaxxFortune shop to redeem your prize.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="iconbox-step odd">
                <img src="{{asset('images/%e6%b3%95%e6%a1%88_bill.png')}}" alt="法案_bill.png" />
                <h3>Redeem Prize from Shop</h3>
                <p>Enjoy the Free Prize from MaxxFortune.</p>
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
          <img src="{{asset('images/zmdi_quote.png')}}" alt="zmdi_quote.png" />
          <h4>
            What Our Happy <br />
            Clients Say
            <img class="starIcon" src="{{asset('images/starticon.png')}}" alt="starticon.png"/>
          </h4>
        </div>
        <div class="testmonial-clients">
          <div class="row">
            <div class="col-sm-6">
              <div class="testmonial">
                <ul>
                  <li class="imagename">
                    <img src="{{asset('images/DavidWong.png')}}" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>David Wong</h5>
                    <span>User</span>
                  </li>
                </ul>
                <q>I have won a Dominos Free Pizza from MaxxFortune scratch. I can't beleve its real</q>
              </div>
              <div class="testmonial odd">
                <ul>
                  <li class="imagename">
                    <img src="{{asset('images/Mask2.png')}}" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>Darren Lye</h5>
                    <span>User</span>
                  </li>
                </ul>
                <q>I have won a Dominos Free Pizza from MaxxFortune scratch. I can't beleve its real</q>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="testmonial full">
                <ul>
                  <li class="imagename">
                    <img src="{{asset('images/Mask.png')}}" alt="Mask" />
                  </li>
                  <li class="namedis">
                    <h5>Leonetta Lloyd</h5>
                    <span>User</span>
                  </li>
                </ul>
                <q>I have won a Dominos Free Pizza from MaxxFortune scratch. I can't beleve its real</q>
              </div>
              <div class="rating">
                <img src="{{asset('images/rating.png')}}" alt="rating.png" />
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
              <h4><span>Get Gifts</span> & <br/> Prizes from <br/> <span>Popular Shops</span></h4>
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
                   <a href="https://play.google.com/store/apps/details?id=com.rovio.baba&hl=en&gl=US"> <img src="images/google.png" alt="google.png"></a>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="img-btn">
                   <a href="https://play.google.com/store/apps/details?id=com.rovio.baba&hl=en&gl=US"> <img src="images/app.png" alt="app.png"></a>
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
