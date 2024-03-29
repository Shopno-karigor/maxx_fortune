@extends('frontend.master')
  @section('about-us')
    <title>Maxx Fortune | About Us</title>
    <!-- header start  -->
    <header class="header-section about">
      @include('frontend.nav')
      <div class="about-area">
        <div class="container">
          <div class="row">
            <div class="about-header-text col-md-6 col-lg-6 col-sm-12">
              <div class="about-head">
                <h3>What is MaxxFortune!</h3>
                <p>
                  MaxxFortune is a unique marketing platform for small and mid-size businesses in Singapore. 
                </p>
              </div>
            </div>
            <div class="about-header-text col-md-6 col-lg-6 col-sm-12">
              <div class="about-head-icon">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="marchent">
                      <h3>1000+</h3>
                      <p>Total Merchants</p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="marchent">
                      <h3>2000+</h3>
                      <p>MaxxFortune Users</p>
                    </div>
                  </div>
                </div>
                <span>
                  We have started our humble journey at January 2023, under MaxxFortune Pte. Ltd. We have developed a Machine Learning based Advertising platform for business in Singapore. We believe in Maximum Output with Cost Efficient for Promotional pricing.
                </span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->

    <!-- about start  -->
    <div class="our-object">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{asset('images/object.png')}}" alt="object.png" class="img-responsive" />
          </div>
          <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6">
            <div class="object-paragraph">
              <div class="row">
                <div class="col-sm-6 col-small">
                  <p>OUR OBJECTIVE</p>
                </div>
                <div class="col-sm-6 col-small">
                  <div class="star">
                    <img src="{{asset('images/icon1.png')}}" alt="icon1.png" />
                  </div>
                </div>
              </div>
              <h4>Customer-Driven <span>Promotional Pricing</span></h4>
              <p class="paraghrap-aliq">
                MaxxFortune platform provides 100% Organic Trafic for Business. 
              </p>
              <div class="row">
                <div class="col-sm-6">
                  <div class="customer-service">
                    <h4>Organic Traffics</h4>
                    <p>
                      Our Traffics are completely organic. We ensure that.
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="machine-learning">
                    <h4>Cost Efficient</h4>
                    <p>
                      MaxxFortune offers as minimum as 0.01 SGD for each impression.
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="customer-service">
                    <h4>Better Reach</h4>
                    <p>
                      MaxxFortune ensure direct reach to end-customer. No Third-Party
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="machine-learning">
                    <h4>Machine Learning</h4>
                    <p>
                     Our Machine Learning algorithm will bring you the right customer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-client">
      <div class="container">
        <p>OUR TOP MERCHANTS</p>
        <h4>
          <span>Companies are</span> connecting with us to provide <br />
          Free "<span>Discount Coupons and Gifts".</span>
        </h4>
        <div class="row">
          <div class="col-sm-12">
            <div class="client-logo">
              <ul>
                <li>
                  <a href="#"
                    ><img src="{{asset('images/longquan.png')}}" alt="longquan.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('images/upodesta.png')}}" alt="upodesta.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('images/nine-construction.png')}}" alt="nine-construction.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('images/eurolink.png')}}" alt="eurolink.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('images/tani.png')}}" alt="tani.png"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="founder-message">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <p>Founder Message</p>
            <h4>Best for Organic Traffic</h4>
            <q>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </q>
            <h5>Ana Toh <span>CEO of MaxxFortune Pte. Ltd.</span></h5>
          </div>
          <div class="col-sm-5">
            <div class="man">
              <img src="{{asset('images/man.png')}}" alt="man.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about end  -->
  @stop
