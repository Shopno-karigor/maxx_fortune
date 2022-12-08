@extends('frontend.master')
  @section('faq')
    <title>Maxx Fortune | FAQ</title>
    <!-- header start  -->
    <header class="header-section">
      @include('frontend.nav')
    </header>
    <!-- header end -->
    <div class="faq-heading text-center">
      <div class="continer"><h1>Frequently Asked Question</h1></div>
    </div>
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
