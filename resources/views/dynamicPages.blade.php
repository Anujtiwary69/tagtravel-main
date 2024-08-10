@extends('layouts.app')
@extends('layouts.app')
@php
    		$mainPoint = config('app.env') === 'production' ? '/public/' : '/';
		@endphp
@section('content')
    @include('page.default-slider',['slider'=>$data['content']->img,'mainPoint'=>$mainPoint])
    @include('layouts.booking')
    @if(!$data['content']->subpage)
    <section class="vc_row">
        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                    <header class="lqd-fancy-title text-justify mb-30">
                        <h3 class="text-uppercase mt-0 mb-1" align="center">{{ $data['content']->name }}</h3>
                        {!! $data['content']->content !!}


                    </header>
                    <!-- /.lqd-fancy-title -->

                </div>
                <!-- /.lqd-column col-md-8 col-md-offset-2 -->


                {{-- @include('component.sub_tour') --}}


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@else
    @include('component.subpage')
@endif
@endsection