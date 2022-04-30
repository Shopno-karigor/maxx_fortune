@extends('frontend.master')
  @section('contact-us')
    <title>Maxx Fortune | Contact Us</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')
    </header>
    <!-- header end -->
    <div class="faq-heading contact text-center">
      <div class="continer"><h1>Get in Touch</h1></div>
    </div>
    <!-- faq start  -->
    <div class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="email">
              <h2>Say Hello</h2>
              <span>hello@maxosapp.com</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="email">
              <h2>Make a Call</h2>
              <span>(+123) 4567 8910</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="email">
              <h2>We are Here!</h2>
              <span>6391 Elgin St. Celina, Delaware 10299</span>
            </div>
          </div>
        </div>
        <div class="bg-contact-fileds">
          <div class="row">
            <div class="col-sm-6">
              <div class="msg-body">
                <img src="{{asset('images/icon.png')}}" alt="icon.png" />
                <h2>
                  Feel Free to <span class="sendmsg">Send a Message</span>
                </h2>
                <p>
                  Stay up to date with our weekly newsletter update for more information
                </p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="inputdiv">
                <input class="form-control" type="text" placeholder="Name" />
                <br />
                <input class="form-control" type="email" placeholder="Email" name="email" id="email"/><br />
                <textarea class="form-control" name="" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                <br />
                <button class="btn btn-dark" type="submit">Send Message</button>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-map">
          <h4 class="text-center">Find us <span>On Map</span></h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="400" frameborder="0" style="border: 0"></iframe>
        </div>
      </div>
    </div>
    <!-- faq end  -->
  @stop
