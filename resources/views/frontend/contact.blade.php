@extends('frontend.master')
  @section('contact-us')
    <title>Maxx Fortune | Contact Us</title>
    <!-- header start  -->
    <header class="header-section contact">
      @include('frontend.nav')
      <div class="contact-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 contact-us-title">
              <h1 class="text-center">Get in Touch</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 contact-us-info">
              <div class="email">
                <h2>Say Hello</h2>
                <span>{{$response->contact_email}}</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  contact-us-info">
              <div class="email">
                <h2>You are here</h2>
                <span>{{$response->contact_website}}</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 contact-us-info">
              <div class="email">
                <h2>We are Here!</h2>
                <span>{{$response->contact_address}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->

    <!-- faq start  -->
    <div class="contact-section">
      <div class="container">


        <div class="bg-contact-fileds">
          @if(Session('error'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="fa fa-exclamation-circle"></i> Error!</h5>
              {{ Session('error') }}
            </div>
          @endif
          @if(Session('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="fa fa-check"></i> Success!</h5>
              {{ Session('success') }}
            </div>
          @endif
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
              <form action="{{route('store-customer-query')}}" method="post">
                @csrf
                <div class="inputdiv">
                  <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <br />
                  <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" id="email" value="{{ old('email') }}"/><br />
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" cols="30" rows="10" placeholder="Message" value="{{ old('message') }}"></textarea>
                  @error('message')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <br />
                  <button class="btn btn-dark" type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="contact-map">
          <h4 class="text-center">Find us <span>On Map</span></h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3988.598067193896!2d103.83487635002366!3d1.4170889388281798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1671636304100!5m2!1sen!2ssg" width="100%" height="400" frameborder="0" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <!-- faq end  -->
  @stop
