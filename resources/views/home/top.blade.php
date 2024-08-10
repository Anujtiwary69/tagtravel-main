<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">TOP TOURS</h2>
                    <p class="text-dark" style="line-height:1">Embark on fun and lively city tours as we show you around some of the
                        most spectacular attractions and unique experiences in Central Asia</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

          
            @foreach ($top as $key)
            <a href="/top-tours/{{str_replace(' ','-',strtolower($key->name))}}">
            <div class="lqd-column col-md-4">
              
                <div
                class="fancy-box fancy-box-small fancy-box-travel"
                data-slideelement-onhover="true"
                data-slideelement-options='{ "visibleElement": ".fancy-box-header", "hiddenElement": ".fancy-box-info" }'>

                    <figure class="fancy-box-image" data-responsive-bg="true">
                        <img width="1550" height="1000"  src="{{asset($mainPoint.'assets/img/top/'.$key->id.'.jpg')}}?rand={{rand()}}" alt="{{ $key->name}}"  />
                    </figure>

                    <div class="fancy-box-contents">
                        <div class="fancy-box-header">
                        @if($key->price!="0" && $key->price!=null)
                             <span class="fancy-box-time bg-primary" style="background-color:#dd3870;padding-bottom: 1px;" style="font-size:1em !important;">From <span style="font-size:1.5em !important;">${{  $key->price  }}</span> </span> 
                            @elseif($key->price=="0")
                            <span class="fancy-box-time bg-primary" style="background-color:#dd3870;padding-bottom: 1px;" style="font-size:1em !important;"> <span style="font-size:1.5em !important;">On Request </span> </span> 
                        @endif
                             {{-- <h6  style="color:#4c6da2;"> Starting <strong></strong> </h6> --}}
                            <h3>{{ $key->name }}</h3>
                        </div>
                        <div class="fancy-box-info">
                            {{--  <p>Explore South America holidays and discover the best time and places to visit.</p>  --}}
                            
                            <div class="fancy-box-footer">
                                <a href="/top-tours/{{str_replace(' ','-',strtolower($key->name))}}" class="btn btn-naked text-uppercase ld_button_5d4d4c6052ca2">
                                    <span>
                                        <span class="btn-txt">Learn More</span>
                                        <span class="btn-icon">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </div><!-- /.fancy-box-footer -->
                        </div><!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->

                </div><!-- /.fancy-box -->
               

            </div><!-- /.lqd-column col-md-4 -->
        </a>
            @endforeach



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
