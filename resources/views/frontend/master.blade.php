<!DOCTYPE html>
  <html>
    @include('frontend.header')
    <body>
        @yield('home')
        @yield('about-us')
        @yield('contact-us')
        @include('frontend.footer')
    </body>
    @include('frontend.footer-script')
 </html>