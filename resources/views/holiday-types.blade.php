@extends('layouts.app')

@section('content')
@php
    $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
@endphp
  @include('page.default-slider',['slider'=>$uri,'mainPoint'=>$mainPoint])
  @include('layouts.booking')
  <section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                    <div class="text-dark">
                    @foreach ($data as $key)
                    {!! $key[0] !!}
                    @endforeach
                       
                    </div>

                    
    
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->




        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


  
@endsection
