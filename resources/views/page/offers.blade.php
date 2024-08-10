<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">OFFERS</h2>
                    <p class="text-dark" style="line-height:1">See the best of Central Asia’s must-see attractions and diverse sights with our superb deals.</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
             @foreach ($offers as $key)
             <a href="/offers/{{ str_replace(' ','-',strtolower($key[1])) }}">
            <div class="lqd-column col-md-3">
                @if($key[0]!="")
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset('/assets/img/offers/'.$key[0].'.png')}}" alt="{{  $key[1]  }}">
                    </figure>
                    <div class="fancy-box-contents mt-0 pt-1">
                        <div class="fancy-box-header">
                            <h3 class="font-weight-semibold mt-1 text-dark" style="line-height:1 !important;">{!! $key[1] !!}</h3>

                        </div><!-- /.fancy-box-header -->
                       <!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->
                    {{--  <div class="fancy-box-footer">
                        <h6> Learn More </h6>
                        <span class="fancy-box-icon"><i class="icon-liquid_arrow_right"></i></span>
                    </div><!-- /.fancy-box-footer -->  --}}
                </div>
                @endif

            </div><!-- /.lqd-column col-md-4 -->
            </a>
            @endforeach



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
