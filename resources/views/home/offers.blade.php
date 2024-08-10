<section class="vc_row pt-3 pb-0 mb-5 bg-gray">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center">

            <div class="lqd-column col-md-12">

                <header class="lqd-fancy-title mb-md-0 text-center">
                    <h2 class="text-uppercase mt-0 mb-1">SPECIAL OFFERS</h2>
                    <p class="text-dark" style="line-height:1;">See the best of Central Asia’s must-see attractions and diverse
                        sights with our superb deals.  <a href="/offers" class="btn btn-naked font-weight-bold text-uppercase">
                    <span>
                        <span class="btn-txt">SEE MORE</span>
                    </span>
                </a></p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 -->

          

            @foreach ($offers as $key)
            <div class="lqd-column col-md-3">
                @if($key[0]!="")
                <a href="/offers/{{ str_replace(' ','-',strtolower($key[1])) }}">
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset($mainPoint.'assets/img/offers/'.$key[0].'.png')}}" alt="{{ $key[1] }}">
                    </figure>
                    <div class="fancy-box-contents mt-0 pt-1">
                        <div class="fancy-box-header">
                            <h3 class="font-weight-semibold mt-1 text-dark" style="line-height:1 !important;">{!! $key[1] !!}</h3>

                        </div><!-- /.fancy-box-header -->
                        <div class="fancy-box-info">
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit</p> --}}
                        </div><!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->
                     <div class="fancy-box-footer">
                        <h6> Know More </h6>
                        <span class="fancy-box-icon"><i class="icon-liquid_arrow_right"></i></span>
                    </div><!-- /.fancy-box-footer -->
                </div>
                </a>
                @endif

            </div><!-- /.lqd-column col-md-4 -->
            @endforeach

        </div><!-- /.row d-flex flex-wrap align-items-center -->
    </div><!-- /.container -->
</section>
