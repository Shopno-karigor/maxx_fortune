<div class="container">
    <nav class="navbar header-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('images/maxx-logo.png')}}" alt="maxx-logo.png"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="{{route('about-us')}}">About Us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('faq')}}">Faq</a>
          </li>
          <li class="nav-item">
            <a class="nav-link downloadBtn" href="#">Download</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>