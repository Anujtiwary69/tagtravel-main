@extends('layouts.app')

@section('content')
  @include('page.default-slider',['slider'=>$data['parent']->url])
  @include('layouts.booking')

<section class="vc_row">
    <div class="container">
        <div class="row">
            <style>
                p{
                    padding-bottom: 0px;
                     margin-bottom: 0px;
                }
                
            </style>
            <div class="lqd-column col-md-12  px-md-5">

                <header class="lqd-fancy-title  mb-5">
                    <h2 class="text-uppercase mt-0 mb-1 text-center">{{ $data['parent']->name }}</h2>
                  
                    <p class="text-dark" style="line-height:1;font-size:18px;"><b>*Please note Citizens of 86 countries can enjoy visa-free travel to Uzbekistan (with different lengths of stay in the country ranging from 7 days to 60 days as well as unlimited stay). In addition, individuals who possess a residency visa for UAE are also entitled to 30-day visa-free entry, provided the resident visa is valid for at least 90 days after entering Uzbekistan. For more information click <a href="/visa-for-uzbekistan" style="color:#4c6da2; !important;">here</a></b></p>
                </header>
                <!-- /.lqd-fancy-title -->

            </div>
            <!-- /.lqd-column col-md-8 col-md-offset-2 -->
            @php
    		$mainPoint = config('app.env') === 'production' ? '/public/' : '/';
		@endphp
            <div class="container">
                <div class="lqd-column col-md-12">
                    <table class="table table-bordered" style="color: #4c6da2;">
                        <tr>
                            <td><b>Duration:</b> {{ $data['parent']->day }} Days, {{ $data['parent']->night }} Nights
                                <br><b>Itinerary:</b>  {!! $data['parent']->content !!}</td>
                            <td><b>Price:</b> 
                            @if($data['parent']->price!="0")
                                ${{ $data['parent']->price }}
                            @else
                                On Request
                            @endif
                            
                            </td>

                        </tr>
                    </table>

                </div>
                <!-- /.lqd-column col-md-4 -->

                
                <div class="lqd-column col-md-12">
                    {!! $data['parent']->des !!}
                </div>
                <!-- /.lqd-column col-md-4 -->
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12 ">
                            {{-- <h4>Latest News</h4> --}}
                            <ul class="timeline">
                            @php $i=0 @endphp
                            @foreach($data['content'] as $key)
                            @php $i++ @endphp
                                <li>

                                   <h3>
                                       <div class="bg-color-ateca round-container" style="position: absolute;
                                    left: -2%; z-index: 1000;background-color:#4c6da2 !important;
                                ">
                                    <div class="center" style="display:block;top: 44%;
                                    left: 32%;">
                                        <p class="text-white mb-0 pb-0" style="font-size: 18px;
                                        font-weight: 100;line-height: 0;">DAY</p>

                                        <h2 class="mt-0 text-white number-text" style="text-align: center;">{{ $i }}</h2>
                                    </div>
                                </div>{{ $key->name }}</h3>
                                 {!! $key->content !!}
                                 @if($key->img!="")
                                   <img src="{{asset($mainPoint.'assets/img'.$key->img.'.jpg')}}"/>
                                   @endif
                                </li>
                               @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="row contact-form col-12 col-md-offset-6">
        <div class="col-md-2 text-md-right input-filled">
            <form action="mailto:CESC@grandchortoqresort.com" method="POST" enctype="text/plain">
                <input type="submit" value="Get a Quote">
            </form>
        </div>
    </div>
</section>

@include('home.awards')

@endsection