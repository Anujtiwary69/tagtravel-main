@extends('layouts.app')

@section('content')
  @include('page.default-slider',['slider'=>'press'])
  @include('layouts.booking')
<section class="vc_row pt-3 pb-0 mb-5 bg-gray">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center">

            <div class="lqd-column col-md-12">

                <header class="lqd-fancy-title mb-md-0 ">
                    <h2 class="text-uppercase mt-0 mb-1 text-center">{{ $data['press']->name }}</h2>
                    <p class="text-dark text-left" style="line-height:1;">{!! $data['press']->text !!}</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 -->


            @endsection