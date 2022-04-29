@extends('frontend.master')
  @section('about-us')
    <title>Maxx Fortune | About Us</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')
      <div class="about-heading about">
        <div class="container">
          <h4>ABOUT US</h4>
        </div>
      </div>
    </header>
    <!-- header end -->

    <!-- about start  -->
    <div class="about-section about-texts">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="about-head">
              <h3>We have Achive this.</h3>
              <p>
                In episode 66, Chris Do talks with art director, illustrator and
                public speaker, Hank Washington.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="about-head-icon">
              <div class="row">
                <div class="col-sm-6">
                  <div class="marchent">
                    <h3>100+</h3>
                    <p>Total Merchant</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="marchent">
                    <h3>2.1m</h3>
                    <p>Mobile App Users</p>
                  </div>
                </div>
              </div>
              <span
                >They talk about their experience and feelings about public
                speaking, finding your voice when giving talks, and how to feel
                at home in the design world as a person of color. make world
                beatuiful.</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="our-object">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="images/object.png" alt="object.png" />
          </div>
          <div class="col-sm-6">
            <div class="object-paragraph">
              <div class="row">
                <div class="col-sm-6 col-small">
                  <p>OUR OBJECTIVE</p>
                </div>
                <div class="col-sm-6 col-small">
                  <div class="star">
                    <img src="images/icon1.png" alt="icon1.png" />
                  </div>
                </div>
              </div>
              <h4>Customer-Driven <span>Pro Innovation</span></h4>
              <p class="paraghrap-aliq">
                Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.
                Sunt qui esse pariatur duis deserunt mollit
              </p>
              <div class="row">
                <div class="col-sm-6">
                  <div class="customer-service">
                    <h4>Custom Server</h4>
                    <p>
                      Objectively formulate client-based convergence and
                      installed.
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="machine-learning">
                    <h4>Machine Learning</h4>
                    <p>
                      Objectively formulate client-based convergence and
                      installed.
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="customer-service">
                    <h4>Custom Server</h4>
                    <p>
                      Objectively formulate client-based convergence and
                      installed.
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="machine-learning">
                    <h4>Machine Learning</h4>
                    <p>
                      Objectively formulate client-based convergence and
                      installed.
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
        <p>OUR CLIENTS</p>
        <h4>
          <span>Companies that</span> know me well confirm <br />
          that We are <span>a Great Company.</span>
        </h4>
        <div class="row">
          <div class="col-sm-12">
            <div class="client-logo">
              <ul>
                <li>
                  <a href="#"
                    ><img src="images/AirbnbLogo.png" alt="AirbnbLogo.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="images/GoogleLogo.png" alt="GoogleLogo.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="images/MicrosoftLogo.png"
                      alt="MicrosoftLogo.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="images/WalmartLogo.png" alt="WalmartLogo.png"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="images/amazonLogo.png" alt="amazonLogo.png"
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
            <h4>Users is our Main Priority</h4>
            <q
              >The sky was cloudless and of a deep dark blue the spectacle
              before us was indeed sublime. The sky was cloudless and of a deep
              dark blue.</q
            >
            <h5>Jason Stephen <span>Ceo of e-wallet app</span></h5>
          </div>
          <div class="col-sm-5">
            <div class="man">
              <img src="images/man.png" alt="man.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about end  -->
  @stop
