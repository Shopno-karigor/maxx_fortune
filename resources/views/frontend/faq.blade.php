@extends('frontend.master')
  @section('faq')
    <title>Maxx Fortune | FAQ</title>
    <!-- header start  -->
    <header class="header-section faq">
      @include('frontend.nav')
      <div class="faq-heading">
        <div class="continer">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 faq-title">
              <h1 class="text-center">Frequently Asked Question</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->

    <!-- faq start  -->
    <div class="faq-section">
      <div class="container">
        <div class="accordion" id="accordionExample">
          @foreach ( $response as $value)
          <div class="card">
            <div class="card-header" id="{{$value->id}}">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#{{'faq'.$value->id}}">
                  {{$value->faq_title}} <i class="fa fa-plus"></i>
                </button>
              </h2>
            </div>
            <div id="{{'faq'.$value->id}}" class="collapse" aria-labelledby="{{$value->id}}" data-parent="#accordionExample">
              <div class="card-body">
                <p>
                  {{$value->faq_answer}}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- faq end  -->
  @stop
